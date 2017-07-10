<?php
session_start();
session_destroy();
header('Location: ../partHtml/formulaireLogin.php');
?>