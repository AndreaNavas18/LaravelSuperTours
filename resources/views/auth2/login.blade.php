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
        <form method="POST" action="{{ route('login') }}">      
            @csrf
            <div class="cardLogin">
                <h1 class="titleLogin" >Sign in to your account</h1>
                <div class="divEmail">
                    <h3 class="label" >Email Address</h3>
                    <div>
                        <id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" >
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <div class="divEmail2">
                    <h3 class="label" >Password</h3>
                    <div>
                        <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        
                        @error('password')
                            <span class="invalid-feedback" >
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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