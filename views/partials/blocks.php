<?php

function generateBlockHeaderAndContentVertical($headerLevel, $headerContent, $contents) {
    $headerLevel = max(1, min(6, $headerLevel)); 

    echo "<h{$headerLevel}>$headerContent</h{$headerLevel}>";

    foreach ($contents as $content) {
        echo '<p class="py-4 max-w-prose">' . $content . '</p>';
    }
}

function generateBlockTestimonial($quote, $author, $organisation) {
    echo '<p class="text-center text-xl">' . $quote . '</p>';
    echo '<p>IMAGE</p>';
    echo '<p>IMAGE</p>';
    echo '<p class="font-bold">' . $author . '</p>';
    echo '<p>' . $organisation . '</p>';
}

function generateBlockFAQ($questions, $answers) {  
    foreach ($questions as $key => $question) {
        echo '<div class="question">' . $question . '</div>';
        

        $answer = $answers[$key]['text'];
        $status = $answers[$key]['status'];
        
        if ($status === 'Visible') {
            echo '<p>' . $answer . '</p>';
        }
    }
}
