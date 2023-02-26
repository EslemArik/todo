<?php

$id = $_GET ["id"];

try {
    $pdo = new PDO("mysql:host=165.232.67.236;dbname=todo", 'eslem', 'Beta3Eta1970');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
}

//          UPDATE `tasks` SET `is_deleted` = '1' WHERE `id` = 1;

$stmt = $pdo->prepare("UPDATE `tasks` SET `is_deleted` = '1' WHERE `id` = ?;");
$stmt->execute(array($id));
