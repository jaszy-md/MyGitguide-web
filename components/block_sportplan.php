<?php
function renderBlock($header, $content, $image)
{
?>
    <div class="block">
        <div class="block-header">Fitplan: <?php echo htmlspecialchars($header); ?></div>
        <div class="block-content">
            <ul class="content-list">
                <?php foreach ($content as $item): ?>
                    <li>
                        <img src="assets/img/dumbell.png" alt="Bullet Point" class="list-icon">
                        <span class="list-text"><?php echo htmlspecialchars($item); ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
            <img src="<?php echo htmlspecialchars($image); ?>" alt="Block Image" class="content-image">
        </div>
    </div>
<?php
}
?>