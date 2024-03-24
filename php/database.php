<?php
try{
$database = new PDO('mysql:host=localhost;dbname=twitter','root','');
} catch(PDOxception $e){
    die('site indisponible');
}
$requete =$database->prepare('SELECT * FROM user'
);
$requete->execute();
$users = $requete->fetchAll(PDO::FETCH_ASSOC);

$requete =$database->prepare('SELECT * FROM tweet INNER JOIN user ON tweet.user_id = user.id'
);
$requete->execute();
$tweets = $requete->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user ) {
    echo $user ['nom'];
}


foreach ($tweets as $tweet ) {
    echo $tweet['nom'];
    echo $tweet['contenu'];
    echo $tweet['time'];
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'ajout'){

if($_POST['nom'] != '' && $_POST['email'] !=''){
$nouvelUser= [
    'nom' => $_POST['nom'],
    'email' => $_POST['email'],
    'password' => $_POST['password']
    
];


$request = $database->prepare("INSERT INTO user (nom,email,password) VALUES (:nom ,:email, :password)");

if   ($request->execute($nouvelUser)){
echo 'User bien ajouté ' ;
}else{
    echo 'Erreurlors de l ajout';
} 

}else{
    echo "formulaire imcomplet";
}
}