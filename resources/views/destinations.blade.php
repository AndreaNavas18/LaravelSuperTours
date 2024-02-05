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
    <link rel="stylesheet" href="./css/destinations.css">

    <!-- MAPA - Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="{{ asset('js/mapa.js') }}"></script>
  
</head>
<body>
    @include('header2')
      <div class="containerD">
        <div class="menuHD">
            <ul class="listaH">
                <li class="sli">
                    <a href="/home">Home</a>
                </li>
                <li class="sli">
                    <img src="./images/flechanav2.png" style="width: 20px">
                </li>
                <li class="sli">
                    <a href="/destinations">Destinations</a>
                </li>
                <li class="sli4">
                  <img src="./images/flechanav2.png" style="width: 20px">
                </li>
                <li class="sli5">
                    <a href="/destinations">Cities</a>
                </li>
                <li class="sli2" style="display: none">
                  <img src="./images/flechanav2.png" style="width: 20px">
                </li>
                <li class="sli3" style="display: none">
                    <a href="/destinations">Parks</a>
                </li>
            </ul>
        </div>
        {{-- //Cities --}}
        @php
            $imOrl = asset('images/destinations/orlando1.jpg');
            $imKis = asset('images/destinations/kissimme1.jpeg');
            $imPie = asset('images/destinations/fortpierce1.png');
            $imWes = asset('images/destinations/westpalm1.png');
            $imOInt = asset('images/destinations/orlandoint1.png');
            $imPom = asset('images/destinations/pompano1.jpg');
            $imNor = asset('images/destinations/northmiami1.jpg');
            $imMiami = asset('images/destinations/miamibeach1.jpg');
            $imSou = asset('images/destinations/southmiami1.jpeg');
            $imDown = asset('images/destinations/miamidown1.jpg');
            $imAirMT = asset('images/destinations/miamiairport1.png');
            $imAiZ = asset('images/destinations/miamiairportzone1.jpg');
            $imStP = asset('images/destinations/stpeters1.jpg');
            $imTam = asset('images/destinations/tampa1.jpeg');
            $imSar = asset('images/destinations/sarasota1.jpg');
            $imForM = asset('images/destinations/fortmyers1.jpg');
            $imForL = asset('images/destinations/fortlauderdale1.jpg');
            $imBoc = asset('images/destinations/bocaraton1.jpg');
            $imHol = asset('images/destinations/hollywood1.png');	
        @endphp
        {{-- //Parks --}}
        @php 
            $imMK = asset('images/parks/magickingdom1.jpg');
            $imHS = asset('images/parks/hollywoodstudios1.jpg');
            $imAK = asset('images/parks/animalkingdom1.jpg');
            $imEPC = asset('images/parks/epcot1.png');
        @endphp
        <section class="sectionDes">
          <div class="titleDes">
            <h1 class="h1Des">Destinations</h1>
          </div>
          <div class="btnDes">
            <button class="btnDes1" onclick="showContent('cities')">Cities</button>
            <button class="btnDes1" onclick="showContent('parks')">Parks</button>
          </div>
          <div class="containerCities"> 
              {{-- //Primera --}}
              <div class="contentCards">
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imOrl }}'); position: relative;"
                >
                    <h2 class="titleCard">Orlando</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imKis }}'); position: relative;"
                >
                    <h2 class="titleCard">Kissimmee</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imPie }}'); position: relative;"
                >
                    <h2 class="titleCard">Fort Pierce</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imWes }}'); position: relative;"
                >
                    <h2 class="titleCard">West Palm Beach</h2>
                    <hr class="hrTitle">
                </div>
              </div>
              {{-- //Segunda --}}
              <div class="contentCards">
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imOInt }}'); position: relative;"
                >
                    <h2 class="titleCard">Orlando Int Airport</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imPom }}'); position: relative;"
                >
                    <h2 class="titleCard">Pompano</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imNor }}'); position: relative;"
                >
                    <h2 class="titleCard">North Miami Beach</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imMiami }}'); position: relative;"
                >
                    <h2 class="titleCard">Miami Beach</h2>
                    <hr class="hrTitle">
                </div>
              </div>
              {{-- //Tercera --}}
              <div class="contentCards">
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imSou }}'); position: relative;"
                >
                    <h2 class="titleCard">Miami South Beach</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imDown }}'); position: relative;"
                >
                    <h2 class="titleCard">Miami Downtown</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imAirMT }}'); position: relative;"
                >
                    <h2 class="titleCard">Miami Airport (Main Terminal)</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imAiZ }}'); position: relative;"
                >
                    <h2 class="titleCard">Miami Airport (Zone)</h2>
                    <hr class="hrTitle">
                </div>
              </div>
              {{-- ///Cuarta --}}
              <div class="contentCards">
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imStP }}'); position: relative;"
                >
                    <h2 class="titleCard">Saint Petersburg</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imTam }}'); position: relative;"
                >
                    <h2 class="titleCard">Tampa</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imSar }}'); position: relative;"
                >
                    <h2 class="titleCard">Sarasota</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imForM }}'); position: relative;"
                >
                    <h2 class="titleCard">Fort Myers</h2>
                    <hr class="hrTitle">
                </div>
              </div>
              {{-- //Quinta  --}}
              <div class="contentCards">
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imForL }}'); position: relative;"
                >
                    <h2 class="titleCard">Fort Lauderdale</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imBoc }}'); position: relative;"
                >
                    <h2 class="titleCard">Boca Ratón</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imHol }}'); position: relative;"
                >
                    <h2 class="titleCard">Hollywood</h2>
                    <hr class="hrTitle">
                </div>
              </div>
          </div>
          <div class="containerParks" style="display: none">
              {{-- //PARQUES --}}
              <div class="contentCards">
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imMK }}'); position: relative;"
                >
                    <h2 class="titleCard">Magic Kingdom</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imEPC }}'); position: relative;"
                >
                    <h2 class="titleCard">Epcot</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imHS }}'); position: relative;"
                >
                    <h2 class="titleCard">Hollywood Studios</h2>
                    <hr class="hrTitle">
                </div>
                <div class="cardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imAK }}'); position: relative;"
                >
                    <h2 class="titleCard">Animal kingdom Pierce</h2>
                    <hr class="hrTitle">
                </div>
              </div>
          </div>
        </section>
    </div>
    <div>
        @include('footer')
    </div>
    </div>

    {{-- <script>
      document.addEventListener("DOMContentLoaded", function () {
          inicializarMapa();
      });
    </script> --}}
    <script>
      function showContent(contentType) {
          if (contentType === 'cities') {
              document.querySelector('.containerCities').style.display = 'block';
              document.querySelector('.containerParks').style.display = 'none';
              document.querySelector('.sli2').style.display = 'none';	
              document.querySelector('.sli3').style.display = 'none';
              document.querySelector('.sli4').style.display = 'block';	
              document.querySelector('.sli5').style.display = 'block';
          } else if (contentType === 'parks') {
              document.querySelector('.containerCities').style.display = 'none';
              document.querySelector('.containerParks').style.display = 'block';
              document.querySelector('.sli2').style.display = 'block';	
              document.querySelector('.sli3').style.display = 'block';	
              document.querySelector('.sli4').style.display = 'none';	
              document.querySelector('.sli5').style.display = 'none';	
          }
      }
  </script>
</body>
</html>