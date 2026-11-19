@php
    $pests = [
        [
            'key' => 'ants',
            'name' => 'Ants',
            'icon' => 'ant.png',
            'overview' => 'Ant species and nest location affect how an infestation behaves and which approach works best.',
            'treatment' => 'ALPECO can identify the species and recommend prevention, diatomaceous earth or a plant-based spray. Traditional plans may use targeted exterior barriers, bait and sand.',
            'timing' => 'Bait can take several days to reach the nest. More than one treatment may be needed, and recurring activity may need periodic prevention.',
        ],
        [
            'key' => 'bed-bugs',
            'name' => 'Bed Bugs',
            'icon' => 'bedbug.png',
            'overview' => 'Bed bugs hide in and around beds, upholstery and small crevices. Treating all affected areas is important.',
            'treatment' => 'Options include inspection and preparation, non-toxic heat or freeze treatments, and follow-up prevention where appropriate.',
            'timing' => 'The number of rooms and preparation affects visit length. Full control may require follow-up visits; a technician can confirm the schedule after assessment.',
        ],
        [
            'key' => 'birds',
            'name' => 'Birds',
            'icon' => 'bird.png',
            'overview' => 'Roosting or nesting birds can soil or damage buildings. The right response depends on the species and location.',
            'treatment' => 'Options include netting, gutter brushes, reflective deterrents, cage trapping or baiting where appropriate.',
            'timing' => 'Installation time depends on area, height and access. Small deterrents and larger netting jobs need different schedules, confirmed after a site assessment.',
        ],
        [
            'key' => 'borer',
            'name' => 'Borer',
            'icon' => 'borer.png',
            'overview' => 'Borer larvae tunnel through timber. Fresh flight holes or fine dust can indicate activity.',
            'treatment' => 'Depending on the extent, options may include heat treatment, timber treatment, brushing or injection, spot heat treatment for furniture, and replacing badly affected timber.',
            'timing' => 'Heat jobs need property preparation and the structure affects the duration. Spray and spot treatments vary; the visit schedule is confirmed after photos or inspection.',
        ],
        [
            'key' => 'cockroaches',
            'name' => 'Cockroaches',
            'icon' => 'cockroach.png',
            'overview' => 'Cockroaches hide in warm, damp or undisturbed spaces and can spread around kitchens and other areas.',
            'treatment' => 'Options can include inspection, sanitation advice, monitoring traps, dust, residual spray and bait stations. Fumigation may suit some internal infestations.',
            'timing' => 'Treatment and monitoring depend on species and access. Activity may need monitoring after the visit, with repeat treatment depending on results.',
        ],
        [
            'key' => 'fleas',
            'name' => 'Fleas',
            'icon' => 'flea.png',
            'overview' => 'Fleas develop through life stages in carpets and soft furnishings, so adults may not be the only stage to address.',
            'treatment' => 'Thorough vacuuming and preparation are important. Options include diatomaceous earth, residual spray and targeted insecticide dust.',
            'timing' => 'Flea activity can continue as immature stages emerge. Time to settle an infestation depends on preparation, household conditions and follow-up.',
        ],
        [
            'key' => 'flies',
            'name' => 'Flies',
            'icon' => 'fly.png',
            'overview' => 'Recurring flies can point to a breeding source or easy entry points, not only adult flies indoors.',
            'treatment' => 'Options include UV insect lights, fly bags or strips, screens, source-removal advice and targeted residual treatment.',
            'timing' => 'An agreed treatment may be completed in one visit. Longer-term reduction depends on controlling breeding sources and entry points.',
        ],
        [
            'key' => 'rats-mice',
            'name' => 'Rats & Mice',
            'icon' => 'rat.png',
            'overview' => 'Rodents use food, water, shelter and small entry gaps. Identifying access points is part of control.',
            'treatment' => 'Options include traps, live cage trapping, non-toxic lures, monitoring and secure bait stations.',
            'timing' => 'Control is monitored over days to weeks. The timeline depends on activity, food sources and whether entry points can be closed.',
        ],
        [
            'key' => 'spiders',
            'name' => 'Spiders',
            'icon' => 'spider.png',
            'overview' => 'Spiders shelter around cracks, rooflines, storage areas and other quiet spots. Species and hiding places help determine control.',
            'treatment' => 'Options may include targeted residual spray indoors or outdoors, crack-and-crevice dust, water blasting before treatment, or non-toxic diatomaceous earth.',
            'timing' => 'Visit length and follow-up depend on property size and access. Treatment timing and any prevention schedule are confirmed after assessment.',
        ],
    ];
@endphp

<div class="pest-selector" data-pest-selector>
    <div class="pest-grid">
        @foreach ($pests as $pest)
            <button
                class="pest-card"
                type="button"
                data-pest="{{ $pest['key'] }}"
                data-pest-name="{{ $pest['name'] }}"
                data-overview="{{ $pest['overview'] }}"
                data-treatment="{{ $pest['treatment'] }}"
                data-timing="{{ $pest['timing'] }}"
                aria-expanded="false"
                aria-controls="pest-details">
                <img src="{{ asset('images/icons/'.$pest['icon']) }}" alt="" loading="lazy">
                <span>{{ $pest['name'] }}</span>
            </button>
        @endforeach
    </div>

    <section class="pest-detail-panel" id="pest-details" aria-live="polite" aria-labelledby="pest-detail-name" hidden>
        <button class="pest-detail-close" type="button" aria-label="Close pest details" data-pest-close>×</button>
        <div class="eyebrow">Pest guide</div>
        <h3 id="pest-detail-name" data-pest-detail="name"></h3>
        <p data-pest-detail="overview"></p>
        <div class="pest-detail-columns">
            <div>
                <h4>Treatment options</h4>
                <p data-pest-detail="treatment"></p>
            </div>
            <div>
                <h4>How long it takes</h4>
                <p data-pest-detail="timing"></p>
            </div>
        </div>
        <a class="button button-red" href="{{ route('contact') }}">Ask about this pest</a>
        <p class="pest-timing-note">Treatment plans and timing are estimates until a technician assesses the property.</p>
    </section>
</div>
