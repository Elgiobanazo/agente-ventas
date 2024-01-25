<?php
function debuguear($variable) : void {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html) : string {
    return htmlspecialchars($html);
}
function is_auth() : bool {
    if(!isset($_SESSION)) session_start();
    
    return !empty($_SESSION['user']);
}