<?php
function renderBlock($header, $content, $image, $frontContent)
{
?>
    <div class="block" onclick="flipCard(this)">
        <div class="block-inner">
            <div class="block-front">
                <div class="block-content front-content">
                    <ul>
                        <?php foreach ($frontContent as $item): ?>
                            <li class="front-text"><?php echo htmlspecialchars($item); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="block-back">
                <div class="block-header">Fitplan: <?php echo htmlspecialchars($header); ?></div>
                <div class="block-content">
                    <ul class="content-list">
                        <?php foreach ($content as $item): ?>
                            <li>
                                <img src="assets/img/dumbell.png" alt="Dumbbell Icon" class="list-icon">
                                <span class="list-text"><?php echo htmlspecialchars($item); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <img src="<?php echo htmlspecialchars($image); ?>" alt="Block Image" class="content-image">
                </div>
            </div>
        </div>
    </div>
<?php
}
?>