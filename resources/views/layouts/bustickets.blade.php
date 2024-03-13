
<div id="divHome">
    @include('layouts.dashboard')
    <section class="wrapper text-center max-w-xl mx-auto sch">

        <div class="flex-col md:flex-row mfd:flex gap-8 items-center schDiv2">
            <section class="mb-12 md:mb-0 schEach">
                <div class="mt-24 mb-14">
                    <article class="bg-vary-light-gray pt-8 pb-8 px-4 relative fondoSchHome">
                        <img src="./images/calenblack.png" class="absolute aspect-square -top-12 inset-x-0 mx-auto calenblack imgSc">
                        <h3 class="textxll mb-4 text-very-dark-blue">Bus Schedules from Orlando to Miami</h3>
                        {{-- Boton para abrir el modal --}}
                        <button id="btn-abrir-modal" class="button mx-auto shadow-xl shadowAzul schedulesBtn buttonSc">SHOW</button> 
                        <dialog id="modal" class="dialog1">
                            <h3>Schedules Today</h3>
                            @include('schedules')
                            <button id="btn-cerrar-modal">CERRAR MODAL </button>
                        </dialog>
                        
                    </article>
                </div>
            </section>

            <section class="mb-12 md:mb-0 schEach">
                <div class="mt-24 mb-14">
                    <article class="bg-vary-light-gray pt-8 pb-8 px-4 relative fondoSchHome">
                        <img src="./images/calenblue.png" class="absolute aspect-square -top-12 inset-x-0 mx-auto calenblack imgSc">
                        <h3 class="textxll mb-4 text-very-dark-blue">Bus Schedules from Miami to Orlando</h3>
                        {{-- Boton para abrir el modal --}}
                        <button id="btn-abrir-modal" class="button mx-auto shadow-xl shadowAzul schedulesBtn buttonSc">SHOW</button> 
                        <dialog id="modal">
                            <h3>Hola</h3>
                            <button id="btn-cerrar-modal">CERRAR MODAL </button>
                        </dialog>
                    </article>
                </div>
            </section>

        </div>

    </section>

    <section class="font-bold containerBenefits">
        <div class="secondsectionDiv1 wrapper text-center wrappermovil titleSliderMovil">
            <h2 class="titleBenefits titleBenefitsMovil">What do we have?.</h2>
        </div>
        {{-- <hr class="hrBenefits hrBenefitsMovil"> --}}
        <div class="secondsectionC sHidden">
            <div class="secondsectionDiv2 wrapper gap-6 px-4">
                @include('secondsection')
            </div>
        </div>
        <div class="secondsectionC mdocult">
            @include('movilsecondsection')
        </div>
    </section>

    <div id="services2" class="homeSection2 ">
        <div class="secondsectionDiv1 wrapper text-center wrappermovil titleSliderMovil">
            <h2 class="titleBenefits titleBenefitsMovil ">Our Services</h2>
        </div>
        {{-- <hr class="hrBenefits hrBenefitsMovil"> --}}
        <div class="sHidden">
            @include('section2')
        </div>
        <div class="mdocult">
            @include('movilservicios')
        </div>
    </div>
</div>