<?php
require('partials/head.php');
require('partials/header.php');
require('partials/blocks.php');
?>
<main class="flex-grow">
    <?php    
    require('partials/banner.php');
    ?>
    <div class=" flex-grow mx-auto py-6 px-8">
        <h3>Before sending us a message, here are some things you should know:</h3>      
    <?php        
    generateBlockFAQ($questions, $answers)
    ?>
    </div>  
</main>
<?php
require('partials/footer.php');
?>
