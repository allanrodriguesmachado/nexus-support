<?php

//test('renders the register callings screen ', function () {
//    $response = $this->get(route('callings.create'));
//
//    $response->assertStatus(200);
//});

use App\Models\Calling;
use App\Models\User;
use Spatie\Permission\Models\Role;

test('client can create a calling', function () {
    Role::create(['name' => 'client']);

    $user = User::factory()->create();
    $user->assignRole('client');

    $calling = Calling::factory()->create();

    $callings = $calling->toArray();

    $response = $this->actingAs($user)
        ->post(route('callings.store'), $callings);


    $response->assertRedirect(route('callings.create'));

    $this->assertDatabaseHas('callings', [
        'client_id' => $callings['id']
    ]);

    $response->assertRedirect(route('callings.create'));
});

test('client can list his callings', function () {
    Role::create(['name' => 'client']);
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
