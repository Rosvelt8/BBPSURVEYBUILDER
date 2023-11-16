<?php
session_start();
$_SESSION = [];
session_destroy();
header('location: ../view/pages/index.php');