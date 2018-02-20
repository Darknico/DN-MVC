<?php

/* This is the mysql driver for the application        *
 * Note that this driver uses the mysqli extension    */

class mysql_db extends db
{
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $dbname;
    private $dbport;
    private $dbsocket;

    private $connection;
    private $query;
    private $result;

    public function __construct($host, $user, $pass, $database, $port, $socket)
    {
        $this->dbhost = $host;
        $this->dbuser = $user;
        $this->dbpass = $pass;
        $this->dbname = $database;
        $this->dbport = $port;
        $this->dbsocket = $socket;
    }

    public function connect()
    {

        $host = $this->dbhost;
        $user = $this->dbuser;
        $pass = $this->dbpass;
        $database = $this->dbname;

        $port = $this->dbport;
        $socket = $this->dbsocket;

        $this->connection = new mysqli
            (
            $host, $user, $pass, $database, $port, $socket
        );

        return true;

    }

    public function disconnect()
    {
        $this->connection->close();
        return true;
    }

    public function prepare($query)
    {
        $this->query = $query;
        return true;
    }

    public function query()
    {
        if (isset($this->query)) {
            $this->result = $this->connection->query($this->query);

            return true;
        }

        return false;
    }

    public function free()
    {
        if (isset($this->result)) {
            return $this->result->free();
        }

        return false;
    }

    public function numrows()
    {
        if (isset($this->result)) {
            return $this->result->num_rows;
        }

        return false;
    }

    public function fetch($type = 'object')
    {

        if (isset($this->result)) {

            switch ($type) {

                case 'array':
                    $row = $this->result->fetch_assoc();
                    break;
                case 'array_num':
                    $row = $this->result->fetch_array(MYSQLI_NUM);
                    break;
                case 'array_assoc':
                    $row = $this->result->fetch_array(MYSQLI_ASSOC);
                    break;
                case 'array_both':
                    $row = $this->result->fetch_array(MYSQLI_BOTH);
                    break;
                case 'object':
                    $row = $this->result->fetch_object();
                    break;
                default:
                    $row = $this->result->fetch_object();
            }

            return $row;

        }

        return false;

    }
}
