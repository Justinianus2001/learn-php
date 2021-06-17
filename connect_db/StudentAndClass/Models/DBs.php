<?php
class DB
{

    static private $conn = null;
    static public function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        // Create connection
        $conn = DB::$conn;
        if (!$conn) {
            $conn = new mysqli($servername, $username, $password, "tin_chi");
        }
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    static public function reset_connect()
    {
        // DB::$conn = null;
    }
}