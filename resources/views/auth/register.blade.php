<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/register.css">

    <title>Register</title>
</head>
<body>
    @include('header2')
    <div class="contenedor">
        <form action="{{ url('register')}}" method="POST">      
            @csrf
            <div class="cardLogin">
                <h1 class="titleLogin" >Create your Account</h1>
                <h3 class="registerSub">Already have an account? 
                    <a href="{{ url('login') }}" class="spanR">Login here.</a>
                </h3>
                <div class="divLabel">
                    <div class="divEmail">
                        <h3 class="label" >First Name</h3>
                        <input class="input" type="text" placeholder="Name" name="firstname">
                    </div>
                    <div class="divEmail">
                        <h3 class="label" >Last Name</h3>
                        <input class="input" type="text" placeholder="Last Name" name="lastname">
                    </div>
                </div>
                <div class="divLabel">
                    <div class="divEmail">
                        <h3 class="label" >Address</h3>
                        <input class="input" type="text" placeholder="ST 847" name="address">
                    </div>
                    <div class="divEmail">
                        <h3 class="label" >City</h3>
                        <input class="input" type="text" placeholder="Write your city here" name="city">
                    </div>
                </div>
                <div class="divLabel">
                    <div class="divEmail">
                        <h3 class="label" >State</h3>
                        <input class="input" type="text" placeholder="Write your state here" name="state">
                    </div>
                    <div class="divEmail">
                        <h3 class="label" >Country</h3>
                        <input class="input" type="text" placeholder="Write your country here" name="country">
                    </div>
                </div>
                <div class="divLabel">
                    <div class="divEmail">
                        <h3 class="label" >Zip Code</h3>
                        <input class="input" type="number" placeholder="####" name="zipcode">
                    </div>
                    <div class="divEmail">
                        <h3 class="label" >Cellphone</h3>
                        <input class="input" type="text" placeholder="10089099" name="celphone">
                    </div>
                </div>
                <div class="divLabel">
                    <div class="divEmail">
                        <h3 class="label" >Email</h3>
                        <input class="input" type="text" placeholder="Email@example.com" name="username">
                    </div>
                    <div class="divEmail">
                        <h3 class="label" >Password</h3>
                        <input class="input" type="password" placeholder="***********" name="password">
                    </div>
                </div>
                <div class="divEmail3">
                    <input type="checkbox" class="check">
                    <label for="terms" @required(true)>I accept the <span class="span">Terms and Conditions</span></label>
                    {{-- <input type="checkbox" class="input">I accept the Terms and Conditions</input> --}}
                </div>
                    <button type="submit" class="btn1" >Create an account</button>
            </div>
        </form>
    </div>
    <div>
        @include('footer')
    </div>
</body>
</html>