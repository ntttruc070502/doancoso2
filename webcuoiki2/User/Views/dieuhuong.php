<?php
    $act = isset($_GET['act']) ? $_GET['act'] : "home";
    switch ($act) {
        case "home":
            require_once("about/home.php");
            break;
        case "becometotur";
            require_once("toturinf/becometutor.php");
            break;
        
        
    }
?>