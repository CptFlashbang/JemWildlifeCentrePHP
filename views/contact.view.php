<?php
require('partials/head.php');
require('partials/header.php');
require('partials/banner.php');
require('partials/blocks.php');
?>
<main>
    <div class="mx-auto max-w-5xl py-6 px-8">
        <p>Hello. Welcome to the contact page.</p>
    </div>    
    <?php
        $questions = [
            "q1" => 
            "When was Halestorm formed, and who are the founding members?",
            "q2" => 
            "What is Halestorm's breakthrough album, and what notable achievements did it attain?",
        ];
        
        $answers = [
            "q1" => 
            ['text' => 'Halestorm was formed in 1997 in Red Lion, Pennsylvania, USA. The founding members are siblings Lzzy Hale (vocals, guitar, and keyboard) and Arejay Hale.',
             'status' => 'Visible'],
            "q2" =>
            ['text' => 'Halestorm\'s breakthrough album is their self-titled release, "Halestorm," which came out in 2009. The album features hit tracks like "I Get Off" and "It\'s Not You" and earned the band a Grammy Award for Best Hard Rock/Metal Performance for the song "Love Bites (So Do I)" in 2013.',
             'status' => 'Visible'],

        ];
    generateBlockFAQ($questions, $answers)
    ?>
</main>
<?php
require('partials/footer.php');
?>
