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
    <div class="contentAll">

        <div class="menuHD">    
            <ul class="listaH">
                <li class="sli">
                    <a href="/home">Home</a>
                </li>
                <li class="sli">
                    <img src="./images/flechanav2.png" style="width: 20px">
                </li>
                <li class="sli">
                    <a href="/aboutus">About Us</a>
                </li>
                
            </ul>
        </div>

        <section class="containerUs">
            <div class="divUs">
                <h1 class="titleUs">About us</h1>
            </div>
            <div class="card1Us">
                <div class="card1Us1">
                    <div class="title1">
                        <h2>Our Mission</h2>
                    </div>
                    <div class="descrip1">
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
                <div class="card1Us2">
                    {{-- //imagen --}}
                    <img src="./images/bus1.png" class="imgUs">
                </div>
            </div>
            <div class="card2Us">
                <div class="card2Us1">
                    <h1 class="reviTUs">Reviews</h1>
                </div>
                <div class="card2Us2">
                    <video autoplay muted loop>
                        <source src="./videos/reviews.mp4" type="video/mp4">
                        Tu navegador no soporta el tag de video.
                    </video>

                </div>
            </div>
        </section>

        <section class="fleets">
            <div class="divFl">
                <h1 class="titleFl">Fleets</h1>
            </div>
            <div class="busF">
                <div class="bFImg">
                    <img src="./images/bus1.png" style="width: 300px">
                </div>
                <div class="DesF">
                    <h1 class="tiF1">BUS</h1>
                    <ul class="ulF">
                        <li>59 Seats</li>
                        <li>Lavatory</li>
                        <li>Gps System</li>
                        <li>Movie</li>
                        <li>WiFi</li>
                    </ul>
                </div>
            </div>
            <div class="vanF">
                <div class="DesF">
                    <h1 class="tiF1">VAN</h1>
                    <ul class="ulF">
                        <li>14 Seats</li>
                        <li>GpsSystem</li>
                        <li>Movie</li>
                        <li>WiFi</li>
                    </ul>
                </div>
                <div class="bFImg">
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