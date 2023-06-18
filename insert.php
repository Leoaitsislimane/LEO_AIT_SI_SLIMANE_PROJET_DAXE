<?php

require 'template/database.php';

$insertion = $database->prepare("INSERT INTO inscription (Pseudo, nom, mail, MDP ) Values (:Pseudo, :nom, :mail, :MDP)");
$insertion->execute(
    [
        "Pseudo" => $_POST['Pseudo'],
        "nom" => $_POST['nom'],
        "mail" => $_POST['mail'],
        "MDP" => $_POST['MDP']
    ]
);

header("Location: inscription.php");

?>