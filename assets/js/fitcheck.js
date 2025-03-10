document.addEventListener("DOMContentLoaded", function () {
    const questions = [
        { text: "Ik wil graag meer dan 5kg afvallen.", package: "Cardio Extra Fit" },
        { text: "Ik wil intensieve HIIT-trainingen doen.", package: "Cardio Extra Fit" },
        { text: "Ik wil vaker dan 4x per week trainen.", package: "Cardio Extra Fit" },

        { text: "Ik wil spiermassa opbouwen met zware krachttraining.", package: "Hardcore Weight Fit" },
        { text: "Ik wil een strikt trainingsschema met 5 dagen krachttraining.", package: "Hardcore Weight Fit" },
        { text: "Ik wil een personal trainer voor mijn krachttraining.", package: "Hardcore Weight Fit" },

        { text: "Ik wil een gebalanceerd programma met voeding en cardio.", package: "Medium Cardio Fit" },
        { text: "Ik zoek een trainingsschema voor lichte en middellange cardio.", package: "Medium Cardio Fit" },
        { text: "Ik wil een voedingsschema voor gewichtsverlies combineren met cardio.", package: "Medium Cardio Fit" },

        { text: "Ik zoek een trainingsprogramma speciaal voor ouderen.", package: "Senior Fit" },
        { text: "Ik wil oefeningen voor balans en flexibiliteit.", package: "Senior Fit" },
        { text: "Ik wil een lage intensiteit, maar toch fit blijven.", package: "Senior Fit" },

        { text: "Ik wil een alles-in-één pakket voor training en voeding.", package: "Complete Package" },
        { text: "Ik wil personal training, voeding en groepslessen combineren.", package: "Complete Package" },
        { text: "Ik wil zowel kracht als cardio trainen in één programma.", package: "Complete Package" },

        { text: "Ik wil vooral mijn uithoudingsvermogen verbeteren.", package: "Medium Weight Fit" },
        { text: "Ik wil zowel cardio als spieropbouw trainen.", package: "Medium Weight Fit" },
        { text: "Ik wil 1-op-1 coaching voor spieropbouw en gewichtsverlies.", package: "Medium Weight Fit" },

        { text: "Ik wil een plan dat me helpt meer spiermassa aan te komen.", package: "Gaining Weight" },
        { text: "Ik wil een voedingsschema om te bulken.", package: "Gaining Weight" },
        { text: "Ik wil gericht trainen om sterker te worden en aan te komen.", package: "Gaining Weight" }
    ];

    let currentQuestionIndex = 0;
    let scores = {};

    const questionText = document.getElementById("fitcheck-question");
    const counterText = document.getElementById("fitcheck-counter");

    // Modal elementen selecteren
    const popupModal = document.getElementById("popupModal");
    const popupText = document.getElementById("popupText");
    const closePopup = document.getElementById("closePopup");

    function updateCounter() {
        counterText.innerText = `${currentQuestionIndex + 1}/${questions.length}`;
    }

    function loadQuestion() {
        if (currentQuestionIndex < questions.length) {
            questionText.innerText = questions[currentQuestionIndex].text;
            updateCounter();
        } else {
            showResult();
        }
    }

    window.answerQuestion = function (agreed) {
        if (agreed) {
            let selectedPackage = questions[currentQuestionIndex].package;
            scores[selectedPackage] = (scores[selectedPackage] || 0) + 1;
        }
        currentQuestionIndex++;
        loadQuestion();
    };

    function showResult() {
        let highestScore = 0;
        let bestPackage = "Geen pakket gevonden";

        for (let [packageName, score] of Object.entries(scores)) {
            if (score > highestScore) {
                highestScore = score;
                bestPackage = packageName;
            }
        }

        // Zet de tekst in de modal in plaats van een alert
        popupText.innerText = `Jouw aanbevolen pakket is: ${bestPackage}`;

        // Open de modal
        popupModal.style.display = "block";
    }

    // Sluit de modal als je op de sluitknop klikt
    closePopup.addEventListener("click", function () {
        popupModal.style.display = "none";
    });

    // Optioneel: Sluit de modal als je buiten de modal klikt
    window.addEventListener("click", function (event) {
        if (event.target === popupModal) {
            popupModal.style.display = "none";
        }
    });

    window.resetCheck = function () {
        currentQuestionIndex = 0;
        scores = {};
        popupModal.style.display = "none"; // Sluit de modal bij reset
        loadQuestion();
    };

    loadQuestion();
});
