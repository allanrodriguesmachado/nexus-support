<?php

use App\Models\User;
use function Pest\Laravel\post;

test('renders the login screen', function () {
    $response = $this->get(route('login'));

    $response->assertStatus(200);
});

test('authenticates users with valid credentials', function () {
    $user = User::factory()->create();

    $response = post(route('auth'), [
        'email' => $user->email,
        'password' => 'password'
    ]);

    $this->assertAuthenticatedAs($user);
    $response->assertRedirect(route('dashboard', absolute: false));
});

test('can not create a user with an empty email.', function () {
    $user = User::factory()->raw(['email' => '']);

    $response = $this->post(route('register.store'), $user);

    $response->assertSessionHasErrors('email');
    $this->assertGuest();
});

test('can not create a user with an empty password.', function () {
    $user = User::factory()->raw(['password' => '']);

    $response = $this->post(route('register.store'), $user);

    $response->assertSessionHasErrors('password');
    $this->assertGuest();
});

test('can not create an existing email.', function () {
    $user = User::factory()->create();
    $user2 = User::factory()->raw(['email' => $user->email]);

    $response = $this->post(route('register.store'), $user2);
    $response->assertSessionHasErrors('email');
    $this->assertGuest();
});

test('can not authenticate with invalid password', function () {
    $user = User::factory()->create([
        'password' => bcrypt('password')
    ]);

    $this->post(route('auth'), [
        'email' => $user->email,
        'password' => 'wrong-password'
    ]);

    $this->assertGuest();
});

test('authenticated users are redirected when visiting login screen', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('login'));

    $response->assertRedirect(route('dashboard', absolute: false));
});

test('it should  required email', function () {
    $user = User::factory()->create();

    $response = $this->post(route('auth'), []);

    $response->assertSessionHasErrors('email');
    $this->assertGuest();
});
