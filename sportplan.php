<?php
include_once 'Header.php';
include_once 'components/block_sportplan.php';
?>

<head>
    <link href="assets/css/block_sportplanStyle.css" rel="stylesheet">
    <link href="assets/css/bookingStyle.css" rel="stylesheet">
</head>
<div class="spacing"></div>

<body class="sportplan-page">
    <div class="fitcheck-block">
        <div class="block-header">FITCHECK</div>
        <div class="block-content" id="question-container">
            <p class="fitcheck-text" id="fitcheck-question"></p>
            <div class="fitcheck-buttons">
                <button class="fitcheck-button agree" onclick="answerQuestion(true)">Eens</button>
                <button class="fitcheck-button disagree" onclick="answerQuestion(false)">Oneens</button>
            </div>
            <img src="assets/img/fitcheck.png" alt="Fitcheck Image" class="fitcheck-image">
        </div>
        <div class="fitcheck-counter" id="fitcheck-counter">0/21</div>
        <button class="reset-button" onclick="resetCheck()">
            <i class="fa-solid fa-rotate-right"></i> <!-- Font Awesome icoon -->
        </button>
    </div>

    <div class="wrapper">
        <div class="fitcheck-line"></div>
    </div>

    <main class="block-wrapper">
        <div class="block-container">
            <?php
            $blocks = [
                [
                    "header" => "Medium Cardio Fit",
                    "frontContent" => ["Medium Cardio Fit"],
                    "content" => ["Voedingsschema's op maat", "3 cardiotrainingen per week van 1,5 uur onder begeleiding", "Extra stretching en warming-up schema's"],
                    "image" => "assets/img/cardio-middle.png"
                ],
                [
                    "header" => "Senior Fit",
                    "frontContent" => ["Senior Fit"],
                    "content" => ["Focus op balans, flexibiliteit en kracht", "Gezonde maaltijden & voedingsadvies", "2x per week senior-fitness onder begeleiding"],
                    "image" => "assets/img/senior.png"
                ],
                [
                    "header" => "Medium Weight Fit",
                    "frontContent" => ["Medium Weight Fit"],
                    "content" => ["1x per week personal trainer", "Voedingsadvies voor spieropbouw", "3x per week gewichtstraining met schema"],
                    "image" => "assets/img/experienced.png"
                ],
                [
                    "header" => "Cardio Extra Fit",
                    "frontContent" => ["Cardio Extra Fit"],
                    "content" => ["Extra cardio en HIIT-schema's", "5x per week intensieve trainingen", "Incl. weeg- en meetmomenten"],
                    "image" => "assets/img/extra-cardio.png"
                ],
                [
                    "header" => "Complete Package",
                    "frontContent" => ["Complete fitnessplan"],
                    "content" => ["Alles-in-één: cardio, krachttraining & voeding", "4x per week personal training", "Toegang tot exclusieve fitnessgroepen"],
                    "image" => "assets/img/full-package.png"
                ],
                [
                    "header" => "Hardcore weight Fit",
                    "frontContent" => ["Extreme krachttraining"],
                    "content" => ["Trainingsprogramma voor gevorderden", "5 dagen per week krachttraining", "2x per week personal trainer"],
                    "image" => "assets/img/extra-gym.png"
                ],
                [
                    "header" => "Gaining Weight",
                    "frontContent" => ["Spiermassa opbouwen"],
                    "content" => ["Bulkdieet en voedingsadvies", "5 dagen per week krachttraining", "1-op-1 begeleiding bij spieropbouw"],
                    "image" => "assets/img/gaining.png"
                ]
            ];

            foreach ($blocks as $block):
                renderBlock($block["header"], $block["content"], $block["image"], $block["frontContent"]);
            endforeach;
            ?>
        </div>
    </main>

    <!-- Fitcheck Result Modal -->
    <div id="popupModal" class="modal">
        <div class="modal-content">
            <p id="popupText"></p> <!-- Hier wordt het gekozen pakket getoond -->
            <img id="popupImage" src="assets/img/fitcheck.png" alt="Success" class="popup-img">
            <button id="closePopup">Sluiten</button>
        </div>
    </div>

</body>

<?php include 'Footer.php'; ?>
<script src="assets/js/sportplanScript.js"></script>