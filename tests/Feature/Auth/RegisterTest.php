<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use function Pest\Laravel\assertAuthenticatedAs;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\post;

test('can screen register', function () {
    $this->assertGuest();
    $response = $this->get(route('register'));

    $response->assertStatus(200);
});
//
//test('user can register', function () {
//    Role::create(['name' => 'client']);
//
//    $response = post('/register', [
//        'name' => 'Allan Rodrigues Machado',
//        'email' => 'allanrodriguesdeveloper@gmail.com',
//        'password' => 'Aln@830314',
//        'password_confirmation' => 'Aln@830314',
//    ]);
//
//    assertDatabaseHas('users', [
//        'name' => 'Allan Rodrigues Machado',
//        'email' => 'allanrodriguesdeveloper@gmail.com',
//    ]);
//
//    $user = User::where('email', 'allanrodriguesdeveloper@gmail.com')->first();
//
//    assertAuthenticatedAs($user);
//
//    expect($user)->not->toBeNull()
//        ->and($user->hasRole('client'))->toBeTrue();
//
//    $response->assertRedirect(route('dashboard', absolute: false));
//});
