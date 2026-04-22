<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\{post, assertDatabaseHas};

//test('example', function () {
//    $this->assertGuest();
//    $response = $this->get('/technical/create');
//
//    dd($response->getStatusCode());
//
//    $response->assertStatus(200);
//});
uses(RefreshDatabase::class);
test('Register technical or admin', function (){
    Role::create(['name' => 'admin']);
    $response = post('/technical/create', [
        'name' => 'Allan Rodrigues Machado',
        'email' => 'allanrmachado@gmail.com',
        'password' => 'Aln@830314',
        'password_confirmation' => 'Aln@830314',
    ]);


//    assertDatabaseHas('users', [
//        'name' => 'Allan Rodrigues Machado',
//        'email' => 'allanrodriguesdeveloper@gmail.com',
//    ]);
    $user = User::where('email', 'allanrmachado@gmail.com')->first();

    assertDatabaseHas($user);

    expect($user)->not->toBeNull()->and($user->hasRole('admin'))->toBeTrue();

    $response->assertRedirect(route('dashboard', absolute: false));
});
