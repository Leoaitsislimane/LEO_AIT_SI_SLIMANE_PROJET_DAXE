<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SHARE</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    
   
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

 
    

     <div class="main">
        <h2 class="premier_titre">plus de contenue, plus de fun et moin de toxicité, <em>hein twitter</em></h2>
       <br>
       <p data-aos="zoom-in">Share est un nouveau réseaux social ou il vous sera possible 
        <br> de poster et regarder des vidéos et/ou photo de tous genre et pour toutes les catégorie d'âge
        <br> à votre première connexion Share vous donnera un questionnaire pour vous situer dans une 
        <br> catégories et vous proposer du contenue de votre seul goût. Share sera aussi capable
        <br> de voir les peronnes qui aiment les mêmes choses que vous et vous les proposeront en 
        <br> tant que nouveaux contacts.    </p>

       <h2> Inscrivez vous </h2>
       <br>

       <div class="container_button">
        <a href="inscription.php" target="_blank">
            
            <button data-aos="zoom-in" onclick="playSound()">Cliquez ici</button> 
            <audio id="myAudio">
                <source src="son/click.mp3" type="audio/mpeg">
            </audio>
        </a>
      </div>
        
 <div class="flexbox" >
        
            <div class="card" id="card">
                <h3>Un réseaux fait pour vous qui analyse vos besoins </h3>
            </div>
            
            <div class="card" id="card2">
               <h3> postez vos vidéo et photo pour les partager avec tous vos contacts! et observer du contenue qui 
                vous interesse vraiment !  </h3> 
            </div>
</div>




<div id="myModal" class="modal">
  <div class="contenue">
    <span class="close">&times;</span>
    <p>Share saura vous donner ce dont vous avez besoins dans votre journée.
        <br> que ce soit du fun avec des vidéo drôle ou encore de s'instuire avec
        <br> des vidéo ou vous apprendrez ce qui vous interesse vraiment. 
    </p>
  </div>

</div>


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
</body>
</html>