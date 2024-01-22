<?php
require('partials/head.php');
require('partials/header.php');
?>
<main class="flex-grow">    
    <div class="w-4/5 mx-auto">
        <div class="card">
            <picture class="card-image">
            <img src="<?= $animal['image_path'] ?>" alt="<?= $animal['Name'] ?>">
            </picture>
            <div class="card-details">
                <p class="card-name"><?= $animal['Name'] ?></p>
                <p>Common_Name: <?= $animal['Common_Name'] ?></p>
                <p>Sex: <?= $animal['Sex'] ?></p>
                <p>Genus: <?= $animal['Genus'] ?></p>
                <p>Species: <?= $animal['Species'] ?></p>
                <p>Distinctive Markings: <?= $animal['Distinctive_Markings'] ?></p>                
            </div>
        </div>
    </div>
    <?php    
    require('partials/banner.php');
    ?>
</main>
<?php
require('partials/footer.php');
?>