<?php

try
{
    $DB = new PDO('mysql:host=127.0.0.1;dbname=BBPSURVEYBUILDER', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
