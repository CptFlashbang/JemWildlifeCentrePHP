<?php
require('partials/head.php');
require('partials/header.php');
?>
<main class="flex-grow">    
    <div class="">
            <img src="<?= $event['image_path'] ?>" alt="<?= $event['Event_Title'] ?>">
            <p><?= $event['Event_Title'] ?></p>
            <p><?= $event['Event_Description'] ?></p>
            <p>Date: <?= $event['Event_Date'] ?></p>
            <p>Start_Time:  <?= $event['Start_Time'] ?></p>
            <p>End Time:  <?= $event['End_Time'] ?></p>
            <p><?= $event['Event_Notes'] ?></p>
    </div>
    <?php    
    require('partials/banner.php');
    ?>
</main>
<?php
require('partials/footer.php');
?>