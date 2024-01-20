<?php
require('partials/head.php');
require('partials/header.php');
?>
<main class="flex-grow">
    <div class="mx-auto max-w-5xl py-6 px-8">
        <p>Hello. Welcome to the events page.</p>
    </div>
    <div class="grid grid-cols-3 gap-4">
        <?php foreach ($events as $event): ?>
            <div class="bg-green-700 p-4">
                <a href="/JemWildlifeCentrePHP/event_detail?id=<?= $event['Event_ID_PK'] ?>">
                    <p>PICTURE</p>
                    <p><?= $event['Name'] ?></p>
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
