<?php

require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'supprimer') {
    $tweet_id = intval($_POST['suppr']);
    $requete = $database->prepare('DELETE FROM tweet WHERE id = :id');
    $requete->execute(['id' => $tweet_id]);
}

?>
