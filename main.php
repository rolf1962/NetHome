<?php
use Model\DbContext;
use Model\MySQLiConnection;

include 'Model/Users.php';
include 'Model/User.php';
include 'Model/DbContext.php';
include 'Model/MySQLiConnection.php';

$dbContext = new DbContext(new MySQLiConnection("lnxsrv", "housemanagement", "housemanager", "Mittern81!"));
$userlist = $dbContext->getUsers()->GetAll();

foreach ($userlist as $user)
{
    echo $user->getLastname() . "<br>";
    echo $user->getFirstname() . "<br>";;
    echo $user->getBirthdate()->format("d.m.Y") . "<br>";
}
