<?php
include_once 'Header.php';
?>

<head>
    <link href="assets/css/bookingStyle.css" rel="stylesheet">
    <link href="assets/css/sportplan.css" rel="stylesheet">
    <link href="assets/css/modalStyle.css" rel="stylesheet">
</head>

<body class="booking-page">
    <br>
    <br>
    <div class="white_container">
        <div class="wrapper">
            <div class="text-wrapper">
                <p class="intro_text_contact">
                    Welkom bij onze <b class="title">Bookings</b> pagina!<br>

                </p>
            </div>
        </div>
    </div>
    <div class="booking-wrapper">
        <div class="booking-container">
            <h1>Boek nu je afspraak!</h1>
            <form id="appointment-form">
                <div class="form-group">
                    <label for="name">Naam:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="date">Datum:</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Tijd:</label>
                    <input type="time" id="time" name="time" required>
                </div>
                <button type="submit">Verstuur afspraak verzoek</button>
            </form>
        </div>
    </div>

    <?php
    $popupText = "<p>Bedankt voor het kiezen van <strong class='title'>MyFitGuide!</strong></p>
                  <p>Een medewerker neemt zo spoedig mogelijk contact met u op.</p>";
    $popupImage = "assets/img/fitcheck.png";

    include 'components/message_modal.php';
    ?>

    <br>
    <br>
</body>

<?php
include_once 'Footer.php';
?>