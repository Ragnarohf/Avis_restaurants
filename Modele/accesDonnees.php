<?php

function getConnexion()
{
    $chaineCnx = 'mysql:host=localhost;dbname=restaurant';
    return new PDO($chaineCnx, 'root', 'Pa$$w0rd',
        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
}