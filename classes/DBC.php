<?php

class DBC
{ 
    const SERVER_IP = "localhost";
    const USER = "root";
    const PASSWORD = "student";
    const DATABASE = "zvirata";
    const PORT = 3306;

    private static $instance = null;
    private $connection;

    private function __construct()
    {
    }

    public static function getConnection()
    {
        if (!self::$instance) {
            self::$instance = new DBC();
            self::$instance->connect();
        }

        return self::$instance->connection;
    }

    private function connect()
    {
        $this->connection = mysqli_connect(
            self::SERVER_IP,
            self::USER,
            self::PASSWORD,
            self::DATABASE,
            self::PORT
        );

        if (!$this->connection) {
            die('Nelze se připojit k databázi: ' . mysqli_connect_error());
        }
    }

    public static function closeConnection()
    {
        if (self::$instance && self::$instance->connection) {
            mysqli_close(self::$instance->connection);
        }
    }
}