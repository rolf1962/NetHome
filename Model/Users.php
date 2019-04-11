<?php
namespace Model;

include 'IRepository.php';

class Users implements IRepository
{

    private $mySQLiConnection;

    public function __construct(MySQLiConnection $mySQLiConnection)
    {
        $this->mySQLiConnection = $mySQLiConnection;
    }

    public function Add($model)
    {}

    public function GetAll()
    {
        $query = "Select * from users;";
        $queryResult = $this->mySQLiConnection->getConnection()->query($query);
        $returnValue = array();

        foreach ($queryResult as $userRow) {
            $user = new User();

            $birthdate = $userRow["Birthdate"] == null ? null : new \DateTime($userRow["Birthdate"]);
            $user->setBirthdate($birthdate);
            
            $email = $userRow["EMail"] == null ? "" : $userRow["EMail"];
            $user->setEmail($email);
            
            $user->setFirstname($userRow["FirstName"]);
            
            $user->setId($userRow["ID"]);
            
            $user->setIsAdmin($userRow["IsAdmin"]);
            
            $user->setLastname($userRow["LastName"]);
            
            $money = $userRow["Money"] == null ? 0 : $userRow["Money"];
            $user->setMoney($money);
            
            $user->setPassword($userRow["password"]);
            
            // $user->setRoom($userRow["RoomID"]); // Room aus DB lesen und in Objekt mappen
            
            $user->setUsername($userRow["username"]);
            
            $user->setWorkplace($userRow["Workplace"]);

            $returnValue[] = $user;
        }

        return $returnValue;
    }

    public function Get($model)
    {}

    public function Remove($model)
    {}
}

