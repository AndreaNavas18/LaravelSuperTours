<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/pickDrop.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('/js/pickDrop.js') }}" defer></script>

    <title>Pick up - Drop off</title>
</head>
<body>
    @include('header2')
    <div id="divCentral" class="divMain">
        <div id="outboundCard" class="outboundCard">
            <div id="outboundTitle" class="outboundTitle"></div>
            <div id="outboundContent" class="outboundContent">
                <div id="outboundInfo" class="outboundInfo flex">
                    <div id="outboundDate" class="outboundDate"></div>
                    <div id="outboundData" class="outboundData">
                        <h2 id="dT">Trip: </h2>
                        <h2 id="dD">Departure: </h2>
                        <h2 id="dA">Arrival: </h2>
                        <h2 id="dP">Price: </h2>
                    </div>
                </div>
                <div id="outboundLocations" class="outboundLocations">
                    <h2>Departure Location</h2>
                    <select name="departureOutbound" id="departureOutbound"></select>
                    <h2>Arrival Location</h2>
                    <select name="arrivalOutbound" id="arrivalOutbound"></select>
                </div>
            </div>
        </div>
        <div id="returnTrip"></div>
    </div>
    <div>
        @include('footer')
    </div>
    
</body>
</html>