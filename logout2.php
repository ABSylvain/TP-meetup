<?php
include_once 'nav.php';
if(isset($_POST['deco'])){
        session_destroy();
        header("refresh:03;url=index.php");
        echo 'Vous êtes bien déconnecté';
        
}