<?php
namespace Model;

include 'IRepository.php';

class Users implements IRepository
{

    public static $birthdateColumnName = "Birthdate";

    public static $emailColumnName = "EMail";

    public static $firstnameColumnName = "FirstName";

    public static $idColumnName = "ID";

    public static $isadminColumnName = "IsAdmin";

    public static $lastnameColumnName = "LastName";

    public static $moneyColumnName = "Money";

    public static $passwordColumnName = "password";

    public static $usernameColumnName = "username";

    public static $workplaceColumnName = "Workplace";

    private $mySQLiConnection;

    public function __construct(MySQLiConnection $mySQLiConnection)
    {
        $this->mySQLiConnection = $mySQLiConnection;
    }

    public function GetAll()
    {
        $query = "Select * from users;";
        $queryResult = $this->mySQLiConnection->getConnection()->query($query);
        $returnValue = array();

        foreach ($queryResult as $userRow) {
            $user = new User();

            $birthdate = $userRow[Users::$birthdateColumnName] == null ? null : new \DateTime($userRow[Users::$birthdateColumnName]);
            $user->setBirthdate($birthdate);

            $email = $userRow[Users::$emailColumnName] == null ? "" : $userRow[Users::$emailColumnName];
            $user->setEmail($email);

            $firstname = $userRow[Users::$firstnameColumnName] == null ? "" : $userRow[Users::$firstnameColumnName];
            $user->setFirstname($firstname);

            $id = $userRow[Users::$idColumnName] == null ? - 1 : $userRow[Users::$idColumnName];
            $user->setId($id);

            $isadmin = $userRow[Users::$isadminColumnName] == null ? - 1 : $userRow[Users::$isadminColumnName];
            $user->setIsAdmin($isadmin);

            $lastname = $userRow[Users::$lastnameColumnName] == null ? "" : $userRow[Users::$lastnameColumnName];
            $user->setLastname($lastname);

            $money = $userRow[Users::$moneyColumnName] == null ? 0 : $userRow[Users::$moneyColumnName];
            $user->setMoney($money);

            $password = $userRow[Users::$passwordColumnName] == null ? "" : $userRow[Users::$passwordColumnName];
            $user->setPassword($password);

            // $user->setRoom($userRow["RoomID"]); // Room aus DB lesen und in Objekt mappen

            $username = $userRow[Users::$usernameColumnName] == null ? "" : $userRow[Users::$usernameColumnName];
            $user->setUsername($username);

            $workplace = $userRow[Users::$workplaceColumnName] == null ? "" : $userRow[Users::$workplaceColumnName];
            $user->setWorkplace($workplace);

            $returnValue[] = $user;
        }

        return $returnValue;
    }

    public function Get($model)
    {}

    public function GetByID(int $id)
    {}
    
    public function Add($model)
    {}
    
    public function Remove($model)
    {}

}
