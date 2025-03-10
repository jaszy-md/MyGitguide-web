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
        }
    }

    window.answerQuestion = function (agreed) {
        if (agreed) {
            let selectedPackage = questions[currentQuestionIndex].package;
            scores[selectedPackage] = (scores[selectedPackage] || 0) + 1;
        }

        if (currentQuestionIndex === questions.length - 1) {
            showResult();
            return;
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
    
        // ✅ Hier voegen we HTML toe voor styling
        popupText.innerHTML = `
            <p>Jouw aanbevolen pakket is:</p>
            <strong class="popup-package">${bestPackage}</strong>
        `;
    
        popupModal.classList.add("active");
    }
    

    closePopup.addEventListener("click", function () {
        popupModal.classList.remove("active");
    });

    window.addEventListener("click", function (event) {
        if (event.target === popupModal) {
            popupModal.classList.remove("active");
        }
    });

    window.resetCheck = function () {
        currentQuestionIndex = 0;
        scores = {};
        popupModal.classList.remove("active");
        loadQuestion();
    };

    loadQuestion();
});
