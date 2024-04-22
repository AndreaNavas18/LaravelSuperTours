<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/login.css">

    <title>Login</title>
</head>
<body>
    @include('header2')
    <div class="contenedor">
        <form action="{{ route('login')}}" method="POST">      
            @csrf
            <div class="cardLogin">
                <h1 class="titleLogin" >Sign in to your account</h1>
                <div class="divEmail">
                    <h3 class="label" >Your email</h3>
                    <input class="input" type="email" placeholder="email@example.com" name="email">
                </div>
                <div class="divEmail2">
                    <h3 class="label" >Password</h3>
                    <input class="input" type="password" placeholder="*********" name="password">
                </div>
                <div class="divButtons">
                    <button type="submit" class="btn1" >Sign in</button>
                    <button class="btn2">Guest</button>
                </div>
                <div class="lastCard">
                    <h3 class="label2">Don't you have an account yet? 
                        <a href="{{ url('register') }}" class="span">Sign up</a>
                    </h3>
                    <button class="label3">Forgot password?</button>
                </div>
            </div>
        </form>
    </div>
    <div>
        @include('footer')
    </div>
</body>
</html>