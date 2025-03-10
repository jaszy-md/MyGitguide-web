<div id="popupModal" class="modal">
    <div class="modal-content">
        <p id="popupText"><?= isset($popupText) ? $popupText : '' ?></p>
        <img id="popupImage" src="<?= isset($popupImage) ? $popupImage : 'assets/img/fitcheck.png' ?>" alt="Popup Image" class="popup-img">
        <button id="closePopup">Sluiten</button>
    </div>
</div>