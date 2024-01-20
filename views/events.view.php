<?php
require('partials/head.php');
require('partials/header.php');
?>
<main class="flex-grow">
    <div class="mx-auto max-w-5xl py-6 px-8">
        <p>Hello. Welcome to the events page.</p>
    </div>
    <div class="grid grid-cols-5 gap-4 w-4/5 mx-auto">
        <?php foreach ($events as $event): ?>
            <a class="card" href="/JemWildlifeCentrePHP/event_detail?id=<?= $event['Event_ID_PK'] ?>">
                <picture class="card-image">
                    <img src="Images\Seal.jpg" alt="<?= $animal['Name'] ?>">
                </picture>
                <div class="card-details">
                    <p class="card-name"><?= $event['Event_Title'] ?></p>
                    <p><?= $event['Event_Date'] ?></p>
                    <p><?= $event['Start_Time'] . " " . "-" . " " . $event['End_Time']?></p>
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
