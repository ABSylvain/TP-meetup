<?php 
include_once '../model/Data.php';
include_once '../model/Evenement.php';

$data = new Data();

$nom = htmlspecialchars($_POST['nom']);
if(isset($_POST['ji'])){
    $data->ajouparticip($nom);
    echo 'Vous avez été inscrit';
}

?>