@php
    use Illuminate\Support\Facades\Log;
    $reservas = $reservas ?? [];
    Log::error("message1: ".json_encode($reservas));
    $typeTrip = (count($reservas) > 1) ? 'Round Trip' : 'One Way Trip';
    $passengers = [];
    $totalPassengers = 0;
    $totalPassengers2 = 0;
    $adults = 0;
    $adults2 = 0;
    $children = 0;
    $children2 = 0;
    $totalOutboundPrice = 0;
    $totalReturnPrice = 0;
    $priceAdult = 0;
    $priceChild = 0;
    $priceAdult2 = 0;
    $priceChild2 = 0;
    $totalPrice = 0;
    $totalPrice2 = 0;
    $count = 0;
    foreach ($reservas as $key => $value) {
        if ($value['type'] == 'departure') {
            $adults = $value['adults'];
            $children = $value['children'];
            $origin = $value['pickDrop']['origin'];
            $destination = $value['pickDrop']['destination'];
            $priceAdult = $value['pickDrop']['priceAdult'];
            $priceChild = $value['pickDrop']['priceChild'];
            $totalPrice = ($value['pickDrop']['adults'] * $priceAdult) + ($value['pickDrop']['children'] * $priceChild);
            if (intval($value['pickDrop']['departureOutboundPrice']) > 0  || intval($value['pickDrop']['arrivalOutboundPrice']) > 0) {
                $totalOutboundPrice += $value['pickDrop']['departureOutboundPrice'] + $value['pickDrop']['arrivalOutboundPrice'];
                $totalPassengers = $value['pickDrop']['adults'] + $value['pickDrop']['children'];
            }
            $count++;
        } elseif ($value['type'] == 'return') {
            $adults2 = $value['adults'];
            $children2 = $value['children'];
            $priceAdult2 = $value['pickDrop']['priceAdult'];
            $priceChild2 = $value['pickDrop']['priceChild'];
            $totalPrice2 = ($value['pickDrop']['adults'] * $priceAdult2) + ($value['pickDrop']['children'] * $priceChild2);
            if (intval($value['pickDrop']['departureReturnPrice']) > 0 || intval($value['pickDrop']['arrivalReturnPrice']) > 0) {
                $totalReturnPrice += $value['pickDrop']['departureReturnPrice'] + $value['pickDrop']['arrivalReturnPrice'];
                $totalPassengers2 = $value['pickDrop']['adults'] + $value['pickDrop']['children'];
            }
        }
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
    $reservasSession = session()->get('reservas', []);
    $finalPrice = ($totalPrice + $totalPrice2) + (($totalOutboundPrice * $totalPassengers) + ($totalReturnPrice * $totalPassengers2)) + (($totalPrice + $totalPrice2) * 0.05);
    foreach ($reservasSession as $key => $value) {
        $reservas[$key]['finalPrice'] = $finalPrice;
        session()->put('reservas', $reservas);
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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
            <h2>{{($data['type'] == 'departure') ? 'Departure' : 'Return'}} Details</h2>
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
                        <th>Passengers</th>
                        <th>{{$typeTrip}} Transportation From {{$origin}} To {{$destination}}</th>
                        <th>Departure</th>
                        <th>{{(count($reservas) > 1) ? 'Return' : ''}}</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$adults}} - {{$adults2}} Adult(s) <br> {{$children}} - {{$children2}} Child(ren)</td>
                        <td>{{$typeTrip}} Regular Ticket Rate Service</td>
                        <td>${{ number_format($priceAdult, 2) }} <br> ${{ number_format($priceChild, 2) }}</td>
                        <td>${{ number_format($priceAdult2, 2) }} <br> ${{ number_format($priceChild2, 2) }}</td>
                        <td>${{ number_format($totalPrice + $totalPrice2, 2) }}</td>
                    </tr>
                    <tr>
                        <td>{{$totalPassengers}} - {{$totalPassengers2}} Passenger(s)</td>
                        <td>Pick Up Point/Drop Off - Extension</td>
                        <td>${{ number_format($totalOutboundPrice, 2) }}</td>
                        <td>${{ number_format($totalReturnPrice, 2) }}</td>
                        <td>${{ number_format(($totalOutboundPrice * $totalPassengers) + ($totalReturnPrice * $totalPassengers2), 2) }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Taxes and Fees</td>
                        <td></td>
                        <td></td>
                        <td>${{ number_format(($totalPrice + $totalPrice2) * 0.05, 2) }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="total-amount">
                TOTAL AMOUNT DUE: ${{ number_format(($totalPrice + $totalPrice2) + (($totalOutboundPrice * $totalPassengers) + ($totalReturnPrice * $totalPassengers2)) + (($totalPrice + $totalPrice2) * 0.05), 2) }}
            </div>
            <div class="check-continue">
                <input type="checkbox" name="check" id="check">
                <label for="check">Is a travel information correct?</label>
            </div>
        </div>
        <div class="continue-button">
            <button id="btnContinuePay" disabled>Continue to Pay</button>
        </div>
    </div>
    <div>
        @include('footer')
    </div>
    <script>
        document.getElementById('check').addEventListener('change', function() {
            if (this.checked) {
                document.querySelector('#btnContinuePay').removeAttribute('disabled');
                document.querySelector('#btnContinuePay').style.opacity = '1';
            } else {
                document.querySelector('#btnContinuePay').setAttribute('disabled', 'disabled');
                document.querySelector('#btnContinuePay').style.opacity = '0.5';
            }
        });
        document.getElementById('btnContinuePay').addEventListener('click', function() {
            console.log('Continue to Pay');
            axios.get('/confirmPayment')
                .then(function(response) {
                    console.log(response);
                    window.location.href = '/confirmPayment';
                })
                .catch(function(error) {
                    console.log(error);
                });
        });
    </script>
</body>
</html>