<?php
use app\Services\Page;
?>
<!doctype html>
<html lang="en">
<?php Page::part("header"); ?>
<body>
<?php Page::part("nav"); ?>
<div class="container">

    <?php foreach ($films as $film): ?>

    <h2><a href=""><?=$film['text'] ?></a></h2>

    <?php endforeach; ?>
</div>

</body>
</html>