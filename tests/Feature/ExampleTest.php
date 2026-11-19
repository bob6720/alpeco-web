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

test('the services page offers residential and commercial choices', function () {
    $response = $this->get('/services');

    $response->assertOk()
        ->assertSee('Commercial or residential?')
        ->assertSee('data-audience="commercial"', false)
        ->assertSee('data-audience="residential"', false);
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
        ->assertSee('Commercial')
        ->assertSee('Residential')
        ->assertSee('href="#service-selector"', false)
        ->assertSee('buildings of all sizes')
        ->assertSee('https://peststop.co.nz/collections/ants', false)
        ->assertSee('https://peststop.co.nz/collections/bed-bugs', false)
        ->assertSee('https://peststop.co.nz/collections/birds', false)
        ->assertSee('https://peststop.co.nz/collections/all', false)
        ->assertSee('https://peststop.co.nz/collections/cockroaches', false)
        ->assertSee('https://peststop.co.nz/collections/fleas', false)
        ->assertSee('https://peststop.co.nz/collections/flies', false)
        ->assertSee('https://peststop.co.nz/collections/rodents', false)
        ->assertSee('https://peststop.co.nz/collections/spiders', false)
        ->assertSee('data-pest="bed-bugs"', false)
        ->assertSee('How long it takes')
        ->assertSee('mite.ico')
        ->assertSee('Rats &amp; Mice', false);
});
