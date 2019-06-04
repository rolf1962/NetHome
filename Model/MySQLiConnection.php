<?php
namespace Model;

include 'Config.php';

class MySQLiConnection
{

    private $connection;

    public function __construct($hostname = DB_HOSTNAME, $dbname = DB_DBNAME, string $username = DB_USERNAME, string $password = DB_PASSWORD)
    {
        CheckAndStartSession();
        // CheckAndStartSession(basename(__FILE__), TRUE);

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

