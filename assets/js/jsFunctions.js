document.addEventListener("DOMContentLoaded", function () {
    setTimeout(startImageAnimation, 2000);
});

function startImageAnimation() {

    var popup = document.querySelector('#popupContainer .popup');

    if (!popup) {
        console.error("Popup afbeelding niet gevonden!");
        return;
    }

    popup.classList.add("animate-popup");
}

// blocked zooming
document.addEventListener('keydown', function(event) {
    if (event.ctrlKey && (event.key === '=' || event.key === '-' || event.key === '0')) {
        event.preventDefault();
    }
});

document.addEventListener('wheel', function(event) {
    if (event.ctrlKey) {
        event.preventDefault();
    }
}, { passive: false });
