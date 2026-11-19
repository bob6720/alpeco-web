<?php

use App\Mail\ContactInquiry;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;

test('contact details include the location hours map and social links', function () {
    $response = $this->get(route('contact'));

    $response->assertOk()
        ->assertSee('3 View Road')
        ->assertSee('Mangakakahi, Rotorua 3015')
        ->assertSee('Site Address')
        ->assertSee('Thursday')
        ->assertSee('8:30 am–4:30 pm')
        ->assertSee('10:00 am–12:00 pm')
        ->assertSee('+64 7 985 4198')
        ->assertSee('info@alpeco.co.nz')
        ->assertSee('https://www.google.com/maps?q=3+View+Road%2C+Mangakakahi%2C+Rotorua+3015&amp;output=embed', false)
        ->assertSee('https://www.facebook.com/ALPECONZ#', false)
        ->assertSee('https://www.youtube.com/channel/UC9xDQyx63SBot-WkcvYbq2A', false);
});

test('valid contact submissions email the enquiry and uploaded images', function () {
    Mail::fake();

    $image = new UploadedFile(
        public_path('images/icons/ant.png'),
        'ant.png',
        'image/png',
        UPLOAD_ERR_OK,
        true,
    );

    $response = $this->post(route('contact.submit'), [
        'name' => 'Harry Meyer',
        'email' => 'customer@example.com',
        'phone' => '+64 21 123 4567',
        'site' => '3 View Road, ants around the kitchen',
        'message' => 'Please call to discuss spraying.',
        'images' => [$image],
    ]);

    $response->assertRedirect(route('contact'))
        ->assertSessionHas('contact_sent', true);

    Mail::assertSent(ContactInquiry::class, function (ContactInquiry $mail): bool {
        return $mail->hasTo('meyerharry0@gmail.com')
            && $mail->hasReplyTo('customer@example.com')
            && $mail->contactDetails['site'] === '3 View Road, ants around the kitchen'
            && count($mail->attachments()) === 1;
    });
});

test('invalid contact submissions do not send email', function () {
    Mail::fake();

    $response = $this->from(route('contact'))->post(route('contact.submit'), []);

    $response->assertRedirect(route('contact'))
        ->assertSessionHasErrors(['name', 'email', 'phone', 'site', 'message']);

    Mail::assertNothingOutgoing();
});

test('non-image uploads are rejected without sending email', function () {
    Mail::fake();

    $file = new UploadedFile(
        public_path('robots.txt'),
        'notes.txt',
        'text/plain',
        UPLOAD_ERR_OK,
        true,
    );

    $response = $this->post(route('contact.submit'), [
        'name' => 'Harry Meyer',
        'email' => 'customer@example.com',
        'phone' => '+64 21 123 4567',
        'site' => '3 View Road',
        'message' => 'Please call.',
        'images' => [$file],
    ]);

    $response->assertSessionHasErrors('images.0');

    Mail::assertNothingOutgoing();
});
