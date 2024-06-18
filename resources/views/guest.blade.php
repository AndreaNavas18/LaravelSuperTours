<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="./css/estilos.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>INVITADO</title>
</head>
<body>
    @include('header2')
    <div>
        <div>
            <h2>Passenger's Information</h2>
            <div>
               <div>
                <div>
                    <label for="">First Name</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">Last Name</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">Phone</label>
                    <input type="number" required>
                </div>
               </div>
            </div>

        </div>
    </div>
    <div>
        @include('footer')
    </div>

    
</body>
</html>