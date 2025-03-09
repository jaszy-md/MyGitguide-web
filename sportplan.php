<?php
include_once 'Header.php';
include_once 'components/block_sportplan.php';
?>

<head>
    <link href="assets/css/block_sportplanStyle.css" rel="stylesheet">
</head>
<div class="spacing"></div>

<div class="fitcheck-block">
    <div class="block-header">FITCHECK</div>
    <div class="block-content">
        <p class="fitcheck-text">“Ik wil graag meer dan 5kg afvallen”</p>
        <div class="fitcheck-buttons">
            <button class="fitcheck-button agree">Eens</button>
            <button class="fitcheck-button disagree">Oneens</button>
        </div>
        <img src="assets/img/fitcheck.png" alt="Fitcheck Image" class="fitcheck-image">
    </div>
</div>

<div class="wrapper">
    <div class="fitcheck-line"></div>
</div>

<main class="block-wrapper">
    <div class="block-container">
        <?php
        $blocks = [
            [
                "header" => "Medium Cardio",
                "frontContent" => ["Milde cardio"],
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
                "header" => "Weight Fit Medium",
                "frontContent" => ["Weight Fit Medium"],
                "content" => ["1x per week personal trainer", "Voedingsadvies voor spieropbouw", "3x per week gewichtstraining met schema"],
                "image" => "assets/img/experienced.png"
            ],
            [
                "header" => "Cardio Extra",
                "frontContent" => ["Cardio Extra"],
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
                "header" => "Hardcore",
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

<?php include 'Footer.php'; ?>
<script src="assets/js/sportplanScript.js"></script>