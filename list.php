<?php

try {
    $pdo = new PDO("mysql:host=165.232.67.236;dbname=todo", 'eslem', 'Beta3Eta1970');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
}

$stmt = $pdo->prepare('SELECT * FROM `tasks` WHERE `is_deleted`=?');
$stmt->execute(array(0));
$content_list = $stmt->fetchAll(\PDO::FETCH_ASSOC);

echo json_encode($content_list);