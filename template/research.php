<?php
    require "database.php";
        if (isset($_GET['research'])) {
            $query = $_GET['research'];
            $requete = $database->prepare("SELECT * FROM tweet INNER JOIN inscription ON tweet.user_id = inscription.id WHERE tweet LIKE :query ORDER BY date DESC");
            $requete->execute([
                ':query' => '%'.$query.'%'
            ]);
            $results = $requete->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }       
?>

<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recherche</title>
</head>

<body>
    <h2 class="titleResult" >Résultats de recherche pour "<?php echo $query; ?>"</h2>
        <?php if (count($results) > 0): ?>
            <?php foreach ($results as $element){  ?>
                <div class="newAdd" id="tweetSearch<?php echo $element['id']; ?>">
                        <h4><?php echo $element['pseudo']; ?></h4>
                            <p><?php echo $element['tweet']; ?></p>
                            <h6><?php echo $element['date']; ?></h6>
                    <form action="delete.php" method="POST">
                        <input type="hidden" name="supp" value="<?php echo $element['id']; ?>">
                        <button type="submit">Supprimer</button>
                    </form>
                </div>
            <?php } ?>
    <?php else: ?>
        <p>Aucun tweet trouvé pour "<?php echo $query; ?>"</p>
    <?php endif; ?>

    <?php if (count($results) > 0): ?>
        <script>
            // cette instruction doit rediriger vers le tweet
            window.location.hash = '#tweetSearch<?php echo $results[0]['tweets_id']; ?>';
        </script>
    <?php endif; ?>
</body>
</html>