<?php
namespace Model;

class MySQLiConnection
{

    private $hostname;

    private $dbname;

    private $username;

    private $password;

    private $connection;

    public function __construct(string $hostname, string $dbname, string $username, string $password)
    {
        $this->dbname = $dbname;
        $this->hostname = $hostname;
        $this->password = $password;
        $this->username = $username;

        $this->connection = new \mysqli($hostname, $username, $password, $dbname);
    }

    /**
     *
     * @return \mysqli
     */
    public function getConnection(): \mysqli
    {
        return $this->connection;
    }
}

