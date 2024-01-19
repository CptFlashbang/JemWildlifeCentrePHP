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
            <a href="animal_detail.php?id=<?= $animal['Animal_ID_PK'] ?>">
                <p>PICTURE</p>
                <p><?= $animal['Name'] ?></p>
                <p><?= $animal['Sex'] ?></p>
                <p>General_Appearance</p>
            </a>
        </div>
    <?php endforeach; ?>
    </div>

    <?php
        foreach ($books as $book) {
            $output = "<li>" . "<a href='/phpapp/book?id=". $book['ID'] . "&return=books' class='text-blue-500 hover:underline'>" . $book['title'] . "</a> by " . $book['author'] ."</li>";
            echo $output;
        } ?>

    

    <!-- <div>
        <ul class="my-3">
            <?php
            // foreach ($animals as $animal) {
            //     echo "<li><strong>" . $animal['Name'] . "</strong> by <span>" . $animal['Sex'] . "</span> with " . $animal['General_Appearance'] ." pages</li>"} 
            ?>
        </ul>
    </div> -->
    <?php    
    require('partials/banner.php');
    ?>
</main>
<?php
require('partials/footer.php');
?>


