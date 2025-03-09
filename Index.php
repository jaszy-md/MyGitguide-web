<?php
include_once 'Header.php';
include_once 'components/block_sportplan.php';
?>

<head>
    <link href="assets/css/block_sportplanStyle.css" rel="stylesheet">
</head>

<body>
    <main id="main" class="d-flex flex-column justify-content-center">
        <br>
        <div class="white_container">
            <div class="wrapper">
                <div class="text-wrapper">
                    <p class="intro_text">
                    <p>Welkom bij <b class="title">MyFitGuide!</b></p>
                    Wij bieden diverse sportplannen en een handige
                    fitcheck om te ontdekken welk plan het beste bij jou past.
                    Of je nu op zoek bent naar een personal trainer,
                    voedingsschema of gewoon een duwtje in de rug nodig hebt,
                    wij staan voor je klaar. </p>
                </div>
            </div>
        </div>
        <div class="blue_container">
            <div class="block-wrapper">
                <div class="block-container">
                    <?php
                    $blocks = [
                        [
                            "header" => "Voeding",
                            "frontContent" => ["Voeding"],
                            "content" => [
                                "Eet eiwitrijke maaltijden voor sneller spierherstel.",
                                "Plan je maaltijden vooruit om gezonde keuzes makkelijker te maken. Wij hebben hier voedingsschema's voor!",
                            ],
                            "image" => "assets/img/fruit-1.png",
                            "frontImage" => "assets/img/fruit.png"
                        ],
                        [
                            "header" => "Beweging",
                            "frontContent" => ["Beweging"],
                            "content" => [
                                "Doe dagelijks een korte warming-up om blessures te voorkomen.",
                                "Combineer krachttraining met cardio voor een optimaal resultaat.",

                            ],
                            "image" => "assets/img/extra-gym.png",
                            "frontImage" => "assets/img/extra-gym.png"
                        ],
                        [
                            "header" => "Slaap",
                            "frontContent" => ["Slaap"],
                            "content" => [
                                "Ga elke dag op hetzelfde tijdstip naar bed voor een beter slaapritme.",
                                "Vermijd schermen een uur voor het slapengaan om beter in slaap te vallen.",

                            ],
                            "image" => "assets/img/sleep-1.png",
                            "frontImage" => "assets/img/sleep.png"
                        ]
                    ];

                    foreach ($blocks as $block):
                        renderBlock(
                            $block["header"],
                            $block["content"],
                            $block["image"],
                            $block["frontContent"],
                            $block["frontImage"] ?? null
                        );
                    endforeach;
                    ?>

                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="fitcheck-block-call">
            <div class="block-header">FITCHECK</div>
            <div class="block-content-call">
                <p class="fitcheck-call-text">
                    Ontdek welk sportplan perfect bij jou past met onze FitCheck.
                    Start nu en zet de eerste stap naar een fittere versie van jezelf!
                </p>
                <button onclick="location.href='sportplan.php';" class="fitcheck-btn">Fitcheck →</button>

                <img src="assets/img/fitcheck.png" alt="Fitcheck Image" class="fitcheck-image-call">
            </div>
        </div>
        <br>
        <br>
    </main>

</body>
<?php
include_once 'Footer.php';
?>