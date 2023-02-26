<?php

$content = $_GET ["content"];


try {
    $pdo = new PDO("mysql:host=165.232.67.236;dbname=todo", 'eslem', 'Beta3Eta1970');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
}

$stmt = $pdo->prepare('INSERT INTO tasks (`content`) VALUES (?);');
$stmt->execute(array($content));