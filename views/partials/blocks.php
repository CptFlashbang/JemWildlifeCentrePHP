<?php

function generateBlockHeaderAndContentVertical($headerLevel, $headerContent, $contents) {
    $headerLevel = max(1, min(6, $headerLevel)); 

    echo "<h{$headerLevel}>$headerContent</h{$headerLevel}>";

    foreach ($contents as $content) {
        echo '<p class="py-4">' . $content . '</p>';
    }
}

function generateBlockTestimonial($quote, $author, $organisation) {
    echo '<p class="text-center text-xl">' . $quote . '</p>';
    echo '<p>IMAGE</p>';
    echo '<p>IMAGE</p>';
    echo '<p class="font-bold">' . $author . '</p>';
    echo '<p>' . $organisation . '</p>';
}