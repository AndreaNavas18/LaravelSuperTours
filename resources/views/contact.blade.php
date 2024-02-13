<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/contact.css">

    <title>Contact Us</title>
</head>
<body>
    @include('header2')
    <div class="containerCU">
        <section class="sectionCU">
            <div class="s2CU">
                <h1 class="tituloCN">What can we help with?</h1>
                <div class="s1">
                    <h2 class="h2CN">EMAIL</h2>
                    <p class="pCN">
                        reservations@supertours.com
                    </p>
                </div>
                <div class="s1">
                    <h2 class="h2CN">PHONE</h2>
                    <p class="pCN">
                       Orlando<br>
                       (407)-370-3001
                    </p>
                    <p class="pCN">
                        Miami<br>
                        (305)-677-2676
                    </p>
                </div>
                <div class="s1">
                    <h2 class="h2CN">ADDRESS</h2>
                    <p class="pCN">
                        BUS STOP, 4953 International Dr, <br>
                        Orlando, FL 32819, Estados Unidos.
                    </p>
                </div>
            </div>
            <form action="" class="formClass">
                <div class="rowsCN">
                    <label for="reason" >
                        <h3 class="labelCN">
                            Contact Reason:
                        </h3>
                    </label>
                    <select class="selectCN" name="reason" id="reason">
                        <option value="null">Select an option</option>
                        <option value="general">General</option>
                        <option value="reservation">Reservation</option>
                        <option value="complaint">Complaint</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="rowsCN"> 
                    <label for="name" class="labelCN">
                        <h3 class="labelCN">
                            Name:
                        </h3>
                    </label>
                    <input type="text" id="name" name="name" class="inputCN" required>
                </div>
                <div class="rowsCN"> 
                    <label for="email" class="labelCN">
                        <h3 class="labelCN">
                           Email:
                        </h3>
                    </label>
                    <input type="email" id="email" name="email" class="inputCN" required>
                </div>
                <div class="rowsCN"> 
                    <label for="message" class="labelCN">
                        <h3 class="labelCN">
                            Message:
                        </h3>
                    </label>
                    <textarea id="message" name="message" class="textACN" required></textarea>
                </div>
                <button type="submit">
                    <h3 class="buttonCN">
                        Send
                    </h3
                </button>
            </form>

        </section>
    </div>
    <div>
        @include('footer')
    </div>
    
</body>
</html>