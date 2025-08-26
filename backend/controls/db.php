<?php
    $host = 'thsv25.hostatom.com';
    $dbname = 'ncitproj_g0';
    $username = 'ncitproj_g0';
    $password = '43Ds*lNSav4mobi#';

    try {
        $pdo = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8mb4", $username, $password);
        $pdo->setAttribute(
            PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
        );
    } catch (Exception $e) {
        exit();
    }
?>