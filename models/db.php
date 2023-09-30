<?php
global $pdo;

if (isset($pdo)) {
    return;
};

$pdo = new PDO("mysql:host=localhost;dbname=ladylafe;charset=utf8", "root", "");
?>