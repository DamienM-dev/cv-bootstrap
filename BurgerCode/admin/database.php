<?php

 class Database // permet de retourner une connection
  {
    $dbHost ="localhost";
    $dbNames ="burger_code";
    $dbUser = "root";
    $dbUserPasseword = "";

    $connection = null;


    function connect()
    {
        try {
            $connection = new PDO("mysql:host=" . $dbHost . ";dbname"= .$burger_code, $dbUser, $dbUserPasseword);
            }
            catch (PDOException $e)
            {
            die ($e-> getmessage());
            }
            return $connection
    }
    function disconnect()
    {
        $connection = null;
    }
 }
?>