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
      <div class="containerD McontainerD">
        {{-- Miga de pag - breadcrumbs --}}
        <div class="menuHD MmenuHD">
            <ul class="listaH MlistaH">
                <li class="sli Msli">
                    <a href="/home">Home</a>
                </li>
                <li class="sli4 Msli">
                    <img src="./images/proximo.png" style="width: 17px">
                </li>
                <li class="sli Msli">
                    <a href="/destinations">Destinations</a>
                </li>
                <li class="sli4 Msli4">
                  <img src="./images/proximo.png" style="width: 17px">
                </li>
                <li class="sli5 Msli5">
                    <a href="/destinations">Cities</a>
                </li>
                <li class="sli4 Msli2" style="display: none">
                  <img src="./images/proximo.png" style="width: 17px">
                </li>
                <li class="sli3 Msli3" style="display: none">
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
            $imVol = asset('images/parks/volcano.jpg');
            $imBah = asset('images/parks/bahamas.jpg');
            $imDol = asset('images/parks/dolphin.jpg');
            $imLego = asset('images/parks/legoland.jpg');
            $imPrem = asset('images/parks/premium.jpg');
            $imCir = asset('images/parks/cirque.jpg');
            $imMedie = asset('images/parks/medieval.jpeg');
            $imHoly = asset('images/parks/holyland.jpg');
            $imKenn = asset('images/parks/kennedy.jpg');
            $imBlizz = asset('images/parks/blizzardbeach.jpg');
            $imTyp = asset('images/parks/typhon.jpg');
            $imAqu = asset('images/parks/aquatica.jpg');
            $imBusch = asset('images/parks/busch.jpg');
            $imSeaw = asset('images/parks/seaw.jpg');
            $imIsl = asset('images/parks/islandadventure.jpg');
            $imUni = asset('images/parks/universalstudios.jpg');
        @endphp
        <section class="sectionDes MsectionDes">
          <div class="titleDes MtitleDes">
            <h1 class="h1Des Mh1Des">Destinations</h1>
          </div>
          <div class="btnDes MbtnDes">
            <button class="btnDes1 MbtnDes1" onclick="showContent('cities')">Cities</button>
            <button class="btnDes1 MbtnDes1" onclick="showContent('parks')">Parks</button>
          </div>
        <div class="container1">         
          <div class="containerCities McontainerCities"> 
              {{-- //Primera --}}
              <div class="contentCards McontentCards">
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imOrl }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Orlando</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imKis }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Kissimmee</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imPie }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Fort Pierce</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imWes }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">West Palm Beach</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
              </div>
              {{-- //Segunda --}}
              <div class="contentCards McontentCards">
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imOInt }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Orlando Int Airport</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imPom }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Pompano</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imNor }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">North Miami Beach</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imMiami }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Miami Beach</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
              </div>
              {{-- //Tercera --}}
              <div class="contentCards McontentCards">
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imSou }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Miami South Beach</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imDown }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Miami Downtown</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imAirMT }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Miami Airport (Main Terminal)</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imAiZ }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Miami Airport (Zone)</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
              </div>
              {{-- ///Cuarta --}}
              <div class="contentCards McontentCards">
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imStP }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Saint Petersburg</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imTam }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Tampa</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imSar }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Sarasota</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imForM }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Fort Myers</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
              </div>
              {{-- //Quinta  --}}
              <div class="contentCards McontentCards">
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imForL }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Fort Lauderdale</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imBoc }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Boca Ratón</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imHol }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Hollywood</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
              </div>
          </div>
        </div>

        <div class="container2" style="display: none">
          <div class="containerParks McontainerParks">
              {{-- //PARQUES --}}
              <div class="contentCards McontentCards">
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imMK }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Magic Kingdom</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imEPC }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Epcot</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imHS }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Hollywood Studios</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imAK }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Animal kingdom Pierce</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
              </div>
              {{-- segunda  --}}
              <div class="contentCards McontentCards">
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imVol }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Volcano Bay</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imBah }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Bahamas Day Cruise</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imDol }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Dolphin Mall</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imLego }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Legoland</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
              </div>
              {{-- tercera  --}}
              <div class="contentCards McontentCards">
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imUni }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Universal Studios</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imPrem }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Premium Outlet</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imCir }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Cirque Du Soleil</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imMedie }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Medieval Times</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
              </div>
              {{-- cuarta  --}}
              <div class="contentCards McontentCards">
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imHoly }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Holy Land</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imKenn }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Kennedy Space Cter.</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imBlizz }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Blizzard Beach</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imTyp }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Typhoon Lagoon</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
              </div>
              {{-- quinta  --}}
              <div class="contentCards McontentCards">
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imAqu }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Aquatica</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imBusch }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Busch Garden</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imSeaw }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Sea World</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
                <div class="cardG McardG" 
                    style="background-image: linear-gradient(#055dff00, #055dff00), 
                    url('{{ $imIsl }}'); position: relative;"
                >
                    <h2 class="titleCard MtitleCard">Island of Adventure</h2>
                    <hr class="hrTitle MhrTitle">
                </div>
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
              document.querySelector('.container1').style.display = 'block';
              document.querySelector('.container2').style.display = 'none';
              document.querySelector('.sli2').style.display = 'none';	
              document.querySelector('.sli3').style.display = 'none';
              document.querySelector('.sli4').style.display = 'block';	
              document.querySelector('.sli5').style.display = 'block';
          } else if (contentType === 'parks') {
              document.querySelector('.container1').style.display = 'none';
              document.querySelector('.container2').style.display = 'block';
              document.querySelector('.sli2').style.display = 'block';	
              document.querySelector('.sli3').style.display = 'block';	
              document.querySelector('.sli4').style.display = 'none';	
              document.querySelector('.sli5').style.display = 'none';	
          }
      }
  </script>
</body>
</html>