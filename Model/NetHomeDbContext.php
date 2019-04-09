<?php
namespace Model;

class NetHomeDbContext extends DbContext
{

    public function __construct()
    {
        parent::__construct(new MySQLiConnection("lnxsrv", "housemanagement", "housemanager", "Mittern8"));
    }
}
