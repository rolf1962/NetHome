<?php
namespace Model;

class DbContext
{

    private $mySQLiConnection;

    private $users;

    public function __construct(MySQLiConnection $mySQLiConnection)
    {
        $this->mySQLiConnection = $mySQLiConnection;

        $this->users = new Users($this->mySQLiConnection);
    }

    /**
     *
     * @return \Model\Users
     */
    public function getUsers()
    {
        return $this->users;
    }
}

