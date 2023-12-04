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
    <div>
        <h2>Contact Us</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
</main>
<?php
require('partials/footer.php');
?>
