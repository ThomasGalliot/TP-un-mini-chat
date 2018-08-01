<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
    }

    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT pseudo, message, date FROM messages ORDER BY ID DESC LIMIT 0, 10');

    while ($donnees = $reponse->fetch()) {
        echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . " " . $donnees['date'] . '</p>';
    }

    $reponse->closeCursor();
?>