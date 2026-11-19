@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero">
    <img class="hero-image" src="{{ asset('images/Colorful_bug_Banner.jpg') }}" alt="" fetchpriority="high">
    <div class="container hero-content">
        <div class="eyebrow">Alternative Pest Control</div>
        <h1>Pest problems? <span>We can help.</span></h1>
        <p>Call for a free phone quote and practical help from ALPECO.</p>
        <div class="hero-actions">
            <a class="button button-red" href="tel:+6479854198">Call 07 985 4198</a>
            <a class="button button-outline" href="#service-selector">Choose Your Service</a>
        </div>
    </div>
</section>

<div class="stats">
    <div class="container">
        <div class="stat"><strong>Free</strong><span>Phone quote</span></div>
        <div class="stat"><strong>9</strong><span>Pest types covered</span></div>
        <div class="stat"><strong>Trained team</strong><span>Registered technicians</span></div>
    </div>
</div>

<section class="section" id="service-selector">
    <div class="container">
        <div class="section-head">
            <div class="eyebrow">Start here</div>
            <h2>Commercial or residential?</h2>
            <p>Choose the type of property first. Both options include all of our pest services.</p>
        </div>
        @include('pest-selector')
    </div>
</section>

<section class="section section-soft">
    <div class="container split">
        <img class="feature-image" src="{{ asset('images/SitePicture.jpg') }}" alt="Close-up of an insect on a leaf" loading="lazy">
        <div class="split-copy">
            <div class="eyebrow">Why call ALPECO</div>
            <h2>Straightforward advice. Local pest control.</h2>
            <p>We provide traditional and non-toxic pest-control options for homes and businesses. Tell us what you are seeing and get clear next-step advice.</p>
            <div class="check-list">
                <span>Free phone quote</span>
                <span>Domestic and commercial service</span>
                <span>Trained, registered technicians</span>
            </div>
            <a class="button button-dark" href="tel:+6479854198">Call 07 985 4198</a>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container">
        <h2>Ready for a free phone quote?</h2>
        <a class="button" href="tel:+6479854198">Call 07 985 4198</a>
    </div>
</section>
@endsection
