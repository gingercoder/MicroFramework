<?php

/*
 * CORE SYSTEM LAUNCH FILE
 * Primary Home Page
 */
if($_SESSION['username'] !=""){
    require_once('web/core/help/index.php');
}
else{
    require_once('web/core/login/index.php');
}
?>
