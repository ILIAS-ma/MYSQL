<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="php2emepage.css">
</head>
<body>
    <div class="container">
        <div class="column">
            <ul class="icone-liste">
                <img src="./Nouveau dossier/petit logo.png" alt="">
                <li><i class="fab fa-twitter"></i> Twitter</li>
                <li><i class="fab fa-explorer"></i> Explorer</li>
                <li><i class="fas fa-home"></i> Accueil</li>
                <li><i class="fas fa-hashtag"></i> Explorer</li>
                <li><i class="far fa-bell"></i> Notifications</li>
                <li><i class="far fa-envelope"></i> Messages</li>
                <li><i class="far fa-Liste"></i> Liste</li>
                <li><i class="far fa-Profil"></i> Profil</li>
            </ul>
            <button>Poster</button>
        </div>
        <h2>Résultats de la recherche</h2>

            <table>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Email</th>
                        <th>Date du tweet</th>
                        <th>Contenu du tweet</th>
                    </tr>
                </thead>
                <body>
                    <?php
                    require 'database.php';
                    $requete = $database->query("SELECT user.nom, user.email, tweet.time AS tweet_date, tweet.contenu 
                                                FROM tweet 
                                                INNER JOIN user ON tweet.user_id = user.id 
                                                ORDER BY tweet.time DESC");
                    $tweets = $requete->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($tweets as $tweet) {
                        echo "<tr>";
                        echo "<td>{$tweet['nom']}</td>";
                        echo "<td>{$tweet['email']}</td>";
                        echo "<td>{$tweet['tweet_date']}</td>";
                        echo "<td>{$tweet['contenu']}</td>";
                        echo "</tr>";
                    }
                    ?>
        <div class="column3">
            <ul class="icone-liste1">
            <h3> 
            <form action="" method="get">
    </form>
    <form action="" method="get">
    <label for="search">Recherche :</label>
    <input type="text" name="search" id="search" autocomplete="off">
    <input type="submit" value="Rechercher">
    <?php

$elements = [
    'COUCOU double Monster !!',
    'Super excitée d avoir été acceptée à la conférence...',
    'Bonjour tout le monde! Quelqu un a des recommandat...',
    'Explorez l inconnu défiez les limites et laissez ...',
   
];

if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];

  
    echo '<h2>Résultats de la recherche pour : ' . htmlspecialchars($searchTerm) . '</h2>';
    echo '<ul>';
    foreach ($elements as $element) {
        if (stripos($element, $searchTerm) !== false) {
            echo '<li>' . $element . '</li>';
        }
    }
    echo '</ul>';
} else {
    
    echo '<h2>Tous les éléments :</h2>';
    echo '<ul>';
    foreach ($elements as $element) {
        echo '<li>' . $element . '</li>';
    }
    echo '</ul>';
}
?>
</form>


    </h3>
                
                <h5>Tendances : France</h5>
                <ul class="icone-liste2">
                    <li><i class="fab fa-twitter"></i> NIKE</li>
                    <li><i class="fab fa-twitter"></i> SHEIN</li>
                    <li><i class="fab fa-twitter"></i> Les APL </li>
                    <li><i class="fab fa-twitter"></i> #BMW</li>
              
                </ul>
                <h1> <?php foreach($users as $user) : ?>
        <form action="delete.php" method='POST'>
            <input type="hidden" name="form" value="supprimer">
            <input type="hidden" name="suppr" value="<?php echo $user['id']; ?>">
            <?php echo'<li>' . $user['nom'] . ' ' . $user['email'] . '</li>'; ?> 
            <button type="submit">Supprimer</button>
        </form>
    <?php endforeach; ?>
    <form action="supprimertweet.php" method="POST">
        <input type="hidden" name="form" value="ajout">
        </h1>
            </ul>
        </div>
    </div>
</body>
</html>