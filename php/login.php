<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWITTER </title>
    <link rel="stylesheet" href="home.css">

</head>
<body>
   

    <div class="container">
        <img src="./Nouveau dossier/twitter.png" alt="Description de l'image" class="image">
        <div>
            <h1>ÇA SE PASSE MAINTENANT</h1>
            <div>
            <h2>INSCRIVEZ-VOUS.</h2>
          
            
        </div>
        <form action="ajout-User.php" method="POST">
            <input type="hidden" name="form" value="ajout-User.php">
            
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom"
          
            label for="email">Email</label>
            <input type="text" name="email" id="email"
          
            label for="password">mot de passe</label>
            <input type="password" name="password" id="password">
          
            <a href="ajout-User.php"><button type="submit">Envoyer</button></a>
    
          
    </div>
</body>
</html>
