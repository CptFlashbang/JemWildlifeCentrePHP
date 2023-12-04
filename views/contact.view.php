<?php
require('partials/head.php');
require('partials/header.php');
require('partials/banner.php');
require('partials/blocks.php');
?>
<main>
    <div class="mx-auto py-6 px-8">
        <h3>Before sending me a message, here are some things you should know:</h3>      
    <?php        
    generateBlockFAQ($questions, $answers)
    ?>
    </div>  
</main>
<?php
require('partials/footer.php');
?>
