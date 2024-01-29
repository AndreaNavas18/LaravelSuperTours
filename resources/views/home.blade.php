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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="{{ asset('/js/home.js') }}"></script>
    <script src="{{ asset('/js/modal.js') }}" defer></script>


    
</head>
<body class="font-principal">

    <header>

        <nav class="wrapper flex items-center justify-between wrappermovil">

            <a href="./" class="w-1/3 max-w-[180px]">
                <img src="./images/logo.png" class="w-full ocult mdview">
            </a>

            <input type="checkbox" id="menu" class="peer hidden">

            <label for="menu" class="bg-open-menu w-6 h-5 bg-cover bg-center cursor-pointer peer-checked:bg-close-menu transition-all z-50 md:hidden menuhamburguer"></label>

            <div class="fixed inset-0 bg-gradient-to-b from-white/70 to-black/70 translate-x-full peer-checked:translate-x-0 transition-transform z-40 md:static md:bg-none md:translate-x-0">

                <ul class="absolute inset-x-0 top-24 p-12 bg-white w-[90%] mx-auto rounded-md h-max text-center grid gap-6 font-bold shadow-2xl md:w-max md:bg-transparent md:p-0 md:grid-flow-col md:static custom-ul">

                    <li>
                        <a href="/home">Home</a>
                    </li>
        
                    <li>
                        <a href="#">Services</a>
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

            <div class="divLogins">
                <a href="#" class="button shadow-sm shadowAzul hidden stylebtn lg:block">Login</a>
                <a href="#" class="button shadow-sm shadowAzul hidden stylebtn lg:block">Sign Up</a>
            </div>
        </nav>

        <section class="wrapper containerr grid gap-8 justify-items-center items-center pb-4 md:grid-cols-1 wrappermovil">

            <article class="text-center space-y-6 md:text-center md:space-y-8 custom-article">

                {{-- <h1 class="tmextos md:text-5xl mdocult">SUPER TOURS --}}
                <img src="./images/logo.png" class="mdocult logp">

                </h1>

                <h1 class="text-4xl font-bold tgextos md:text-5xl ocult mdview">Plan Your Trip Whit <br> Travel Super Tours
                </h1>

                {{-- <p class="text-blue-950 ocult mdview">Travel to your favorite city with respectful of the <br> enviroment!
                </p> --}}

            </article>

        </section>

    </header>

    <figure class="absolute inset-0 overflow-hidden pointer-events-none">
        {{-- <img src="./images/black.png" class="absolute w-full -z-10 top-0 right-0 max-w-full custom-black"> --}}


        {{-- <img src="./images/bg-tablet-pattern.jpg" class="absolute w-10 -z-10 top-0 right-0 max-w-full custom-height mdcustom-height ocult mdview"> --}}
        <video class="absolute w-10 -z-10 top-0 right-0 max-w-full custom-height mdcustom-height ocult mdview mdcustom-video" autoplay muted loop>
            <source src="./videos/fondov.mp4" type="video/mp4">
            Tu navegador no soporta el tag de video.
        </video>
        <img src="./images/orlandoimg.jpg" class="absolute w-10 -z-10 top-0 right-0 max-w-full custom-height mdcustom-height mdocult">

    </figure>

    <main>
            <section class="wrapper text-center grid gap-12 md:grid-cols-5 md:text-center custom-py md:py-24 wrapper-pass mjd wrappermovil">
                <div class="buttonround bg-white ml-auto flex-col md:flex md:ml-40 mkd:flex buttonroundPc">
                    <label>
                        <input type="radio" id="tripType" name="tripType" value="roundTrip" checked>
                        <span>Round Trip</span>
                    </label>
                    <label>
                        <input type="radio" id="tripType" name="tripType" value="oneWay">
                        <span>One Way</span>
                    </label>
                </div>            
                <div class="homeCard gap-6 flex-col mhd:flex mqd homeCardPc">
                    <div
                        class="originDiv divscards"
                    >
                        <label for="origin" class="labels">From</label>
                        <select name="origin" id="origin" class="w-full selectscards">
                            @isset($areas)
                                @foreach($areas as $area)
                                    <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                                @endforeach
                            @endisset
                        </select>
                        <span class="spancard"> 
                            <img src="./images/entrega.png" class="flechasmn mdocult">
                        </span>

                    </div>
                    <div class="exchangeButtonDiv exchangePc">
                        <button type="button" onclick="exchangeLocations()" class="flech flechPc">
                            <img src="./images/dos-flechas.png" class="flechaspq ocult">   
                            <img src="./images/flechamovil.png" class="flechasmn mdocult">
                        </button>
                    </div>
                    <div
                        class="destinationDiv divscards"
                    >
                    <label for="destination" class="labels">To</label>
                        <select name="destination" id="destination" class="w-full selectscards">
                            @isset($areasDestination)
                                @foreach($areasDestination as $area)
                                    <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                                @endforeach
                            @endisset
                        </select>
                        <span class="spancard2"> 
                            <img src="./images/entrega.png" class="flechasmn mdocult">
                        </span>
                    </div>
                    <div
                        class="originDate divscards"
                    >
                        <label for="dateOrigin" class="labels">Departure</label>
                        <input type="text" id="departureDate" class="w-full datepicker inputscards" placeholder="DD/MM/AAAA">
                        <span class="spancard3"> 
                            <img src="./images/calendario.png" class="calendar1 mdocult">
                        </span>
                    </div>
                    <div
                        class="destinationDate divscards"
                    >
                        <label for="dateDestination" class="labels">Return</label>
                        <input type="text" id="returnDate" class="w-full datepicker inputscards" placeholder="DD/MM/AAAA">
                        <span class="spancard4"> 
                            <img src="./images/calendario.png" class="calendar2 mdocult">
                        </span>
                    
                    </div>
                    <div
                        class="passengersDiv divscards"
                    >
                        <label for="passengers" class="labels">Passengers</label>
                        <div class="dropdown">
                            <button id="passengersButton" class="dropbtn" onclick="toggleDropdown('passengersDropdown')">
                                <span id="passengerCount">Adult, Child</span>
                            </button>
                            <div class="dropdown-content" id="passengersDropdown">
                                <div class="flex">
                                    <label class="items-start">Adults</label>
                                    <div class="centr">
                                        <button onclick="adjustPassengers('adults', -1)">
                                            <img src="./images/menos.png" class="flechasmn flechaspss">     
                                        </button>
                                        <input type="text" id="adultsCount" pattern="\d*" inputmode="numeric" value="1" class="text-center" />
                                        <button onclick="adjustPassengers('adults', 1)">
                                            <img src="./images/mas.png" class="flechasmn flechaspss">   
                                        </button>
                                    </div>
                                </div>
                                <div class="flex centr">
                                    <label>Children</label>
                                    <div class="centr">
                                        <button onclick="adjustPassengers('children', -1)">
                                            <img src="./images/menos.png" class="flechasmn flechaspss">     
                                        </button>
                                        <input type="text" id="childrenCount" pattern="\d*" inputmode="numeric" value="0" class="text-center"/>
                                        <button onclick="adjustPassengers('children', 1)">
                                            <img src="./images/mas.png" class="flechasmn flechaspss">     
                                        </button>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                    <button
                        onclick="searchRoutes()"
                        class="btn"
                    >
                        Search
                    </button>
                </div>
                
            </section>
        

        <section class="wrapper text-center max-w-xl mx-auto wrappermovil schedulesSty sch">
        
            <div class="flex-col md:flex-row mfd:flex gap-8 items-center schDiv2">
                <section class="mb-12 md:mb-0 schEach">
                    <div class="mt-24 mb-14">
                        <article class="bg-vary-light-gray pt-8 pb-8 px-4 relative fondoSchHome">
                            <img src="./images/calenblack.png" class="absolute aspect-square -top-12 inset-x-0 mx-auto calenblack imgSc">
                            <h3 class="textxll mb-4 text-very-dark-blue">Bus Schedules from Orlando to Miami</h3>
                            {{-- Boton para abrir el modal --}}
                            <button id="btn-abrir-modal" class="button mx-auto shadow-xl shadowAzul schedulesBtn buttonSc">SHOW</button> 
                            <dialog id="modal" class="dialog1">
                                <h3>Schedules Today</h3>
                                @include('schedules')
                                <button id="btn-cerrar-modal">CERRAR MODAL </button>
                            </dialog>
                            
                           </article>
                    </div>
                </section>
        
                <section class="mb-12 md:mb-0 schEach">
                    <div class="mt-24 mb-14">
                        <article class="bg-vary-light-gray pt-8 pb-8 px-4 relative fondoSchHome">
                            <img src="./images/calenblue.png" class="absolute aspect-square -top-12 inset-x-0 mx-auto calenblack imgSc">
                            <h3 class="textxll mb-4 text-very-dark-blue">Bus Schedules from Miami to Orlando</h3>
                            {{-- Boton para abrir el modal --}}
                            <button id="btn-abrir-modal" class="button mx-auto shadow-xl shadowAzul schedulesBtn buttonSc">SHOW</button> 
                            <dialog id="modal">
                                <h3>Hola</h3>
                                <button id="btn-cerrar-modal">CERRAR MODAL </button>
                            </dialog>
                        </article>
                    </div>
                 </section>
        
            </div>
        
        </section>

        <section class="font-bold containerBenefits">
            <div class="secondsectionDiv1 wrapper text-center wrappermovil">
                <h2 class="titleBenefits titleBenefitsMovil">What do we have?.</h2>
            </div>
            <hr class="hrBenefits hrBenefitsMovil">
            <div class="secondsectionC">
                <div class="secondsectionDiv2 wrapper gap-6 px-4">
                    @include('secondsection')
                </div>
            </div>
                
        </section>
    </main>

    <div>
        @include('footer')
    </div>
    

</body>
</html>