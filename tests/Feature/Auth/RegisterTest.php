<?php

use function Pest\Laravel\post;

test('can screen register', function () {
    $response = $this->get(route('register'));

    $response->assertStatus(200);
});

test('users can be registered', function () {
   $response = post(
       '/register',
       [
           'name' => 'Allan Roddrigues Machado',
           'email' => 'allanrodriguesdeveloper@gmail',
           'password' => 'Aln@830314',
           'password_confirmation' => 'Aln@830314',
       ]
   );

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
});
