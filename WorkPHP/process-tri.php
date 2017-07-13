<?php 
include_once '../model/Data.php';
include_once '../model/Evenement.php';


if(isset($_POST['loisir']) && htmlspecialchars($_POST['loisir'])){
    $categori = $_POST['loisir'];
}elseif(isset($_POST['sport']) && htmlspecialchars($_POST['sport'])){
    $categori = $_POST['sport'];
}elseif(isset($_POST['professionnel']) && htmlspecialchars($_POST['professionnel'])){
    $categori = $_POST['professionnel'];
}elseif(isset($_POST['travail']) && htmlspecialchars($_POST['travail'])){
    $categori = $_POST['travail'];
}else{
    echo 'Fuck Off';
}

$data = new Data();

$events = $data->eventtrier($categori);


foreach($events as $event){
    $event->affichage();
    if(isset($_SESSION['user']) && $_SESSION['user']->GetLogin() == $event->getCreator()){
                echo '<form method="POST" action="process-delet.php">
                        <input type="hidden" name="nom" value="'.$event->getNom().'"/>
                        <button name="ji">J\'i participe</button>
                        <button name="del">Delete</button>
                      </form>';
            }
}
foreach($events as $event){
echo '<form method="POST" action="process-addpart.php">
                        <input type="hidden" name="nom" value="'.$event->getNom().'">
                        <button>J\'i part</button>
                    </form>';
}
?>