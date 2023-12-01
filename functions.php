<?php

function urlIs($value) {
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $value;
}