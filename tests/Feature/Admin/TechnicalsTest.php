<?php

test('can screen register technical', function () {
    $response = $this->get(route('technical.create'));

    dd($response);
    $response->assertStatus(200);
});
