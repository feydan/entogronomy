<?php
if ($_SERVER['REQUEST_URI'] !== '/' && file_exists(__DIR__ . '/' . $_SERVER['REQUEST_URI'])) {
    return false;
} else {
    include_once "public/index.php";
    return true;
}