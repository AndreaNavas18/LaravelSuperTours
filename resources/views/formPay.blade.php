@php
    use Illuminate\Support\Facades\Log;
    $reservas = session()->get('reservas', []);
    Log::error("message1: ".json_encode($reservas));
    $fristName = '';
    $lastName = '';
    $contactPhone = '';
    $email = '';
    $finalPrice = 0;
    foreach ($reservas as $key => $value) {
        $finalPrice = $value['finalPrice'];
        $pasegers = explode(',', $value['passengersAditionals']);
        foreach ($pasegers as $texto) {
            if ($texto != ' ') {
                $string = explode(':', $texto);
                if (strpos($string[0], 'firstname') !== false) {
                    $fristName = $string[1];
                }
                if (strpos($string[0], 'lastname') !== false) {
                    $lastName = $string[1];
                }
                if (strpos($string[0], 'celphone') !== false) {
                    $contactPhone = $string[1];
                }
                if (strpos($string[0], 'email') !== false) {
                    $email = $string[1];
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
    <title>Account Holder Form</title>
    <link rel="stylesheet" href="{{ asset('/css/estilos.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/pay.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>
<body>
    @include('header2')
    <div class="form-container">
        <h1>ACCOUNT HOLDER</h1>
        <p class="title">Enter your information as it appears on your Credit Card.</p>
        <form>
            <div class="form-group">
                <div class="grupo-campos">
                    <label for="first-name">First Name:*</label>
                    <input type="text" id="first-name" name="first-name" value="{{ $fristName }}" required>
                </div>
                <div class="grupo-campos">
                    <label for="last-name">Last Name:*</label>
                    <input type="text" id="last-name" name="last-name" value="{{$lastName}}" required>
                </div>
                <div class="grupo-campos">
                    <label for="contact-phone">Contact Phone:*</label>
                    <input type="text" id="contact-phone" name="contact-phone" value="{{$contactPhone}}" required>
                </div>
            </div>
            <div class="form-group">
                <div class="grupo-campos">
                    <label for="email">Email:*</label>
                    <input type="email" id="email" name="email" value="{{$email}}" required>
                </div>
                <div class="grupo-campos">
                    <label for="confirm-email">Confirm Email:*</label>
                    <input type="email" id="confirm-email" name="confirm-email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address:*</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <div class="grupo-campos">
                    <label for="country">Country:*</label>
                    <select id="country" name="country" required>
                        <option value="united-states">UNITED STATES</option>
                    </select>
                </div>
                <div class="grupo-campos">
                    <label for="state">State:*</label>
                    <select id="state" name="state" required>
                        <option value="">Choose...</option>
                        <!-- Add options for states here -->
                    </select>
                </div>
                <div class="grupo-campos">
                    <label for="city">City:*</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div class="grupo-campos">
                    <label for="zip-code">Zip Code:*</label>
                    <input type="text" id="zip-code" name="zip-code" required>
                </div>
            </div>
            <div class="info-banner">
                <img src="card.jpg" alt="Card Logos">
                <div class="info-text">
                    <h2>RESERVATION & INFORMATION</h2>
                    <p>SUPER CALL CENTER</p>
                    <p>(407) 370 3001 - (305) 677 2676</p>
                    <p>OPEN 7 DAYS</p>
                    <p>9:00 AM TO 9:00PM (EST)</p>
                    <p>Hablamos Español</p>
                </div>
            </div>
            <div class="form-group">
                <div class="grupo-campos">
                    <label for="cc-number">Credit Card Number:*</label>
                    <input type="text" id="cc-number" name="cc-number" required>
                </div>
                <div class="grupo-campos">
                    <label for="cvv">CVV Code (Security Code):*</label>
                    <input type="text" id="cvv" name="cvv" required>
                </div>
                
                <div class="grupo-campos">
                    <label for="expiration-date">Expiration Date:*</label>
                    <select id="exp-month" name="exp-month" required>
                        <option value="">MM</option>
                        <!-- Add options for months here -->
                    </select>
                    <select id="exp-year" name="exp-year" required>
                        <option value="">YYYY</option>
                        <!-- Add options for years here -->
                    </select>
                </div>
                
            </div>
            <div class="form-group">
                <h2>Total Payment: <span class="total-payment">{{ $finalPrice }} USD</span></h2>
                <label>
                    <input id="checkTC" type="checkbox" name="terms" required> I accept the <a href="#">terms of service</a> and <a href="#">privacy policy</a>
                </label>
            </div>
            <button type="submit" class="pay-button" disabled>Pay {{ $finalPrice }} USD</button>
        </form>
    </div>
    <div>
        @include('footer')
    </div>
    <script>
        document.getElementById('checkTC').addEventListener('change', function() {
            if (this.checked) {
                document.querySelector('.pay-button').removeAttribute('disabled');
                document.querySelector('.pay-button').style.opacity = '1';
            } else {
                document.querySelector('.pay-button').setAttribute('disabled', 'disabled');
                document.querySelector('.pay-button').style.opacity = '0.5';
            }
        });
        document.querySelector('.pay-button').addEventListener('click', function() {
            alert('Payment processed successfully!');
        });
    </script>
</body>
</html>
