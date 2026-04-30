<?php

use App\Models\User;

test('allows authenticated users to logout', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->post(route('logout'))
        ->assertRedirect(route('login'));
});

test('does not allow unauthenticated users to logout', function () {
   $response = $this->post(route('logout'));

   $response->assertRedirect(route('login'));

   $this->assertGuest();
});
