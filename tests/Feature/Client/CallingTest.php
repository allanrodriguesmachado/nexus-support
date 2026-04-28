<?php

//test('renders the register callings screen ', function () {
//    $response = $this->get(route('callings.create'));
//
//    $response->assertStatus(200);
//});

test('client can create a calling', function () {
    \Spatie\Permission\Models\Role::create(['name' => 'client']);

    $user = \App\Models\User::factory()->create();
    $user->assignRole('client');

    $response = $this->actingAs($user)->post(route('callings.store'), [
        'client_id' => $user->id,
        'title' => 'Internet',
        'description' => 'Problema na minha net',
        'category' => 'rede',
    ]);

    $response->assertRedirect(route('callings.create'));

    $this->assertDatabaseHas('callings', [
        'client_id' => $user->id,
        'title' => 'Internet',
    ]);

    return to_route('callings.create');
});
