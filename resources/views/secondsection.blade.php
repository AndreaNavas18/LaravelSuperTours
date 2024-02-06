@php
    $slider = [
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

<div class="carousel-containerr">
  <div class="carousell">
    @foreach ($slider as $slide)
      <div class="divSlider sliderMovil">
        <div class="sliderCards">
          <div class="card1">
            <div class="divSlider1 sliderMovil1">
              <h1 class="titleSlider titleSliderMovil titleSliderMovil2">
                {{ $slide[0]['title'] }}
              </h1>
              <p class="descriptionSlider descriptionSliderMovil descriptionSliderMovil2">
                {{ $slide[0]['description'] }}
              </p>
            </div>
            <div class="divSlider2 sliderMovil2 sliderMovil22">
              <img src="{{ $slide[0]['image'] }}" alt="Imagen {{$slide[0]['title']}}" class="sliderS sliderSMovil">
            </div>
          </div>
          <div class="card1">
            <div class="divSlider1 sliderMovil1">
              <h1 class="titleSlider titleSliderMovil titleSliderMovil2">
                {{ $slide[1]['title'] }}
              </h1>
              <p class="descriptionSlider descriptionSliderMovil descriptionSliderMovil2">
                {{ $slide[1]['description'] }}
              </p>
            </div>
            <div class="divSlider2 sliderMovil2 sliderMovil22">
              <img src="{{ $slide[1]['image'] }}" alt="Imagen {{$slide[1]['title']}}" class="sliderS sliderSMovil">
            </div>
          </div>
        </div>
      </div>
    @endforeach
    
        {{-- //Aqui afuera pongo otro divSlider sliderMovil  --}}

        {{-- <div class="divSlider sliderMovil">
          <div class="divSlider1 sliderMovil1">
            <h1 class="titleSlider titleSliderMovil titleSliderMovil2">Gps System</h1>
            <p class="descriptionSlider descriptionSliderMovil descriptionSliderMovil2">
              "Worry-free travel: Our advanced GPS system will guide you 
              accurately from one destination to another. Your journey, 
              in the best hands."
            </p>
          </div>
          <div class="divSlider2 sliderMovil2 sliderMovil22">
            <img src="./images/slider2.png" alt="Imagen 2" class="sliderS sliderSMovil">
          </div>
        </div>

        <div class="divSlider sliderMovil">
          <div class="divSlider1 sliderMovil1">
            <h1 class="titleSlider titleSliderMovil titleSliderMovil2">Movies On Board</h1>
            <p class="descriptionSlider descriptionSliderMovil descriptionSliderMovil2">
              "Cinema on wheels: Immerse yourself in the magic of movies 
              while you travel. Onboard movies to make your journey even 
              more exciting."
            </p>
          </div>
          <div class="divSlider2 sliderMovil2 sliderMovil22">
            <img src="./images/slider3.png" alt="Imagen 3" class="sliderS sliderSMovil">
          </div>
        </div>

        <div class="divSlider sliderMovil">
          <div class="divSlider1 sliderMovil1">
            <h1 class="titleSlider titleSliderMovil titleSliderMovil2">Power Equipped</h1>
            <p class="descriptionSlider descriptionSliderMovil descriptionSliderMovil2">
              "Recharge your day: Keep your devices powered throughout the journey. 
              With onboard power outlets, the energy is in your hands."
            </p>
          </div>
          <div class="divSlider2 sliderMovil2 sliderMovil22">
            <img src="./images/slider4.png" alt="Imagen 4" class="sliderS sliderSMovil">
          </div>
        </div>

        <div class="divSlider sliderMovil">
          <div class="divSlider1 sliderMovil1">
            <h1 class="titleSlider titleSliderMovil titleSliderMovil2">Restroom Equipped</h1>
            <p class="descriptionSlider descriptionSliderMovil descriptionSliderMovil2">
              "Comfort at every step: Don't worry about pit stops—our bus is 
              equipped with an onboard restroom. Travel in total comfort."
            </p>
          </div>
          <div class="divSlider2 sliderMovil2 sliderMovil22">
            <img src="./images/slider5.png" alt="Imagen 5" class="sliderS sliderSMovil">
          </div>
        </div>

        <div class="divSlider sliderMovil">
          <div class="divSlider1 sliderMovil1">
            <h1 class="titleSlider titleSliderMovil titleSliderMovil2">Air Conditioner</h1>
            <p class="descriptionSlider descriptionSliderMovil descriptionSliderMovil2">
              "Travel cool and relaxed: Our air conditioning system ensures a comfortable journey 
              in any weather. Make every mile refreshing."
            </p>
          </div>
          <div class="divSlider2 sliderMovil2 sliderMovil22">
            <img src="./images/slider6.png" alt="Imagen 6" class="sliderS sliderSMovil">
          </div>
        </div>  --}}

  </div>
</div>