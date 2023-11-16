<?php

session_start();
if($_SESSION['mode']== 'L'){
    $_SESSION['mode']= 'D';
}
if($_SESSION['mode']== 'D'){
    $_SESSION['mode']= 'L';
}

header('location: ../view/pages/settings.page.php');
