<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=scrum_wpd;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>