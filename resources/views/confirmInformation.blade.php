@php
    use Illuminate\Support\Facades\Log;
    $reservas = $reservas ?? [];
    Log::error("message1: ".json_encode($reservas));
    $typeTrip = (count($reservas) > 1) ? 'Round Trip' : 'One Way';
    $passengers = [];
    foreach ($reservas as $key => $value) {
        $campo = explode(',', $value['passengersAditionals']);
        foreach ($campo as $texto) {
            if ($texto != ' ') {
                $string = explode(':', $texto);
                $ultimoCaracter = substr($string[0], -1);
                $directionPassenger = (strpos($string[0], 'Return') !== false) ? 'Return' : 'Departure';
                $typePassenger = (strpos($string[0], 'Child') !== false) ? 'Child' : 'Adult';
                //Log::info("message: " . $string[0] . " - " . $ultimoCaracter . " - " . $directionPassenger . " - " . $typePassenger . " - " . $string[1]);
                if (is_numeric($ultimoCaracter) && strpos($string[0], 'celphone') === false) {
                    $completePassenger = $directionPassenger.' '.$typePassenger.' '.$ultimoCaracter;
                    if (!isset($passengers[$completePassenger])) {
                        $passengers[$completePassenger] = '';
                    }
                    $passengers[$completePassenger] .= (strpos($string[0], 'email') === false) ? $string[1] : ' - '.$string[1];
                } elseif (strpos($string[0], 'celphone') === false) {
                    $key = $typePassenger . ' 1';
                    if (!isset($passengers[$key])) {
                        $passengers[$key] = '';
                    }
                    $passengers[$key] .=  (strpos($string[0], 'email') === false) ? $string[1] : ' - '.$string[1];
                }
            }
        }
    }

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/estilos.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/confirmation.css')}}">

    <title>Confirm Information</title>
</head>
<body>
    @include('header2')
    <div class="container">
        <div class="header-confirmation">
            <div>CONFIRMATION: {{$typeTrip}} </div>
            <div>DATE: {{date('M-d-Y')}}</div>
        </div>
        <div class="returnDiv">
            Return to edit your travel  Return to edit guest 
        </div>
        <div class="section">
            <h2>Traveler's Information</h2>
            <div class="info">
                @foreach ($passengers as $clave => $valor)
                    <p><strong>{{$clave}}:</strong> {{$valor}}</p>
                @endforeach
            </div>
        </div>
        @foreach ($reservas as $reserva => $data)
        <div class="section">
            <h2>{{($loop->index == 0) ? 'Departure' : 'Return'}} Details</h2>
            <div class="info">
                <p>
                    <strong>Departure Date:</strong> {{date('l, M-d-Y', strtotime($data['fecha']))}} 
                    <strong>TRIP:</strong> {{$data['tripNo']}} 
                    <strong>Departure Time:</strong> {{date('h:i A', strtotime($data['pickDrop']['departure']))}}
                </p>
                <p><strong>From:</strong> {{$data['pickDrop']['origin']}}</p>
                <p><strong>To:</strong> {{$data['pickDrop']['destination']}}</p>
                <p><strong>Pick Up Point / Extensions:</strong> {{$data['pickDrop']['departureOutbound'] ?? $data['pickDrop']['departureReturn']}}</p>
                <p><strong>Drop Off / Extensions:</strong> {{$data['pickDrop']['arrivalOutbound'] ?? $data['pickDrop']['arrivalReturn']}}</p>
            </div>
        </div>
        @endforeach
        <div class="cost-summary section">
            <h2>Cost Summary</h2>
            <table>
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Departure</th>
                        <th>Return</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Round Trip Regular Ticket Rate Service</td>
                        <td>$0.00</td>
                        <td>$0.00</td>
                        <td>$0.00</td>
                    </tr>
                    <tr>
                        <td>Pick Up Point/Drop Off - Extension</td>
                        <td>$0.00</td>
                        <td>$0.00</td>
                        <td>$0.00</td>
                    </tr>
                    <tr>
                        <td>Taxes and Fees</td>
                        <td></td>
                        <td></td>
                        <td>$0.00</td>
                    </tr>
                </tbody>
            </table>
            <div class="total-amount">
                TOTAL AMOUNT DUE: $94.50
            </div>
        </div>
        <div class="continue-button">
            <button>Continue to Pay</button>
        </div>
    </div>
    <div>
        @include('footer')
    </div>
</body>
</html>