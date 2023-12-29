<!DOCTYPE html>
<html lang="es">
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
    
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="{{ asset('js/home.js') }}"></script>
    
</head>
<body class="font-principal">

    <header>

        <nav class="wrapper h-20 flex items-center justify-between">

            <a href="./" class="w-1/3 max-w-[140px]">
                <img src="./images/logo.png" class="w-full">
            </a>

            <input type="checkbox" id="menu" class="peer hidden">

            <label for="menu" class="bg-open-menu w-6 h-5 bg-cover bg-center cursor-pointer peer-checked:bg-close-menu transition-all z-50 md:hidden"></label>

            <div class="fixed inset-0 bg-gradient-to-b from-white/70 to-black/70 translate-x-full peer-checked:translate-x-0 transition-transform z-40 md:static md:bg-none md:translate-x-0">

                <ul class="absolute inset-x-0 top-24 p-12 bg-white w-[90%] mx-auto rounded-md h-max text-center grid gap-6 font-bold shadow-2xl md:w-max md:bg-transparent md:p-0 md:grid-flow-col md:static custom-ul">

                    <li>
                        <a href="/home">Home</a>
                    </li>
        
                    <li>
                        <a href="#">Our Company</a>
                    </li>
        
                    <li>
                        <a href="#">Our Services</a>
                    </li>
        
                    <li>
                        <a href="#">Destinations</a>
                    </li>
        
                    <li>
                        <a href="#">FAQ</a>
                    </li>

                    <li>
                        <a href="#">Contact Us</a>
                    </li>

                </ul>

            </div>

            <a href="#" class="button shadow-sm shadow-bright-red/30 hidden py-3 lg:block">Login</a>
            <a href="#" class="button shadow-sm shadow-bright-red/30 hidden py-3 lg:block">Sign Up</a>
            
        </nav>

        <section class="wrapper container grid gap-8 justify-items-center items-center pb-12 md:grid-cols-1 md:py-24">

            <article class="text-center space-y-6 md:text-center md:space-y-8 custom-article">

                <h1 class="text-4xl font-bold text-blue-950 md:text-5xl">Plan Your Trip Whit <br> Travel Super Tours
                </h1>

                <p class="text-blue-950">Travel to your favorite city with respectful of the <br> enviroment!
                </p>

                <a href="#" class="button mx-auto shadow-xl shadow-bright-red/30 md:mx-auto">Explore Now</a>

            </article>

        </section>

    </header>

    <figure class="absolute inset-0 overflow-hidden pointer-events-none">
        {{-- <img src="./images/black.png" class="absolute w-full -z-10 top-0 right-0 max-w-full custom-black"> --}}
        <img src="./images/bg-tablet-pattern.jpg" class="absolute w-full -z-10 top-0 right-0 max-w-full custom-height">
    </figure>

    <main>

        <section class="wrapper text-center grid gap-12 md:grid-cols-5 md:text-center custom-py md:py-24 wrapper-pass mjd">
            <div class="buttonround ml-auto flex-col md:flex md:ml-40 mkd:flex">
                <label>
                    <input type="radio" id="tripType" name="tripType" value="roundTrip">
                    <span>Round Trip</span>
                </label>
                <label>
                    <input type="radio" id="tripType" name="tripType" value="oneWay">
                    <span>One Way</span>
                </label>
            </div>            
            <div class="homeCard gap-6 flex-col mhd:flex mqd">
                <div
                    class="originDiv"
                >
                    <label for="origin" class="labels">From</label>
                    <select name="origin" id="origin" onchange="uod()" class="w-full">
                        <option value="1">Orlando</option>
                        <option value="2">Orlando Int Airport</option>
                        <option value="3">Kissimmee</option>
                        <option value="4">Fort Pierce</option>
                        <option value="5">West Palm Beach</option>
                        <option value="6">Pompano</option>
                        <option value="7">Boca Raton</option>
                        <option value="8">Hollywood</option>
                        <option value="9">North Miami Beach</option>
                        <option value="10">South Miami Beach</option>
                        <option value="11">Miami Downtown</option>
                    </select>
                </div>
                <div class="exchangeButtonDiv">
                    <button type="button" onclick="exchangeLocations()">
                        <img src="./images/dos-flechas.png" class="flechasmn flechaspq">   
                    </button>
                </div>
                <div
                    class="destinationDiv "
                >
                <label for="destination">To</label>
                    <select name="destination" id="destination" class="w-full">
                        <option value="1" disabled>Orlando</option>
                        <option value="2">Orlando Int Airport</option>
                        <option value="3">Kissimmee</option>
                        <option value="4">Fort Pierce</option>
                        <option value="5">West Palm Beach</option>
                        <option value="6">Pompano</option>
                        <option value="7">Boca Raton</option>
                        <option value="8">Hollywood</option>
                        <option value="9">North Miami Beach</option>
                        <option value="10">South Miami Beach</option>
                        <option value="11">Miami Downtown</option>
                    </select>
                </div>
                <div
                    class="originDate"
                >
                    <label for="dateOrigin">Departure</label>
                    <input type="text" id="departureDate" class="w-full datepicker" placeholder="DD/MM/AAAA">
                </div>
                <div
                    class="destinationDate"
                >
                    <label for="dateDestination">Return</label>
                    <input type="text" id="returnDate" class="w-full datepicker" placeholder="DD/MM/AAAA">
                </div>
                <div
                    class="passengersDiv"
                >
                    <label for="passengers">Passengers</label>
                    <div class="dropdown">
                        <button id="passengersButton" class="dropbtn">
                            <span id="passengerCount">Adult, Child</span>
                        </button>
                        <div class="dropdown-content">
                            <div class="flex">
                                <label class="items-start">Adults</label>
                                <div class="centr">
                                    <button onclick="adjustPassengers('adults', -1)">
                                        <img src="./images/menos.png" class="flechasmn flechaspq">     
                                    </button>
                                    <input type="text" id="adultsCount" pattern="\d*" inputmode="numeric" value="1" class="text-center" />
                                    <button onclick="adjustPassengers('adults', 1)">
                                        <img src="./images/mas.png" class="flechasmn flechaspq">   
                                    </button>
                                </div>
                            </div>
                            <div class="flex centr">
                                <label>Children</label>
                                <div class="centr">
                                    <button onclick="adjustPassengers('children', -1)">
                                        <img src="./images/menos.png" class="flechasmn flechaspq">     
                                    </button>
                                    <input type="text" id="childrenCount" pattern="\d*" inputmode="numeric" value="0" class="text-center"/>
                                    <button onclick="adjustPassengers('children', 1)">
                                        <img src="./images/mas.png" class="flechasmn flechaspq">     
                                    </button>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
                <button
                    class="btn"
                >
                    Search
                </button>
            </div>
            
        </section>
        
        

        <section class="wrapper text-center py-24p max-w-xl mx-auto md:py-24">

            <h2 class="text-3xl font-bold text-very-dark-blue md:text-4xl mb-8 md:mb-12">
                Bus Schedules
            </h2>
        
            <div class="flex-col md:flex-row mfd:flex gap-8 items-center">
                <section class="mb-12 md:mb-0">
                    <div class="mt-24 mb-14">
                        <article class="bg-vary-light-gray pt-16 pb-12 px-4 relative">
                            <img src="./images/avatar-alii.png" class="absolute w-24 aspect-square -top-12 inset-x-0 mx-auto">
                            <h3 class="text-xl mb-4 pt-2 font-bold text-very-dark-blue">Orlando to Miami</h3>
                            <p class="text-dark-grayish-blue">“We have been able to cancel so many other subscriptions since using Manage. There is no more cross-channel confusion and everyone is much more focused.”</p>
                        </article>
                    </div>
                    <a href="#" class="button mx-auto shadow-xl shadow-bright-red/30">Discover More</a>
                </section>
        
                <section class="mb-12 md:mb-0">
                    <div class="mt-24 mb-14">
                        <article class="bg-vary-light-gray pt-16 pb-12 px-4 relative">
                            <img src="./images/avatar-alii.png" class="absolute w-24 aspect-square -top-12 inset-x-0 mx-auto">
                            <h3 class="text-xl mb-4 pt-2 font-bold text-very-dark-blue">Miami to Orlando</h3>
                            <p class="text-dark-grayish-blue">“We have been able to cancel so many other subscriptions since using Manage. There is no more cross-channel confusion and everyone is much more focused.”</p>
                        </article>
                    </div>
                    <a href="#" class="button mx-auto shadow-xl shadow-bright-red/30">Discover More</a>
                </section>
        
            </div>
        
        </section>

        <section class="bg-primarycolor font-bold">

            <div class="wrapper py-24 text-center grid gap-6 md:grid-cols-[40%_40%] md:justify-between md:items-center md:text-left">

                <h2 class="text-4xl text-very-pale-red">What do we have?.
                </h2>

                <a href="#" class="button bg-vary-light-gray mx-auto md:mx-0 md:justify-self-end text-primarycolor">View</a>

            </div>

        </section>
    </main>

    {{-- QUEDE AQUI --}}
    
    <footer class="bg-very-dark-blue custom-footer-py">
        <section class="wrapper-footer grid gap-12 justify-items-center footer-area md:footer-area-md md:grid-cols-2 md:justify-items-stretch py-1 custom-footer-margin">
    
            <div class="flex flex-wrap gap-4 justify-start w-full md:w-[50%]">
                <a href="#" class="[grid-area:logo]">
                    <img src="./images/logo-white.png" class="">
                </a>
    
                <div class="flex flex-wrap gap-4 justify-start md:self-start">
                    <a href="#">
                        <img src="./images/icon-facebook.svg" class="w-8">
                    </a>
                    <a href="#">
                        <img src="./images/icon-youtube.svg" class="w-8">
                    </a>
                    <a href="#">
                        <img src="./images/icon-twitter.svg" class="w-8">
                    </a>
                    <a href="#">
                        <img src="./images/icon-instagram.svg"  class="w-8">
                    </a>
                </div>
            </div>
    
            <div class="flex flex-wrap gap-4 justify-end md:w-[50%] md:col-span-1 md:self-end">
                <nav class="grid 
                grid-cols-[max-content_max-content] gap-y-3 text-white">
                    <a href="#">Home</a>
                    <a href="#">Our Company</a>
                    <a href="#">Our Services</a>
                    <a href="#">Destinations</a>
                    <a href="#">FAQ</a>
                    <a href="#">Contact Us</a>
                </nav>
            </div>
    
            <p class="text-dark-grayish-blue text-center w-full md:w-auto md:col-span-2 md:self-center">© 2023 Super Tours Inc. Copyright © 1989 - 2023 Super Tours Inc. All Rights Reserved.</p>
        </section>
    </footer>
    

</body>
</html>