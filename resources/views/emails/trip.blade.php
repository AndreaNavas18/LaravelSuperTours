<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Viaje</title>
</head>
<body>
    <h1>Detalles del Viaje</h1>
    @foreach ($trip['reservas'] as $id)
        <p>Tipo de Viaje: {{ $id['tripType'] }} ---- {{ $id['reservaTripPuesto']['id'] }}</p>
        <p>Trip No: {{$id['tripNo']}} ---- {{$id['fecha']}}</p>
        <p>Adultos: {{$id['adults']}} ---- {{$id['priceAdult']}}</p>
        <p>Niños: {{$id['children']}} ---- {{$id['priceChild']}}</p>
        <p>Reserva Trip Puestos: {{ json_encode($id['reservaTripPuesto']) }}</p>
        @isset($id['pickDrop'])
            <p>Pickup Dropoff: {{ json_encode($id['pickDrop']) }}</p>
        @endisset
    @endforeach
</body>
</html>