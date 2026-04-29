<?php

use App\Models\Calling;
use App\Models\User;
use Spatie\Permission\Models\Role;

beforeEach(function () {
    Role::create(['name' => 'client']);
});

test('client can create a calling', function () {
    $user = User::factory()->create();
    $user->assignRole('client');

    $calling = Calling::factory()->raw();

    $response = $this->actingAs($user)
        ->post(route('callings.store'), $calling);

    $this->assertDatabaseHas('callings', [
        'client_id' => $user->id,
        'title' => $calling['title']
    ]);

    $response->assertRedirect(route('callings.create'));
});

test('client can list his callings', function () {
    $user = User::factory()->create();
    $user->assignRole('client');

    $calling = Calling::factory()->create([
        'client_id' => $user->id,
    ]);

    $this->actingAs($user)->
    get(route('callings.show'))
        ->assertSee($calling->title)
        ->assertStatus(200);
});

test('client cannot see callings from other clients', function () {
    $clientA = User::factory()->create();
    $clientB = User::factory()->create();

    $calling = Calling::factory()->create(['client_id' => $clientB->id]);

    $this->actingAs($clientA)
        ->get(route('callings.show'))
        ->assertDontSee($calling->title);
});

test('unauthenticated users cannot access callings', function () {
    $this->get(route('callings.show'))
        ->assertRedirect(route('login'));
});

test('authenticated users can access callings', function () {
    $user = User::factory()->create();
    $user->assignRole('client');

    $this->actingAs($user)
        ->get(route('callings.show'))
        ->assertStatus(200);
});

test('can not create a call with an empty title.', function () {
    $user = User::factory()->create();
    $user->assignRole('client');

    $calling = Calling::factory()->raw(['title' => '']);

    $this->actingAs($user)->post(route('callings.store'), $calling)->assertSessionHasErrors('title');
});
