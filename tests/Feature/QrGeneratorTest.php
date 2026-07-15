<?php

it('displays the QR generator page', function () {
    $this->get(route('qr.index'))
        ->assertOk()
        ->assertSee('QR Generator');
});

it('generates a contact QR code', function () {
    $this->post(route('qr.generate'), [
        'name' => 'Rahul Kumar',
        'mobile' => '9876543210',
        'email' => 'rahul@example.com',
    ])->assertRedirect()
        ->assertSessionHas('qr')
        ->assertSessionHas('data', [
            'name' => 'Rahul Kumar',
            'mobile' => '9876543210',
            'email' => 'rahul@example.com',
        ]);
});

it('validates QR contact details', function () {
    $this->from(route('qr.index'))
        ->post(route('qr.generate'), ['name' => '', 'mobile' => '', 'email' => 'not-an-email'])
        ->assertRedirect(route('qr.index'))
        ->assertSessionHasErrors(['name', 'mobile', 'email']);
});
