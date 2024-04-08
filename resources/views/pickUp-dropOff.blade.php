@php
    //$trip = request('tripNo');
@endphp

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
            <div class="background-imag">
                <div id="outboundContent" class="outboundContent">
                    <div id="outboundInfo" class="outboundInfo flex">
                        <div id="outboundDate" class="outboundDate flex"></div>
                        <img src="./images/autoazul.png" alt="bus" class="imgbus">
                        <div id="outboundData" class="outboundData">
                            <h2 id="dT">Trip: </h2>
                            <h2 id="dD">Departure: </h2>
                            <h2 id="dA">Arrival: </h2>
                            <h2 id="dP">Price: </h2>
                        </div>
                    </div>
                    <div id="outboundLocations" class="outboundLocations">
                        <h2 class="titleLocation">Departure Location</h2>
                        <select name="departureOutbound" id="departureOutbound" class="departureOutbound">
                            @foreach ($stopsDeparture as $stop)
                                <option value="{{ $stop->id }}">{{ $stop->place }} - {{$stop->address}}</option>
                            @endforeach
                            @if ($extensionsDeparture->count() > 0)
                                <optgroup label="Extensions">
                                    @foreach ($extensionsDeparture as $ext)
                                    <option value="{{ $ext->id }}">{{ $ext->place }} - {{$ext->precio}}</option>
                                    @endforeach
                                </optgroup>
                            @endif
                        </select>
                        <h2 class="titleLocation">Arrival Location</h2>
                        <select name="arrivalOutbound" id="arrivalOutbound" class="arrivalOutbound">
                            @foreach ($stopsArrival as $stop)
                                <option value="{{ $stop->id }}">{{ $stop->place }} - {{$stop->address}}</option>
                            @endforeach
                            @if ($extensionsArrival->count() > 0)
                                <optgroup label="Extensions">
                                    @foreach ($extensionsArrival as $ext)
                                    <option value="{{ $ext->id }}">{{ $ext->place }} - {{$ext->precio}}</option>
                                    @endforeach
                                </optgroup>
                            @endif
                        </select>
                    </div>
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