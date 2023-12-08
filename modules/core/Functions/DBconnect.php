<?php

namespace Stage\Portfolio\Functions;

class DBconnect
{
    public function connection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "portfolio";

        $conn = new \mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error)
        {
            die("Whoops...: " . $conn->connect_error);
        }

        return $conn;
    }
}