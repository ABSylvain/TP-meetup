<?php 
include_once '../model/Evenement.php';
include_once '../model/Compte.php';
include_once '../model/Data.php';
session_start();
$data = new Data();
$compte = [];
if($_SESSION['user'] == true){
    $compte = $_SESSION['user'];
}

$event = $data->loadEvent($compte);
$event->affichage();
if(isset($_SESSION['user']) && $_SESSION['user']->GetLogin() == $event->getCreator()){
                echo '<form method="POST" action="process-delet.php">
                        <input type="hidden" name="nom" value="'.$event->getNom().'"/>
                        <button name="ji">J\'i participe</button>
                        <button name="del">Delete</button>
                      </form>';
            }
?>