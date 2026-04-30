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

test('it should  required email', function () {
    $user = User::factory()->create();

    $response = $this->post(route('auth'), []);

    $response->assertSessionHasErrors('email');
    $this->assertGuest();
});

test('it should required password', function () {
   $user = User::factory()->raw([
       'password' => '',
   ]);

   $response = $this->post(route('auth'), [
       'password' => $user['password']
   ]);

   $response->assertSessionHasErrors('password');
   $this->assertGuest();
});
