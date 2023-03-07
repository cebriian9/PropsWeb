<?php

setcookie('color',$_REQUEST['color'], time()+ 60 * 30,"/");

header("Location:".$_SERVER['HTTP_REFERER']);