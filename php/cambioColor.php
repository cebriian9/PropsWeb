<?php

setcookie('color','blanco', time()*9999);

if (!strcmp($_REQUEST['color'], "blanco")) {
    $_COOKIE['color']=='negro';
} else {
    $_COOKIE['color']=='blanco';
}


header("Location:".$_SERVER['HTTP_REFERER']);