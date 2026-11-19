@extends('layouts.app')

@section('title', 'About')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="eyebrow">About ALPECO</div>
        <h1>Alternative pest control.</h1>
        <p>Practical help for pest problems at your home or business.</p>
    </div>
</section>

<section class="section">
    <div class="container split">
        <div class="split-copy">
            <div class="eyebrow">Who we are</div>
            <h2>Plain advice and practical next steps.</h2>
            <p>ALPECO Alternative Pest Control helps you identify the issue and choose an appropriate solution.</p>
            <p>From ants and bed bugs to rats, mice and spiders, we keep the process straightforward and focused on your pest problem.</p>
        </div>
        <div class="van-panel">
            <img src="{{ asset('images/Drawn_Company_Car.png') }}" alt="Alpeco pest control service vehicle">
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="section-head">
            <div class="eyebrow">How we work</div>
            <h2>What guides us.</h2>
        </div>
        <div class="values-grid">
            <article class="value"><strong>01</strong><h3>Listen</h3><p>We start with the pest problem you are seeing.</p></article>
            <article class="value"><strong>02</strong><h3>Advise</h3><p>We give clear, practical information about next steps.</p></article>
            <article class="value"><strong>03</strong><h3>Help</h3><p>We focus on the right solution for the situation.</p></article>
        </div>
    </div>
</section>
@endsection
