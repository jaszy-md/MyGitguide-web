<?php
include_once 'Header.php';
?>

<head>
    <link href="assets/css/contactStyle.css" rel="stylesheet">
</head>
<br>
<br>

<body class="contact-page">

    <main class="contact-container">
        <div class="middle-color-container">
            <h2>Contact</h2>
            <p class="contact-description">Neem gerust contact met ons op via onderstaande gegevens of bezoek ons op locatie.</p>

            <div class="contact-info">
                <div class="contact-item">
                    <i class="fa-solid fa-phone"></i>
                    <p><strong>Telefoon:</strong> <a href="tel:+31612345678">+31 6 1234 5678</a></p>
                </div>
                <div class="contact-item">
                    <i class="fa-solid fa-envelope"></i>
                    <p><strong>Email:</strong> <a href="mailto:info@myfitguide.nl">info@myfitguide.nl</a></p>
                </div>
                <div class="contact-item">
                    <i class="fa-solid fa-map-marker-alt"></i>
                    <p><strong>Adres:</strong> Fitstraat 123, 1234 AB Amsterdam, Nederland</p>
                </div>
            </div>

            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.1342125225!2d4.763384156878152!3d52.3547323124081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609be0e380907%3A0xa0f382a21a64210!2sAmsterdam%2C%20Nederland!5e0!3m2!1snl!2s!4v1709648000000!5m2!1snl!2s"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </main>
</body>
<br>
<br>
<?php
include_once 'Footer.php';
?>