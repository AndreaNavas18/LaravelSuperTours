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
        <h1>Contact Us</h1>
        <section class="sectionCU">
            <form action="">
                <label for="reason">Contact Reason</label>
                <select name="reason" id="reason">
                    <option value="general">General</option>
                    <option value="reservation">Reservation</option>
                    <option value="complaint">Complaint</option>
                    <option value="other">Other</option>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <input type="submit" value="Submit">
            </form>

        </section>
    </div>
    <div>
        @include('footer')
    </div>
    
</body>
</html>