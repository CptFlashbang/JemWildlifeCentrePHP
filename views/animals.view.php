<?php
require('partials/head.php');
require('partials/header.php');
?>
<main class="flex-grow">
    <div class="mx-auto max-w-5xl py-6 px-8">
        <p>Hello. Welcome to the animals page.</p>
    </div>
    
    <section class="border-b-2 border-black bg-white mx-auto flex justify-center">
        <div class="grid grid-cols-5 gap-4 w-4/5 mx-auto">
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
    </section>
    <?php    
    require('partials/banner.php');
    ?>
</main>
<?php
require('partials/footer.php');
?>


