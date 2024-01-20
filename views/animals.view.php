<?php
require('partials/head.php');
require('partials/header.php');
?>
<main class="flex-grow">
    <div class="mx-auto max-w-5xl py-6 px-8">
        <p>Hello. Welcome to the animals page.</p>
    </div>

    <div class="card-grid">
        <?php foreach ($animals as $animal): ?>
            <a class="card" href="/JemWildlifeCentrePHP/animal_detail?id=<?= $animal['Animal_ID_PK'] ?>">
                <picture class="card-image">
                    <img src="Images\Seal.jpg" alt="<?= $animal['Name'] ?>">
                </picture>
                <div class="card-details">
                    <p class="card-name"><?= $animal['Name'] ?></p>
                    <p><?= $animal['Common_Name'] ?></p>
                    <p><?= $animal['Sex'] ?></p>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
    <?php    
    require('partials/banner.php');
    ?>
</main>
<?php
require('partials/footer.php');
?>


