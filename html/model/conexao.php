<?php 

    include (__DIR__."/../config/config.php");

    class Conexao{

        public function conectar(){
            $pdo = null;

            try {
        
                $pdo = new PDO("mysql:host=".ENV["DB"]["HOST"].";dbname=".ENV["DB"]["NAME"], ENV["DB"]["USER"],  ENV["DB"]["PASS"]);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;

            } catch (PDOException $e) {
                print $e->getMessage();
                die();
            
            }
        }

    }

?>