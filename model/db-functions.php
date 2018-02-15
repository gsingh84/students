<?php

function connect()
{
    try {
        //instance a database object
        $dbh = new PDO(DB_DSN, DB_USERNAME,
            DB_PASSWORD);
        echo "connected to database!";
        return $dbh;
    }
    catch (PDOException $e) {
        echo $e->getMessage();
        return;
    }
}