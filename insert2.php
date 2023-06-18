<?php
require 'template/database.php';
$user_id = 10 ;

$insertion = $database->prepare("INSERT INTO tweet (tweet, user_id) Value (:tweet, :user_id)");
$insertion->execute(
    [
        "tweet" => $_POST['tweet'],
        "user_id" => $user_id
    ]
);

header("Location: tweet.php");

?>