<?php
use app\Services\Page;
?>
<!doctype html>
<html lang="en">
<?php Page::part("header"); ?>
<body>
<?php Page::part("nav"); ?>
<div class="container">
    <div class="main">
        <h1 class="Films mb-5 mt-2">  Список фильмов</h1>
        <div class="col-lg-12 d-flex justify-content-around">

            <?php foreach ($films as $film):?>

                <div class="card">
                    <img  src="<?="uploads/FIlms/".$film['Film_path']?>" alt="...">
                    <p><?=$film['name']?></p>
                </div>

            <?php endforeach; ?>

            <!-- <div class="card">
                 <img  src="http://kinohod.ru/o/91/72/91726d3c-d5cf-11ec-933a-ef1b7eaed081.jpg" class="card-img-top film-prev" alt="...">
                 <p>Уолк c укола</p>
             </div>
             <div class="card">
                 <img  src="http://kinohod.ru/o/91/72/91726d3c-d5cf-11ec-933a-ef1b7eaed081.jpg" class="card-img-top film-prev" alt="...">
                 <p>Уолк c укола</p>
             </div>
            <div class="card">
                <img  src="http://kinohod.ru/o/91/72/91726d3c-d5cf-11ec-933a-ef1b7eaed081.jpg" class="card-img-top film-prev" alt="...">
                <p>Уолк c укола</p>
            </div>
            <div class="card">
                <img  src="http://kinohod.ru/o/91/72/91726d3c-d5cf-11ec-933a-ef1b7eaed081.jpg" class="card-img-top film-prev" alt="...">
                <p>Уолк c укола</p>
            </div>
-->

        </div>

    </div>

</div>

</body>
</html>