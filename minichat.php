<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <style>
        form
        {
            text-align:center;
        }
    </style>
    <body>
        <form action="minichat_stor.php" method="post">
            <p>
                <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="<?php if(isset($_COOKIE['pseudo'])) echo $_COOKIE['pseudo'];?>"" required /><br />
                <label for="message">Message</label> :  <input type="text" name="message" id="message" required /><br />
                <input type="submit" value="Envoyer" />
            </p>
        </form>
        <?php
            include 'minichat_post.php';
        ?>
    </body>
</html>