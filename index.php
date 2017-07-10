<?php 
include_once 'model/Compte.php';
session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
    <body>
        <section>
            <h1>Bienvenue</h1>
            <p>Ici vous trouverez plein de truc à faire blablalbla ...</p>
        </section>
        <form method="POST" action="WorkPHP/process-deco.php">
            <button name="deco">Deco</button>
        </form>
    </body>
</html>


