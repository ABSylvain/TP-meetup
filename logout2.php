<?php

session_start();


if(isset($_POST['deco'])){
        session_destroy();
        echo 'Vous êtes bien déconnecté';
}