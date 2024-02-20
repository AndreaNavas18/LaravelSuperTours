<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/aboutus.css">
    <script src="{{ asset('/js/reviews.js') }}" defer></script>

    <title>About Us</title>
</head>
<body style="background-color: #f1f1f1">
    @include('header2')
    <div class="contentAll McontentAll">

        <div class="menuHD MmenuHD">    
            <ul class="listaH MlistaH">
                <li class="sli Msli">
                    <a href="/home">Home</a>
                </li>
                <li class="sli Msli">
                    <img src="./images/flechanav2.png" style="width: 20px">
                </li>
                <li class="sli Msli">
                    <a href="/aboutus">About Us</a>
                </li>
                
            </ul>
        </div>

        <section class="containerUs McontainerUs">
            <div class="divUs MdivUs">
                <h1 class="titleUs MtitleUs">About us</h1>
            </div>
            <div class="card1Us Mcard1Us">
                <div class="card1Us1 Mcard1Us1">
                    <div class="title1 Mtitle1">
                        <h2>Our Mission</h2>
                    </div>
                    <div class="descrip1 Mdescrip1">
                        <p>Is to make a positive difference in traveling, primarily by 
                            offering to our passenger’s at a low cost, Safe Reliable service, while 
                            maintaining the best Customer Satisfaction. Since 1989 Super Tours, has 
                            transported over 2 Million Passengers between Orlando-Miami-Orlando. Super 
                            Tours also offers multi-day tours in Orlando that include Hotel, Transfers 
                            to Theme Park with Admissions, and Tour Guide meet and greet at the Orlando 
                            International Airport.
                        </p>
                    </div>
                </div>
                <div class="card1Us2 Mcard1Us2">
                    {{-- //imagen --}}
                    <img src="./images/bus1.png" class="imgUs MimgUs">
                </div>
            </div>
            <div class="card2Us Mcard2Us">
                <div class="card2Us1 Mcard2Us1">
                    <h1 class="reviTUs MreviTUs">Reviews</h1>
                </div>
                <div class="card2Us2 Mcard2Us2">
                    <video autoplay muted loop>
                        <source src="./videos/reviews.mp4" type="video/mp4">
                        Tu navegador no soporta el tag de video.
                    </video>

                </div>
            </div>
        </section>

        <section class="fleets Mfleets">
            <div class="divFl MdivFl">
                <h1 class="titleFl MtitleFl">Fleets</h1>
            </div>
            <div class="busF MbusF">
                <div class="bFImg MbFImg">
                    <img src="./images/bus1.png" style="width: 300px">
                </div>
                <div class="DesF MDesF">
                    <h1 class="tiF1 MtiF1">BUS</h1>
                    <ul class="ulF MulF">
                        <li>59 Seats</li>
                        <li>Lavatory</li>
                        <li>Gps System</li>
                        <li>Movie</li>
                        <li>WiFi</li>
                    </ul>
                </div>
            </div>
            <div class="vanF MvanF">
                <div class="DesF MDesF">
                    <h1 class="tiF1 MtiF1">VAN</h1>
                    <ul class="ulF MulF">
                        <li>14 Seats</li>
                        <li>GpsSystem</li>
                        <li>Movie</li>
                        <li>WiFi</li>
                    </ul>
                </div>
                <div class="bFImg MbFImg">
                    <img src="./images/van1.png" style="width: 300px">
                </div>
            </div>
        </section>

    </div>
    <div>
        @include('footer')
    </div>
</body>
</html>