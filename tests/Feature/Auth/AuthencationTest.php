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

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
});

test('allows authenticated users to logout', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('logout'));

    $this->assertGuest();
    $response->assertRedirect('/');
});
