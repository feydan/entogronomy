<?php
if (!file_exists(__DIR__ . '/' . substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '?')))) {
    include_once "index.php";
    return true;
} elseif ($_SERVER['REQUEST_URI'] === '/') {
    include_once "index.php";
    return true;
}
return false;