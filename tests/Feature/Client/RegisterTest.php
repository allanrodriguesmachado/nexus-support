<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use function Pest\Laravel\assertAuthenticatedAs;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\post;

test('renders the register screen ', function () {
    $response = $this->get(route('register.create'));

    $response->assertStatus(200);
});

test('new clients to be registered', function () {
    \Spatie\Permission\Models\Role::create(['name' => 'client']);

    $user = User::factory()->raw([
        'password' => 'password',
        'password_confirmation' => 'password'
    ]);

    $response = post(route('register.store'), $user);

    assertDatabaseHas('users', [
        'email' => $user['email']
    ]);

    $user = User::where('email', $user['email'])->first();

    assertAuthenticatedAs($user);

    expect($user)->not->toBeNull()->and($user->hasRole('client'))->toBeTrue();

    $response->assertRedirect(route('dashboard'));
});
