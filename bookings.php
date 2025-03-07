<?php
include_once 'Header.php';
?>

<head>
    <link href="assets/css/bookingStyle.css" rel="stylesheet">
</head>

<br>
<br>

<body>
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

    <!-- ✅ Modal Popup -->
    <div id="popupModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img src="assets/img/fitcheck.png" alt="Success" class="popup-img">
            <p>Bedankt voor het kiezen van <strong>MyFitGuide!</strong></p>
            <p>Een medewerker neemt zo spoedig mogelijk contact met u op.</p>

            <button id="closePopup">Sluiten</button>
        </div>
    </div>

    <!-- ✅ JavaScript voor de popup -->
    <script>
        document.getElementById("appointment-form").addEventListener("submit", function(event) {
            event.preventDefault(); // ❌ Voorkomt standaard versturen

            // ✅ Toon de popup
            document.getElementById("popupModal").style.display = "block";

            // ✅ Formulier resetten
            this.reset();
        });

        // ✅ Sluiten van de popup
        document.getElementById("closePopup").addEventListener("click", function() {
            document.getElementById("popupModal").style.display = "none";
        });

        // ✅ Sluiten als je buiten de modal klikt
        window.onclick = function(event) {
            let modal = document.getElementById("popupModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    </script>
</body>

<?php
include_once 'Footer.php';
?>