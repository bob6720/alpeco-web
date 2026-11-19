<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('the footer links to each partner website', function () {
    $response = $this->get('/');

    $response->assertOk()
        ->assertSee('https://peststop.co.nz/', false)
        ->assertSee('https://www.brcnz.co.nz/', false)
        ->assertSee('https://www.heatme.co.nz/', false)
        ->assertSee('PestStop')
        ->assertSee('BRC Technology')
        ->assertSee('HEATME™');
});

test('the home page shows the pest control name and phone number', function () {
    $response = $this->get('/');

    $response->assertOk()
        ->assertSee('Alternative Pest Control')
        ->assertSee('07 985 4198')
        ->assertSee('Ants')
        ->assertSee('Bed Bugs')
        ->assertSee('images/icons/bird.png')
        ->assertSee('images/icons/borer.png')
        ->assertSee('mite.ico')
        ->assertSee('Rats &amp; Mice', false);
});
