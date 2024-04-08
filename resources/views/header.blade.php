<header>

    <nav class="wrapper flex items-center justify-between wrappermovil">

        <a href="/" class="w-1/3 max-w-[180px]">
            <img src="./images/logo.png" class="w-full ocult mdview">
        </a>

        <input type="checkbox" id="menu" class="peer hidden">

        <label for="menu" class="bg-open-menu w-6 h-5 bg-cover bg-center cursor-pointer peer-checked:bg-close-menu transition-all z-50 md:hidden menuhamburguer"></label>

        <div id="navHeader" class="fixed inset-0 bg-gradient-to-b from-white/70 to-black/70 translate-x-full peer-checked:translate-x-0 transition-transform z-40 md:static md:bg-none md:translate-x-0">

            <ul class="absolute inset-x-0 top-24 p-12 bg-white w-[90%] mx-auto rounded-md h-max text-center grid gap-6 font-bold shadow-2xl md:w-max md:bg-transparent md:p-0 md:grid-flow-col md:static custom-ul custom-ulMovil">

                <li>
                    <a href="{{ url('/')}}">Home</a>
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
            <a href="#" class="hidden lg:block" style="color: white; font-weight:700; font-size:22px">Login</a>
            <a href="#" class="hidden lg:block" style="color: white; font-weight:700; font-size:22px">Sign Up</a>
        </div>
    </nav>

    <section id="sectionHeader" class="wrapper containerr grid gap-8 justify-items-center items-center pb-4 md:grid-cols-1 wrappermovil">

        <article class="text-center space-y-6 md:text-center md:space-y-8 custom-article">

            {{-- <h1 class="tmextos md:text-5xl mdocult">SUPER TOURS --}}
            <img src="./images/logo.png" class="mdocult logp">

            </h1>

            <h1 class="text-4xl font-bold tgextos md:text-5xl ocult mdview">Plan Your Trip With <br> Travel Super Tours
            </h1>

            {{-- <p class="text-blue-950 ocult mdview">Travel to your favorite city with respectful of the <br> enviroment!
            </p> --}}

        </article>

    </section>

</header>