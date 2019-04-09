<?php
namespace Model;

class DbContext
{

    private $mySQLiConnection;

    public function __construct($mySQLiConnection)
    {
        $this->mySQLiConnection = $mySQLiConnection;
    }

    /**
     *
     * @return mixed
     */
    public function getMySQLiConnection()
    {
        return $this->mySQLiConnection;
    }
}

