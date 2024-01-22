<?php
require('partials/head.php');
require('partials/header.php');
?>
<main class="flex-grow">    
    <div class="">
            <img src="<?= $event['image_path'] ?>" alt="<?= $event['Event_Title'] ?>">
            <p><?= $event['Event_ID_PK'] ?></p>
            <p><?= $event['Event_Title'] ?></p>
    </div>
    <?php    
    require('partials/banner.php');
    ?>
</main>
<?php
require('partials/footer.php');
?>