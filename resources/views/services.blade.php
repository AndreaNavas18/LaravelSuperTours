<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Tours</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/services.css">
  
</head>
<body>
    @include('header2')
    <div>
        <ul class="listaH">
            <li class="sli">
                <a href="/home">Home</a>
            </li>
            <li class="sli">
                <img src="./images/flechanav2.png" style="width: 20px">
            </li>
            <li class="sli">
                <a href="/services">Services</a>
            </li>
        </ul>
    </div>
    <div>
        <div class="sliderCards">

            <div class="card1">

              <div class="divSlider1 sliderMovil1">
                <h1 class="titleSlider titleSliderMovil titleSliderMovil2">WIFI Access</h1>
                <p class="descriptionSlider descriptionSliderMovil descriptionSliderMovil2">
                  "Surf without limits on your journey: 
                  Connect to our onboard WIFI and stay online throughout your trip. 
                  Your entertainment knows no boundaries!"
                </p>
              </div>
              <div class="divSlider2 sliderMovil2 sliderMovil22">
                <img src="./images/slider1.png" alt="Imagen 1" class="sliderS sliderSMovil">
              </div>

            </div>

            <div class="card1">

              <div class="divSlider1 sliderMovil1">
                <h1 class="titleSlider titleSliderMovil titleSliderMovil2">WIFI Access</h1>
                <p class="descriptionSlider descriptionSliderMovil descriptionSliderMovil2">
                  "Surf without limits on your journey: 
                  Connect to our onboard WIFI and stay online throughout your trip. 
                  Your entertainment knows no boundaries!"
                </p>
              </div>
              <div class="divSlider2 sliderMovil2 sliderMovil22">
                <img src="./images/slider1.png" alt="Imagen 1" class="sliderS sliderSMovil">
              </div>

            </div>

         </div>
    </div>
    <h1>holaaaaaaaaaaa</h1>
    <div>
        @include('footer')
    </div>
</body>
</html>