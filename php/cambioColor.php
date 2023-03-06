<?php

setcookie('color',$_REQUEST['color'], time()+ 60 * 30,"/");



var_dump($_COOKIE);

header("Location:".$_SERVER['HTTP_REFERER']);