<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="{{ asset('js/menucalendar.js') }}"></script>
    <script src="{{ asset('js/calendar.js') }}"></script>


    <title>Super Tours</title>
</head>
<body class="font-principal bodysp">
    @include('header2')
    <div>
        <section class="wrapper text-center grid gap-12 md:grid-cols-5 md:text-center md:py-24 wrapper-pass">
            <div class="buttonround ml-auto flex-col md:flex md:ml-40 mkd:flex">
                <label>
                    <input type="checkbox" name="tripType" value="roundTrip">
                    <span>Round Trip</span>
                </label>
                <label>
                    <input type="checkbox" name="tripType" value="oneWay">
                    <span>One Way</span>
                </label>
            </div>            
            <div class="homeCard gap-6 flex-col mhd:flex">
                <div class="originDiv">
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
                <div class="destinationDiv ">
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
                <div class="originDate dropdownn">
                    <button onclick="showCalendar()" class="droppbtn">Date</button>
                    <div id="myDropdownn" class="dropdownn-content">
                        <div id="calendar-container">
                            <div id="calendar-prev" class="calendar"></div>
                            <div id="calendar-next" class="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="destinationDate">
                    <input type="date" class="w-full" />
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Passengers</button>
                    <div class="dropdown-content">
                        <div class="flex">
                                <label>Adults</label>
                                <button>-</button>
                                <input type="number" value="1" />
                                <button>+</button>
                        </div>
                        <div class="flex">
                            <label>Childs</label>
                            <button>-</button>
                            <input type="number" value="0" />
                            <button>+</button>
                        </div>
                    </div>

                </div>
            </div>
            
        </section>
    </div>
    @include('footer')
</body>
</html>