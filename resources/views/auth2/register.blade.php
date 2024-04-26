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
        <form method="POST" action="{{ route('register') }}">      
            @csrf
            <div class="cardLogin">
                <h1 class="titleLogin" >Create your Account</h1>
                <h3 class="registerSub">Already have an account? 
                    <a href="{{ url('login') }}" class="spanR">Login here.</a>
                </h3>
                <div class="divLabel">
                    <div class="divEmail">
                        <h3 class="label" >First Name</h3>
                        <div>
                            <input id="firstname" type="text" class="input @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                            @error('firstname')
                                <span class="invalid-feedback" >
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="divEmail">
                        <h3 class="label" >Last Name</h3>
                        <div>
                            <input id="lastname" type="text" class="input @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" autocomplete="lastname" autofocus>
                            @error('lastname')
                            <span class="invalid-feedback" >
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="divLabel">
                    <div class="divEmail">
                        <h3 class="label" >Address</h3>
                        <div>
                            <input id="address" type="text" class="input @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address" autofocus>
                            @error('address')
                            <span class="invalid-feedback" >
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="divEmail">
                        <h3 class="label" >City</h3>
                        <div>
                            <input id="city" type="text" class="input @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" autocomplete="city" autofocus>
                            @error('city')
                            <span class="invalid-feedback" >
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="divLabel">
                    <div class="divEmail">
                        <h3 class="label" >State</h3>
                        <div>
                            <input id="state" type="text" class="input @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" autocomplete="state" autofocus>
                            @error('state')
                            <span class="invalid-feedback" >
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="divEmail">
                        <h3 class="label" >Country</h3>
                        <div>
                            <input id="country" type="text" class="input @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" autocomplete="country" autofocus>
                            @error('country')
                            <span class="invalid-feedback" >
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="divLabel">
                    <div class="divEmail">
                        <h3 class="label" >Zip Code</h3>
                        <div>
                            <input id="zipcode" type="number" class="input @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" autocomplete="zipcode" autofocus>
                            @error('zipcode')
                            <span class="invalid-feedback" >
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="divEmail">
                        <h3 class="label" >Cellphone</h3>
                        <div>
                            <input id="celphone" type="number" class="input @error('celphone') is-invalid @enderror" name="celphone" value="{{ old('celphone') }}" autocomplete="celphone" autofocus>
                            @error('celphone')
                            <span class="invalid-feedback" >
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="divLabel">
                    <div class="divEmail">
                        <h3 class="label" >Email</h3>
                        <div>
                            <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" >
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="divEmail">
                        <h3 class="label" >Password</h3>
                        <div>
                            <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" >
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="divEmail">
                        <h3 class="label" >Password</h3>
                        <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
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