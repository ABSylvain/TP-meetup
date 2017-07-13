<?php 
include_once 'model/Data.php';
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
            <?php 
            if($_SESSION != false){
                $compte = $_SESSION['user'];
                echo '<h2>'.$compte->GetLogin().'</h2>';
            }
             ?>
            <p>Ici vous trouverez plein de truc à faire blablalbla ...</p>
        </section>
        <form method="POST" action="WorkPHP/process-tri.php">
            <button name="loisir" value="loisir">Loisir</button>
            <button name="sport" value="sport">Sport</button>
            <button name="professionnel" value="professionnel">Pro</button>
            <button name="travail" value="travail">Taff</button>
        </form>
        <form method="POST" action="WorkPHP/aff-event.php">
            <button>Tout les Event</button>
        </form>
        <?php 
        if($_SESSION['user'] != false){
            echo '<form method="POST" action="WorkPHP/process-deco.php">
                    <button>Deco</button>
                  </form>';
            echo '<form method="POST" action="WorkPHP/process-vosevent.php">
                    <button>Vos Event</button>
                  </form>';
            echo '<form method="POST" action="partHtml/formulaireEvent.php">
                    <button>Creer event</button>
                  </form>';
        }else{
            echo '<form method="POST" action = "partHtml/formulaireLogin.php">
                    <button>Connexion</button>
                  </form>';
        }
        ?>
    </body>
</html>


