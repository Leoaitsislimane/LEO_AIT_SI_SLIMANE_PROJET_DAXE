<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tweet.css">
    <title>Document</title>
</head>
<body>
    
    

    <?php require "template/database.php"; ?>


    <?php
    $requete = $database->prepare("SELECT * FROM tweet");

$requete->execute();

$tweet = $requete->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="top" > 
      <h1 id="share"  data-aos="zoom-in">SHARE</h1>
   </div>
     
   <div class="bouton_droits"> 
    <a href="contacts.php"  alt="contacts">
        <img src="photo/homme_chou.png" alt="logo rouage"> 
    </a>
   
    <a href="paramètres.php"   alt="paramètres">
        <img src="photo/rouage.png" alt="logo rouage">
    </a>
   </div>

<div class = main>
<h2 class="tit">écrivez un Tweet!</h2>
        
        <?php foreach($tweet as $twt) { ?>
           <div class="info">
             <p>Tweet : <?= $twt['tweet'] ?> </p>
             <form action="delete.php" method="POST">
                   <input type="hidden" name="supp" Value="<?= $twt['id'] ?>">
                   <button type="submit">Supp</button>
             </form>
           </div>
        <?php } ?>

       <form class="twit" method="POST" action="insert2.php">
           <input type="text" name="tweet" placeholder="Tweeter" >

           <button type="submit">partager</button>
       </form>

       <form action="template/research.php" method="GET">
               <div class="searchContent">
                   <input class="inputSearch" type="search" name="research" placeholder="Rechercher des tweets">
                   <button class="btn-search" type="submit">rechercher</button>
               </div>
           </form>
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