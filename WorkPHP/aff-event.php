<?php
include_once '../model/Compte.php';
include_once '../model/Evenement.php';
include_once '../model/Data.php';
session_start();
$data = new Data();

$events = $data->loadAllEvent();

foreach($events as $event){
    $event->affichage();
    if(isset($_SESSION['user']) && $_SESSION['user']->GetLogin() == $event->getCreator()){
                echo '<form method="POST" action="process-delet.php">
                        <input type="hidden" name="nom" value="'.$event->getNom().'">
                        <button>Delete</button>
                    </form>';
            }
}
echo '<form method="POST" action="process-addpart.php">
                        <input type="hidden" name="nom" value="'.$event->getNom().'">
                        <button>Delete</button>
                    </form>';
?>