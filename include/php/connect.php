<?php
    require_once 'DbObjectClass.php';
    $host = 'localhost';
    $userName = 'root';
    $password = '';
    $dbName = 'unitedindia';
    $db = new DbObject($host, $userName, $password, $dbName);
    $db->connect();