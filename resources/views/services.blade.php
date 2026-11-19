@extends('layouts.app')

@section('title', 'Services')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="eyebrow">Alternative Pest Control</div>
        <h1>Pests we can help with.</h1>
        <p>Call for a free phone quote: 07 985 4198.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <div class="eyebrow">Start here</div>
            <h2>Commercial or residential?</h2>
            <p>Choose the type of property first. Both options include all of our pest services.</p>
        </div>
        @include('pest-selector')
    </div>
</section>

<section class="cta-band">
    <div class="container">
        <h2>Not sure what pest you have?</h2>
        <a class="button" href="tel:+6479854198">Call 07 985 4198</a>
    </div>
</section>
@endsection
