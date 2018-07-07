<?php

class ConnectDB
{
    public function connect() {
        return new PDO("mysql:host=localhost;dbname=18php02_shop", "root" , "root");
    }
}

?>
