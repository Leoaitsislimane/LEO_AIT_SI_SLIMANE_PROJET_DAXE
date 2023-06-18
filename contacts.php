<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHARE</title>
</head>
<body>
<?php foreach($twitter as $tw) { ?>
            <div class="info">
                <h2> <?= $tw['pseudo'] ?> </h2>
                <p>nom : <?= $tw['nom'] ?> </p>
                <p>mail : <?= $tw['mail'] ?> </p>
                <p>mdp : <?= $tw['MDP'] ?> </p>
            </div>

        <?php } ?> 
</body>
</html>