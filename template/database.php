<?php 

    try {
        $database = new PDO(
            "mysql:host=localhost;dbname=share",
            "root",
            ""
        );
    } catch(PDOException $error){
        die();
    };

?>