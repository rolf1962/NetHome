<?php
namespace Model;

class MySQLiConnection
{

    private $hostname;

    private $dbname;

    private $username;

    private $password;

    private $connection;
    
    public function __construct($hostname, $dbname, $username, $password)
    {
        $this->dbname = $dbname;
        $this->hostname = $hostname;
        $this->password = $password;
        $this->username = $username;
        
        $this->connection=new \mysqli($hostname, $username, $password, $dbname);
    }

    /**
     * @return \mysqli
     */
    public function getConnection()
    {
        return $this->connection;
    }
}

