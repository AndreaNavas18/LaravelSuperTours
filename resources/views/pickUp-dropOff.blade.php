
    <div id="timer" class="timer"></div>
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
                                    <option value="{{ $ext->id }}" data-precio="{{$ext->precio_neto}}">{{ $ext->place }} - {{$ext->precio}}</option>
                                    @endforeach
                                </optgroup>
                            @endif
                        </select>
                        <input type="text" class="hidden hotelInput" name="hoteldepartureOutbound" id="hoteldepartureOutbound" placeholder="Indicate Hotel Name">
                        <h2 class="titleLocation">Arrival Location</h2>
                        <select name="arrivalOutbound" id="arrivalOutbound" class="arrivalOutbound">
                            @foreach ($stopsArrival as $stop)
                                <option value="{{ $stop->id }}">{{ $stop->place }} - {{$stop->address}}</option>
                            @endforeach
                            @if ($extensionsArrival->count() > 0)
                                <optgroup label="Extensions">
                                    @foreach ($extensionsArrival as $ext)
                                    <option value="{{ $ext->id }}" data-precio="{{$ext->precio_neto}}">{{ $ext->place }} - {{$ext->precio}}</option>
                                    @endforeach
                                </optgroup>
                            @endif
                        </select>
                        <input type="text" class="hidden hotelInput" name="hotelarrivalOutbound" id="hotelarrivalOutbound" placeholder="Indicate Hotel Name">
                    </div>
                </div>
            </div>
        </div>
        <div id="returnCard" class="outboundCard hidden">
            <div id="returnTitle" class="returnTitle"></div>
            <div class="background-imag">
                <div id="returnContent" class="outboundContent">
                    <div id="returnInfo" class="outboundInfo flex">
                        <div id="returndate" class="outboundDate flex"></div>
                        <img src="./images/autorojo.png" alt="bus" class="imgbus">
                        <div id="returnData" class="outboundData">
                            <h2 id="rT">Trip: </h2>
                            <h2 id="rD">Departure: </h2>
                            <h2 id="rA">Arrival: </h2>
                            <h2 id="rP">Price: </h2>
                        </div>
                    </div>
                    <div id="returnLocations" class="outboundLocations">
                        <h2 class="titleLocation">Departure Location</h2>
                        <select name="departureReturn" id="departureReturn" class="departureOutbound">
                            @foreach ($stopsArrival as $stop)
                                <option value="{{ $stop->id }}">{{ $stop->place }} - {{$stop->address}}</option>
                            @endforeach
                            @if ($extensionsArrival->count() > 0)
                                <optgroup label="Extensions">
                                    @foreach ($extensionsArrival as $ext)
                                        <option value="{{ $ext->id }}" data-precio="{{$ext->precio_neto}}">{{ $ext->place }} - {{$ext->precio}}</option>
                                    @endforeach
                                </optgroup>
                            @endif
                        </select>
                        <input type="text" class="hidden hotelInput" name="hoteldepartureReturn" id="hoteldepartureReturn" placeholder="Indicate Hotel Name">
                        <h2 class="titleLocation">Arrival Location</h2>
                        <select name="arrivalReturn" id="arrivalReturn" class="arrivalOutbound">
                            @foreach ($stopsDeparture as $stop)
                                <option value="{{ $stop->id }}">{{ $stop->place }} - {{$stop->address}}</option>
                            @endforeach
                            @if ($extensionsDeparture->count() > 0)
                                <optgroup label="Extensions">
                                    @foreach ($extensionsDeparture as $ext)
                                        <option value="{{ $ext->id }}" data-precio="{{$ext->precio_neto}}">{{ $ext->place }} - {{$ext->precio}}</option>
                                    @endforeach
                                </optgroup>
                            @endif
                        </select>
                        <input type="text" class="hidden hotelInput" name="hotelarrivalReturn" id="hotelarrivalReturn" placeholder="Indicate Hotel Name">
                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="flex navButtons">
        <button id="btnReserve" class="buttonReserve">CONTINUE</button>
        <button id="btnClose" class="buttonClose">CANCEL</button>
    </nav>
