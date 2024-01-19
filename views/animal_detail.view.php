<?php
require('partials/head.php');
require('partials/header.php');
?>
<main class="flex-grow">    
    <div class="bg-green-700">
            <p>PICTURE</p>
            <p><?= $animal['Animal_ID_PK'] ?></p>
            <p><?= $animal['Name'] ?></p>
            <p><?= $animal['Sex'] ?></p>
            <p><?= $animal['General_Appearance'] ?></p>
    </div>
    <?php    
    require('partials/banner.php');
    ?>
</main>
<?php
require('partials/footer.php');
?>


                <a href="/JemWildlifeCentrePHP/animal_detail?id=<?= $animal['Animal_ID_PK'] ?>">
                    <p>PICTURE</p>
                    <p><?= $animal['Name'] ?></p>
                    <p><?= $animal['Sex'] ?></p>
                    <p>General_Appearance</p>
                </a>