<?php

function block_header_and_content_vertical($headerLevel, $headerContent, $contents) {
    $headerLevel = max(1, min(6, $headerLevel)); 

    echo "<h{$headerLevel}>$headerContent</h{$headerLevel}>";

    foreach ($contents as $content) {
        echo "<p>{$content}</p>";
    }
}