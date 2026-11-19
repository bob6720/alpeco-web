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
            <div class="eyebrow">What we offer</div>
            <h2>Targeted help for unwanted pests.</h2>
        </div>
        <div class="service-grid">
            @foreach ([
                ['Ants', 'ant.png', 'Advice and treatment options for ant activity around homes and workplaces.'],
                ['Bed Bugs', 'bedbug.png', 'Help to identify and address bed bug problems.'],
                ['Birds', 'bird.png', 'Practical solutions for unwanted bird activity.'],
                ['Borer', 'borer.png', 'Help protect timber from borer damage.'],
                ['Cockroaches', 'cockroach.png', 'Focused control for cockroach infestations.'],
                ['Fleas', 'flea.png', 'Treatment options for flea problems in homes and properties.'],
                ['Flies', 'fly.png', 'Advice for persistent fly activity.'],
                ['Rats & Mice', 'rat.png', 'Control and prevention for rodents.'],
                ['Spiders', 'spider.png', 'Help manage spiders and web-building around your property.'],
            ] as [$name, $icon, $description])
                <article class="service-item">
                    @if ($icon)
                        <img class="service-icon" src="{{ asset('images/icons/'.$icon) }}" alt="">
                    @else
                        <div class="card-number">{{ substr($name, 0, 1) }}</div>
                    @endif
                    <div><h3>{{ $name }}</h3><p>{{ $description }}</p></div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container">
        <h2>Not sure what pest you have?</h2>
        <a class="button" href="tel:+6479854198">Call 07 985 4198</a>
    </div>
</section>
@endsection
