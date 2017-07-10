<?php 
echo session_status();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="formulaireInscription.php">Inscription</a>
    <form method="POST" action="../WorkPHP/process-login.php">
        <input type="text" name="login" placeholder="Pseudo"/>
        <input type="password" name="mdp" placeholder="Mots de Passe"/>
        <button name="submit">Envoyer</button>
    </form>
</body>
</html>

