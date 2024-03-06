<main class="contenedorAll">
    <section class="wrapper text-center grid gap-12 md:grid-cols-5 md:text-center custom-py md:py-24 wrapper-pass mjd wrappermovil">
        <div class="homeCard flex-col mhd:flex mqd homeCardPc">
            <div class="centrarX1 divbtns">
                <div class="buttonround1 bg-white ml-auto flex-col md:flex md:ml-40 mkd:flex1 buttonroundPc1">
                    <button class="btnIcontype MbtnIcontype" id="btnTicket" aria-pressed="true" onclick="changeBody(this)">
                        <img src="./images/busticket(1).png" class="iconosType MiconosType">
                        <span class="titleNew MtitleNew">Bus Ticket</span>
                    </button>
                    <button class="btnIcontype MbtnIcontype" id="btnMulti" aria-pressed="false" onclick="changeBody(this)">
                        <img src="./images/multi(1).png" class="iconosType MiconosType">
                        <span class="titleNew MtitleNew">Multi Day Tours</span>
                    </button>
                    <button class="btnIcontype MbtnIcontype" id="btnOne" aria-pressed="false" onclick="changeBody(this)">
                        <img src="./images/one(1).png" class="iconosType MiconosType">
                        <span class="titleNew MtitleNew">One Day Tours</span>
                    </button>
                </div>
            </div>
            <div class="buttonround bg-white ml-auto flex-col md:flex md:ml-40 mkd:flex buttonroundPc">
                <label>
                    <input type="radio" id="tripType" name="tripType" value="roundTrip">
                    <span>Round Trip</span>
                </label>
                <label>
                    <input type="radio" id="tripType" name="tripType" value="oneWay" checked>
                    <span>One Way</span>
                </label>
            </div>  
            <div class="cardsX mcardsX"> 
                <div
                    class="originDiv divscards"
                >
                <div class="encap1">
                    <label for="origin" class="labels lb2">From</label>
                    <span class="o2"> 
                        <img src="./images/frbus.png" class="bticon ocult">   
                    </span>
                </div>
                        <select 
                        name="origin" 
                        id="origin" 
                        class="origin w-full selectscards">
                        @isset($areas)
                            @foreach($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                            @endforeach
                        @endisset
                    </select>
                    {{-- <span class="spancard"> 
                        <img src="./images/busticket.png" class="flechasmn mdocult"> 
                    </span> --}}
                </div>
                <div class="exchangeButtonDiv exchangePc">
                    <button type="button" onclick="exchangeLocations()" class="flech flechPc">
                        <img src="./images/flc.png" class="flechaspq ocult">   
                        <img src="./images/flechamovil.png" class="flechasmn mdocult">
                    </button>
                </div>
                <div
                    class="destinationDiv divscards"
                >
                <div class="encap1">
                    <label for="destination" class="labels lb2">To</label>
                    <span class="o2"> 
                        <img src="./images/frbus.png" class="bticon ocult">   
                    </span>
                </div>
                    <select name="destination" 
                        id="destination" 
                        class="destination w-full selectscards">
                        @isset($areasDestination)
                            @foreach($areasDestination as $area)
                                <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                            @endforeach
                        @endisset
                    </select>
                    {{-- <span class="spancard2"> 
                        <img src="./images/entrega.png" class="flechasmn mdocult">
                    </span> --}}
                </div>
                <div
                    class="originDate divscards mdivscards"
                >
                <div class="encap1 mencap1">
                    <label for="dateOrigin" class="labels mlabels">
                        <h3 class="mtitleD"> Departure </h3>
                    </label>
                    <span class="o2"> 
                        <img src="./images/calend.png" class="bticon ocult">   
                    </span>
                </div>
                    <input type="text" id="departureDate" class="w-full datepicker inputscards" placeholder="DD/MM/AAAA">
                    {{-- <span class="spancard3"> 
                        <img src="./images/calendario.png" class="calendar1 mdocult">
                    </span> --}}
                </div>
                <div
                    class="destinationDate divscards ocult"
                >
                <div class="encap1">
                    <label for="dateDestination" class="labels">Return</label>
                    <span class="o2"> 
                        <img src="./images/calend.png" class="bticon ocult">   
                    </span>
                </div>
                    <input type="text" id="returnDate" class="w-full datepicker inputscards" placeholder="DD/MM/AAAA">
                    {{-- <span class="spancard4"> 
                        <img src="./images/calendario.png" class="calendar2 mdocult">
                    </span> --}}
                
                </div>
                <div
                    class="passengersDiv divscards"
                >
                <div class="encap1">
                    <label for="passengers" class="labels">Passengers</label>
                    <span class="o2"> 
                        <img src="./images/usu(1).png" class="bticon ocult">   
                    </span>
                </div>
                    <div class="dropdown">
                        <button id="passengersButton" class="dropbtn" onclick="toggleDropdown('passengersDropdown')">
                            <span id="passengerCount">1 Adult</span>
                        </button>
                        <div class="dropdown-content" id="passengersDropdown">
                            <div class="flex centr adults">
                                <label class="items-start passLabel">
                                    <span class="passTitle">Adults</span>
                                </label>
                                <div class="centr">
                                    <button class="btnPss" onclick="adjustPassengers('adults', -1)">
                                        <img src="./images/menos.png" class="flechasmn flechaspss">     
                                    </button>
                                    <input type="text" id="adultsCount" inputmode="numeric" value="1" class="text-center" />
                                    <button class="btnPss" onclick="adjustPassengers('adults', 1)">
                                        <img src="./images/mas.png" class="flechasmn flechaspss">   
                                    </button>
                                </div>
                            </div>
                            <div class="flex centr children">
                                <label class="items-start passLabel">
                                    <span class="passTitle">Children</span>
                                </label>
                                <div class="centr">
                                    <button class="btnPss" onclick="adjustPassengers('children', -1)">
                                        <img src="./images/menos.png" class="flechasmn flechaspss">     
                                    </button>
                                    <input type="text" id="childrenCount" pattern="\d*" inputmode="numeric" value="0" class="text-center"/>
                                    <button class="btnPss" onclick="adjustPassengers('children', 1)">
                                        <img src="./images/mas.png" class="flechasmn flechaspss">   
                                    </button>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
            <div class="searchbtn">
                <button
                    onclick="searchRoutes()"
                    class="btn"
                >
                    Search
                </button>
            </div>

        </div>
        
    </section>
<div id="tickets">
    @include('layouts.bustickets')
</div>
<div id="one">
    @include('layouts.oneDay')
</div>
<div id="multi">
    @include('layouts.multiDay')
</div>

</main>