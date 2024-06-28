<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('/js/guest.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/estilos.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/guest.css')}}">

    <title>Guest</title>
</head>
<body>
    @include('header2')
    <div class="contenedor">
        <form method="POST" action="{{ route('login.guest.store')}}" id="formReserve">      
            @csrf
            <div class="cardLogin">
                <h1 class="titleLogin" >Passenger's Information</h1>
                <div class="cardGuest" id="originalCardGuest">
                    <div class="divEmail">
                        <h3 class="label" >First Name</h3>
                        <input id="firstname" type="text" class="input" name="firstname" style="margin-top: 4px"  required>
                    </div>
                    <div class="divEmail">
                        <h3 class="label" >Last Name</h3>
                        <input id="lastname" type="text" class="input" name="lastname" style="margin-top: 4px" required>
                    </div>
                    <div class="divEmail">
                        <h3 class="label" style="display:flex;flex-direction:row" >Cellphone 
                            <span style="color: red;font-weight: bold;font-size:18px">*</span>
                        </h3>
                        <input id="celphone" type="number" class="input" name="celphone" required>
                    </div>
                    <div class="divEmail">
                        <h3 class="label" >Email Address</h3>
                        <input id="email" type="email" class="input" name="email" style="margin-top: 4px">
                    </div>
                </div>
                <template id="passengerTemplate">
                    <div id="aditionalCardGuest">
                        <h2 id="passengerNumber"></h2>
                        <div class="cardGuest">
                            <div class="divEmail">
                                <h3 class="label" >First Name</h3>
                                <input id="firstname" type="text" class="input" name="firstname" style="margin-top: 4px" >
                            </div>
                            <div class="divEmail">
                                <h3 class="label" >Last Name</h3>
                                <input id="lastname" type="text" class="input" name="lastname" style="margin-top: 4px" >
                            </div>
                            <div class="divEmail">
                                <h3 class="label" style="display:flex;flex-direction:row" >Cellphone
                                </h3>
                                <input id="celphone" type="number" class="input" name="celphone" >
                            </div>
                            <div class="divEmail">
                                <h3 class="label" >Email Address</h3>
                                <input id="email" type="email" class="input" name="email" style="margin-top: 4px">
                            </div>
                        </div>
                    </div>
                </template>
                <div class="divButtons" id="divButtons">
                    <button type="submit" class="btn1" id="btnSubmit">Continue</button>
                </div>
            </div>
        </form>
    </div>
    <div>
        @include('footer')
    </div>
</body>
</html>