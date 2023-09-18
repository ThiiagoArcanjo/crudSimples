<?php 

    include (__DIR__."/../config/config.php");

    
    $pdo = null;

    try {
        $pdo = new PDO("mysql:host=".ENV["DB"]["HOST"].";dbname=".ENV["DB"]["NAME"], ENV["DB"]["USER"],  ENV["DB"]["PASS"]);
    } catch (PDOException $e) {
        print $e->getMessage();
        die();
    }

?>