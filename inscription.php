<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <title>SHARE</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

<div class="top" > 
      <h1 id="share"  data-aos="zoom-in">SHARE</h1>
   </div>
     
   <div class="bouton_droits"> 
    <a href="contacts.html"  alt="contacts">
        <img src="photo/homme_chou.png" alt="logo rouage"> 
    </a>
   
    <a href="paramètres.html"   alt="paramètres">
        <img src="photo/rouage.png" alt="logo rouage">
    </a>
   </div>

   <div class=main>
   <main>
    <h2>Créer un compte!</h2>
    <?php

require "template/database.php";

$requete = $database->prepare("SELECT * FROM inscription");

$requete->execute();

$tweet = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<?php

$requete = $database->prepare("SELECT * FROM inscription");

$requete->execute();

$twitter = $requete->fetchAll(PDO::FETCH_ASSOC);
?>
        
        
        


        <form class="inscription" method="POST" action="insert.php">
            <input type="text" name="nom" placeholder="Nom et prénom" >
            <input type="text" name="Pseudo" placeholder="Pseudo" >
            <input type="text" name="mail" placeholder="mail" >
            <input type="password" name="MDP" placeholder="mot de passe" >
            
            <button type="submit">Envoyer</button>
        </form>

        <?php foreach($twitter as $tw) { ?>
            <div class="info">
                <h2> <?= $tw['pseudo'] ?> </h2>
                <p>nom : <?= $tw['nom'] ?> </p>
                <p>mail : <?= $tw['mail'] ?> </p>
                <p>mdp : <?= $tw['MDP'] ?> </p>
            </div>

        <?php } ?> 
<br>
<br>
<button class="twitte">
    <a href="tweet.php">Tweeter ici!</a>
</button>
   </div>
   

<div class="footer">
        <ul>
            <li><a target="_blank" href="https://twitter.com/" class="lien-icone-twitter">
                <img src="photo/twitter (1).png" alt="Logo Twitter">
            </a>
            </li>
            <li><a target="_blank" href="https://www.instagram.com/" class="lien-icone">
                <img src="photo/instagram (1).png" alt="Logo Instagram">
            </a>
            </li>
            <li>
                <a target="_blank" href="https://www.linkedin.com/in/léo-ait-si-slimane/" class="lien-icone">
                    <img src="photo/linkedin_logo.png" alt="Logo linkedin">
                </a>
            </li>
        </ul>
        
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
   AOS.init();
 </script>

 <script src="script.js"></script>

    </main>
</body>
</html>