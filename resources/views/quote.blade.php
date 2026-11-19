@extends('layouts.app')

@section('title', 'Request a Quote')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="eyebrow">Request a quote</div>
        <h1>Tell us what needs attention.</h1>
        <p>Call +64 7 985 4198 or send us the details below.</p>
    </div>
</section>

<section class="section">
    <div class="container form-layout">
        <aside class="form-aside">
            <div class="eyebrow">Get started</div>
            <h2>Describe the situation.</h2>
            <p>Include the site address, pest problem, and any helpful images.</p>
            <div class="contact-details">
                <div><span>By phone</span><strong><a href="tel:+6479854198">+64 7 985 4198</a></strong></div>
                <div><span>By email</span><strong><a href="mailto:info@alpeco.co.nz">info@alpeco.co.nz</a></strong></div>
            </div>
        </aside>
        @include('contact-form')
    </div>
</section>
@endsection
