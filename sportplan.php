<?php
include_once 'Header.php';
?>

<main class="wrapper">
    <div class="grid-container">
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="flip-card" onclick="flipCard(this)">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h2>Blok <?php echo $i; ?></h2>
                    </div>
                    <div class="flip-card-back">
                        <p>Andere tekst voor Blok <?php echo $i; ?></p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</main>

<?php include 'footer.php'; ?>

<script src="assets/js/sportplanScript.js"></script>

</body>

</html>