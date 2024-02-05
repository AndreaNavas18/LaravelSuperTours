<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/faq.css">
    <script src="{{ asset('/js/reviews.js') }}" defer></script>

    <title>FAQ</title>
</head>
<body>
    @include('header2')
    <div class="containerFAQ">
       <section class="faq-section">
           <h1 class="faqtitle">FAQ</h1>
            <div class="div-faq">
                <div class="dropdown-trigger">
                    <h2>Where does Super Tours Travel?</h2>
                    <div class="dropdown-content">
                    <p >We offer daily service Between Orlando, Fort Pierce, 
                        Lake Worth/West Palm Beach, Pompano Beach, Ft. Lauderdale/Hollywood, 
                        Miami Beach, and Miami, including a stop at the Miami International 
                        Airport.</p>
                    </div>
                </div>
            </div>
            <div class="div-faq2">
                <div class="dropdown-trigger">
                    <h2>What are your departure and arrival times?</h2>
                    <div class="dropdown-content">
                    <p >Super Tours offers various departures; please visit our 
                        schedules on the home screen for times and locations.</p>
                    </div>
                </div>
            </div>
            <div class="div-faq2">
                <div class="dropdown-trigger">
                    <h2>How much is the cost per person to travel?</h2>
                    <div class="dropdown-content">
                    <p >Prices per seat. Price varies due to travel date and date of 
                        purchase. All passengers must purchase a ticket to board, 
                        including infants.</p>
                    </div>
                </div>
            </div>
            <div class="div-faq2">
                <div class="dropdown-trigger">
                    <h2>How to make a reservation?</h2>
                    <div class="dropdown-content">
                    <p >You can make reservations on the home screen or by calling our 
                        call center at (407)370-3001. Please note that you save by booking 
                        online.</p>
                    </div>
                </div>
            </div>
            <div class="div-faq2">
                <div class="dropdown-trigger">
                    <h2>How do I pay for my reservation?</h2>
                    <div class="dropdown-content">
                    <p >Reservations need to be prepaid with a major credit card through 
                        our secure payment on our website or by calling our call center 
                        (407)370-3001.</p>
                    </div>
                </div>
            </div>
            <div class="div-faq2">
                <div class="dropdown-trigger">
                    <h2>What will I receive to show my reservation is confirmed?</h2>
                    <div class="dropdown-content">
                    <p>Once your reservation is paid for, you will receive a confirmation 
                        number and an E-ticket via e-mail. E-Tickets do not need to be 
                        printed.</p>
                    </div>
                </div>
            </div>
            <div class="div-faq2">
                <div class="dropdown-trigger">
                    <h2>Does my child need to pay for a ticket?</h2>
                    <div class="dropdown-content">
                    <p>All passengers, including infants, must reserve and pay for a seat on the bus.</p>
                    </div>
                </div>
            </div>
            <div class="div-faq2">
                <div class="dropdown-trigger">
                    <h2>What is the cancelation policy?</h2>
                    <div class="dropdown-content">
                    <p>All tickets that are purchased are non-refundable and non-transferable 
                        under any circumstance. We ask that before you make your purchase, to 
                        be sure that you will be able to travel.</p>
                    </div>
                </div>
            </div>
            <div class="div-faq2">
                <div class="dropdown-trigger">
                    <h2>What if I missed my Bus?</h2>
                    <div class="dropdown-content">
                    <p>We are aware that unfortunate things may occur that you may miss the Bus; 
                        unfortunately, your ticket is non-refundable and non-transferable. You will 
                        need to purchase another ticket for another trip. To avoid missing your trip 
                        you must be at the departure location between 20 to 30 minutes before the 
                        departure time.</p>
                    </div>
                </div>
            </div>
            <div class="div-faq2">
                <div class="dropdown-trigger">
                    <h2>Times posted are?</h2>
                    <div class="dropdown-content">
                    <p>The times posted on our schedule and E-Tickets are the departure times. It is the 
                        passenger's responsibility to be between 20 to 30 mins before the departure time 
                        at the location of departure.</p>
                    </div>
                </div>
            </div>
            <div class="div-faq2">
                <div class="dropdown-trigger">
                    <h2>Are Pets allowed to travel?</h2>
                    <div class="dropdown-content">
                    <p>All of us at Super Tours love pets, but unfortunately, for the safety and allergies 
                        of other passengers, they are not permitted to travel on our vehicles. </p>
                    </div>
                </div>
            </div>
            <div class="div-faq2">
                <div class="dropdown-trigger">
                    <h2>May a child travel alone on your trips?</h2>
                    <div class="dropdown-content">
                    <p>Children 8 through 15 years of age will be accepted for transportation when accompanied 
                        by a passenger at least 16 years of age. Unaccompanied children under 8 years of age will 
                        not be accepted under any circumstances. No unaccompanied minors are permitted on travel packages. </p>
                    </div>
                </div>
            </div>
            <div class="div-faq2">
                <div class="dropdown-trigger">
                    <h2>What amenities are on board?</h2>
                    <div class="dropdown-content">
                    <p>Vehicles are equipped with Power outlets, TV, and a Restroom.
                        All or some of these amenities may not be available on your trip.</p>
                    </div>
                </div>
            </div>


                
                
       </section>
    </div>
    <div>
        @include('footer')
    </div>
    
</body>
</html>