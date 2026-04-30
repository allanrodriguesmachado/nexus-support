<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use function Pest\Laravel\assertAuthenticatedAs;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\post;

beforeEach(function () {
    Role::create(['name' => 'client']);
});

test('renders the register screen ', function () {
    $response = $this->get(route('register.create'));

    $response->assertStatus(200);
});

test('new clients to be registered', function () {
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

    $response->assertRedirect(route('dashboard'));
});

test('it should required fields', function () {
    $response = $this->post(route('register.store'));

    $response->assertSessionHasErrors(['name', 'email', 'password']);

    $this->assertGuest();
});

test('it should require unique email', function () {
    $user = User::factory()->create();
    $user2 = User::factory()->raw(['email' => $user['email']]);

    $response = $this->post(route('register.store'), $user2);

    $response->assertSessionHasErrors('email');
    $this->assertGuest();
});
