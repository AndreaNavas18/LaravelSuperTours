<header style="background-color: #1d1e25">

    <nav class="wrapper flex items-center justify-between wrappermovil">

        <a href="/home" class="w-1/3 max-w-[180px]">
            <img src="./images/logo.png" class="w-full ocult mdview">
        </a>

        <input type="checkbox" id="menu" class="peer hidden">
        <label for="menu" class="bg-open-menu w-6 h-5 bg-cover bg-center cursor-pointer peer-checked:bg-close-menu transition-all z-50 md:hidden menuhamburguer"></label>

        <div class="fixed inset-0 bg-gradient-to-b from-white/70 to-black/70 translate-x-full peer-checked:translate-x-0 transition-transform z-40 md:static md:bg-none md:translate-x-0">

            <ul class="absolute inset-x-0 top-24 p-12 bg-white w-[90%] mx-auto rounded-md h-max text-center grid gap-6 font-bold shadow-2xl md:w-max md:bg-transparent md:p-0 md:grid-flow-col md:static custom-ul custom-ulMovil">

                <li>
                    <a href="{{ url('home')}}">Home</a>
                </li>
    
                <li>
                    <a href="#services2" class="sHidden">Services</a>
                    <a href="{{ route('home')}}#services2" class="sShow">Services</a>

                </li>
    
                <li>
                    <a href="{{ url('destinations')}}">Destinations</a>
                </li>

                <li>
                    <a href="{{ url('aboutus')}}">About Us</a>
                </li>
    
                <li>
                    <a href="{{ url('faq')}}">FAQ</a>
                </li>

                <li>
                    <a href="{{ url('contact')}}">Contact Us</a>
                </li>

            </ul>

        </div>

        <div class="divLogins">
            <button class="hidden lg:block">
                Contact Us
            </button>
        </div>
        {{-- <div class="divLogins">
            <a href="#" class="button shadow-sm shadowAzul hidden stylebtn lg:block">Login</a>
            <a href="#" class="button shadow-sm shadowAzul hidden stylebtn lg:block">Sign Up</a>
        </div> --}}
    </nav>

</header>