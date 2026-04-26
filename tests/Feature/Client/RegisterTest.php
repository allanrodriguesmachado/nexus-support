<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use function Pest\Laravel\assertAuthenticatedAs;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\post;

test('renders the register screen ', function () {
    $response = $this->get(route('register'));

    $response->assertStatus(200);
});

test('new clients to be registered', function () {
    Role::create(['name' => 'client']);

    $response = post(route('register.store'), [
        'name' => 'Allan Rodrigues',
        'email' => 'john@client.com.br',
        'password' => 'password',
        'password_confirmation' => 'password'
    ]);

    assertDatabaseHas('users', [
        'email' => 'john@client.com.br'
    ]);

    $user = User::where('email', 'john@client.com.br')->first();

    assertAuthenticatedAs($user);

    expect($user)->not->toBeNull()->and($user->hasRole('client'))->toBeTrue();

    $response->assertRedirect(route('dashboard'));
});
