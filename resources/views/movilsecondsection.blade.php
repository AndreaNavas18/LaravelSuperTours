@php
    $slidermovil = [
        [[
            'title' => 'WIFI Access',
            'description' => 'Surf without limits on your journey: Connect to our onboard WIFI and stay online throughout your trip. Your entertainment knows no boundaries!',
            'image' => './images/slider1.png'
        ],
        [
            'title' => 'Gps System',
            'description' => 'Worry-free travel: Our advanced GPS system will guide you accurately from one destination to another. Your journey, in the best hands.',
            'image' => './images/slider2.png'
        ]],
        [[
            'title' => 'Movies On Board',
            'description' => 'Cinema on wheels: Immerse yourself in the magic of movies while you travel. Onboard movies to make your journey even more exciting.',
            'image' => './images/slider3.png'
        ],
        [
            'title' => 'Power Equipped',
            'description' => 'Recharge your day: Keep your devices powered throughout the journey. With onboard power outlets, the energy is in your hands.',
            'image' => './images/slider4.png'
        ]],
        [[
            'title' => 'Restroom Equipped',
            'description' => 'Comfort at every step: Don\'t worry about pit stops—our bus is equipped with an onboard restroom. Travel in total comfort.',
            'image' => './images/slider5.png'
        ],
        [
            'title' => 'Air Conditioner',
            'description' => 'Travel cool and relaxed: Our air conditioning system ensures a comfortable journey in any weather. Make every mile refreshing.',
            'image' => './images/slider6.png'
        ]]
    ];
@endphp

<div class="sliderw">
    @foreach($slidermovil as $slideSet)
        @foreach($slideSet as $slide)
            <div class="slidew">
                <img class="imgmovil" src="{{ $slide['image'] }}" alt="{{ $slide['title'] }}">
                <h2 class="h2movil">{{ $slide['title'] }}</h2>
                <p class="pmovil">{{ $slide['description'] }}</p>
            </div>
        @endforeach
    @endforeach
    {{-- <div class="slidew">
      <img src="imagen1.jpg" alt="Imagen 1">
      <h2>Título 1</h2>
      <p>Descripción 1</p>
    </div>
    <div class="slidew">
      <img src="imagen2.jpg" alt="Imagen 2">
      <h2>Título 2</h2>
      <p>Descripción 2</p>
    </div> --}}
  </div>
  