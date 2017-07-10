<?php
session_start();
if(isset($_POST['deco'])){
        session_destroy();
        header("refresh:01;url=index.php");
        echo 'Vous êtes bien déconnecté';
        
}