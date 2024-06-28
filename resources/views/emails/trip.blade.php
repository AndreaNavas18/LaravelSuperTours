<?php
use Illuminate\Support\Facades\Log;
    Log::error("message1: ".json_encode($trip));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Viaje</title>
</head>
<body>
    <h1>Detalles del Viaje</h1>
    @foreach ($trip as $id)
        <p>Tipo de Viaje: {{ $id['tripType'] }} ---- {{ $id['reservaTripPuesto']['id'] }}</p>
        <p>Trip No: {{$id['tripNo']}} ---- {{$id['fecha']}}</p>
        <p>Adultos: {{$id['adults']}} ---- {{$id['priceAdult']}}</p>
        <p>Niños: {{$id['children']}} ---- {{$id['priceChild']}}</p>
        <p>Reserva Trip Puestos: {{ json_encode($id['reservaTripPuesto']) }}</p>
        @isset($id['pickDrop'])
            <p>Pickup Dropoff: {{ json_encode($id['pickDrop']) }}</p>
        @endisset
        @isset($id['passengersAditionals'])
            <p>Passengers Aditionals: {{ json_encode($id['passengersAditionals']) }}</p>
        @endisset
    @endforeach
</body>
</html>