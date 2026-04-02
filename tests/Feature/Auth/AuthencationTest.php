<?php

use App\Models\User;
use function Pest\Laravel\post;

test('login screen can be rendered', function () {
    $response = $this->get(route('screen.login'));

    $response->assertStatus(200);
});

test('users can authenticate using the login screen', function () {
    $user = User::factory()->create();

    $response = post(route('screen.login'), [
       'email' => $user->email,
       'password' => 'password'
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
});
