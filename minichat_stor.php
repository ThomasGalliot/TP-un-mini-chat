<?php  
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
    }

    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    
    $req = $bdd->prepare('INSERT INTO minichat.messages (pseudo, message, date) VALUES(?, ?, NOW())');

    $req->execute(array($_POST['pseudo'], $_POST['message']));

    setcookie("pseudo", $_POST['pseudo']);

    header('Location: minichat.php');
?>