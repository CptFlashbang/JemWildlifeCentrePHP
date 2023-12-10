<?php
require('partials/head.php');
require('partials/header.php');
?>
<main class="flex-grow">
    <div class="mx-auto max-w-5xl py-6 px-8">
        <p>Hello. Welcome to the animals page.</p>
    </div>

    <div class="bg-red-700">
        <p>PICTURE</p>
        <p>NAME</p>
        <p>SEX</p>
        <p>General_Appearance</p>
    </div>

    
    <?php
        foreach ($animals as $animal) {
            echo (
                "<div class=\"bg-blue-700\">" .
                    "<p>PICTURE</p>" . 
                    "<p>".$animal['Name']."</p>" . 
                    "<p>".$animal['Sex']."</p>" . 
                    "<p>General_Appearance</p>".
                "</div>"
            );
        } 
    ?>

    

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


