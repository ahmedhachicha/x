<?php 
    include 'connect.php';

    //init.php mnin hayji(// start Show in Profile)
    $sessionUser = '';
    if(isset($_SESSION['firstname']))
    {
        $sessionUser = $_SESSION['firstname'];
    }

    $sessionimg = '';
    if(isset($_SESSION['img']))
    {
        $sessionimg = $_SESSION['img'];
    }

    $sessionUserid = '';
    if(isset($_SESSION['uid']))
    {
        $sessionUserid = $_SESSION['uid'];
    }

    // if(isset($_SESSION['firstname']))
    // {
    //     $_SESSION['user'] = $_SESSION['firstname'];
    // }
    //end init.php mnin hayji(// start Show in Profile)
    $tpl = 'includes/templates/'; //Template Directory
    // $lang = 'includes/languages/';
    $func = 'includes/functions/';
    $css = 'layout/css/';
    $js = 'layout/js/';
    $img = 'layout/images/';

    //Include The Important Files
    include $func . 'function.php';
    // include $lang . 'english.php';
    // include $tpl . 'header.php';
    // include '1.php';

    if(isset($noNavbar)){
        include '1.php';
    } 
    elseif(isset($Navbar)){
        include '2.php';
    }
    elseif(!isset($noNavbar)){
        include $tpl . 'header.php';
    }
?>