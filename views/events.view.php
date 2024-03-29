<?php
require('partials/head.php');
require('partials/header.php');
?>
<main class="flex-grow">
    <div class="mx-auto max-w-5xl py-6 px-8">
        <p>Hello. Welcome to the events page.</p>
    </div>
    <section class="border-b-2 border-black bg-white mx-auto flex justify-center">
        <div class="grid grid-cols-5 gap-4 w-4/5 mx-auto">
            <?php foreach ($events as $event): ?>
                <a class="card" href="/JemWildlifeCentrePHP/event_detail?id=<?= $event['Event_ID_PK'] ?>">
                    <picture class="card-image">
                    <img src="<?= $event['image_path'] ?>" alt="<?= $event['Event_Title'] ?>">
                    </picture>
                    <div class="card-details">
                        <p class="card-name"><?= $event['Event_Title'] ?></p>
                        <p><?= $event['Formatted_Event_Date'] ?></p>
                        <p><?= $event['Formatted_Start_Time'] . " " . "-" . " " . $event['Formatted_End_Time']?></p>
                        <p><?= $event['Age_Rating'] ?></p>
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
