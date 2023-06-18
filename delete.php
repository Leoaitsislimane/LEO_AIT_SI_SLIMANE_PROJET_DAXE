<?php

require 'template/database.php';

$supp = $database->prepare("DELETE FROM tweet WHERE id = :id");
$supp->execute(
    [
        "id" => $_POST['supp']
    ]
    );

    header("location: tweet.php");