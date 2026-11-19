@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="eyebrow">Contact us</div>
        <h1>Talk to Alternative Pest Control.</h1>
        <p>Call, email, or tell us what is happening and we’ll get back to you.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-grid">
            <article class="contact-card"><h3>By phone</h3><p><a href="tel:+6479854198">+64 7 985 4198</a><br>Free phone quote.</p></article>
            <article class="contact-card"><h3>By email</h3><p><a href="mailto:info@alpeco.co.nz">info@alpeco.co.nz</a></p></article>
            <article class="contact-card"><h3>Visit us</h3><p>3 View Road<br>Mangakakahi, Rotorua 3015</p></article>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container location-hours">
        <div class="hours-card">
            <div class="eyebrow">When we’re open</div>
            <h2>Opening hours</h2>
            <table class="hours-table">
                <tbody>
                    <tr><th scope="row">Monday</th><td>8:30 am–4:30 pm</td></tr>
                    <tr><th scope="row">Tuesday</th><td>8:30 am–4:30 pm</td></tr>
                    <tr><th scope="row">Wednesday</th><td>8:30 am–4:30 pm</td></tr>
                    <tr><th scope="row">Thursday</th><td>8:30 am–4:30 pm</td></tr>
                    <tr><th scope="row">Friday</th><td>8:30 am–4:30 pm</td></tr>
                    <tr><th scope="row">Saturday</th><td>10:00 am–12:00 pm</td></tr>
                    <tr><th scope="row">Sunday</th><td>10:00 am–12:00 pm</td></tr>
                </tbody>
            </table>
        </div>
        <div class="map-card">
            <div class="map-heading">
                <div>
                    <div class="eyebrow">Find us</div>
                    <h2>3 View Road, Rotorua</h2>
                </div>
                <a class="text-link" href="https://www.google.com/maps/search/?api=1&amp;query=3+View+Road%2C+Mangakakahi%2C+Rotorua+3015" target="_blank" rel="noopener noreferrer">Get directions ↗</a>
            </div>
            <iframe
                title="Google Maps location for 3 View Road, Mangakakahi, Rotorua 3015"
                src="https://www.google.com/maps?q=3+View+Road%2C+Mangakakahi%2C+Rotorua+3015&amp;output=embed"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</section>

<section class="section">
    <div class="container form-layout">
        <aside class="form-aside">
            <div class="eyebrow">Free phone quote</div>
            <h2>Tell us what needs attention.</h2>
            <p>Include the site address, the pest you’ve noticed, and any useful details. You can attach photos to help explain the situation.</p>
            <div class="contact-details">
                <div><span>By phone</span><strong><a href="tel:+6479854198">+64 7 985 4198</a></strong></div>
                <div><span>By email</span><strong><a href="mailto:info@alpeco.co.nz">info@alpeco.co.nz</a></strong></div>
            </div>
        </aside>
        @include('contact-form')
    </div>
</section>

<section class="cta-band">
    <div class="container">
        <h2>Need help with pests?</h2>
        <a class="button" href="tel:+6479854198">Call +64 7 985 4198</a>
    </div>
</section>
@endsection
