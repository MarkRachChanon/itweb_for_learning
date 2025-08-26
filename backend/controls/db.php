<?php
    $host = 'thsv25.hostatom.com';
    $dbname = 'ncitproj_g0';
    $username = 'ncitproj_g0';
    $password = 'Al0cJnk%T?98osye';

    try {
        $pdo = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8mb4", $username, $password);
        $pdo->setAttribute(
            PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
        );
        echo "<script>console.log('Connection Success');</script>";
    } catch (Exception $e) {
        echo "<script>console.log('Error: " . $e->getMessage() . "');</script>";
        exit();
    }
?>