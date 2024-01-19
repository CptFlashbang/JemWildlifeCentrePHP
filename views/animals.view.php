<?php
require('partials/head.php');
require('partials/header.php');
?>
<main class="flex-grow">
    <div class="mx-auto max-w-5xl py-6 px-8">
        <p>Hello. Welcome to the animals page.</p>
    </div>

    <div class="grid grid-cols-3 gap-4">
        <?php foreach ($animals as $animal): ?>
            <div class="bg-green-700 p-4">
                <a href="/JemWildlifeCentrePHP/animal_detail?id=<?= $animal['Animal_ID_PK'] ?>">
                    <p>PICTURE</p>
                    <p><?= $animal['Name'] ?></p>
                    <p><?= $animal['Sex'] ?></p>
                    <p>General_Appearance</p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <?php    
    require('partials/banner.php');
    ?>
</main>
<?php
require('partials/footer.php');
?>


