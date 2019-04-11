<?php
namespace Model;

class User
{

    private $id;

    private $firstname = "";

    private $lastname = "";

    private $birthdate;

    private $email;

    private $isAdmin;

    private $money;

    private $workplace;

    private $password;

    private $username;

    private $room;

    public function __construct()
    {}

    /**
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     *
     * @return \DateTime
     */
    public function getBirthdate(): \DateTime
    {
        return $this->birthdate;
    }

    /**
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     *
     * @return bool
     */
    public function getIsAdmin(): bool
    {
        return $this->isAdmin;
    }

    /**
     *
     * @return double
     */
    public function getMoney(): float
    {
        return $this->money;
    }

    /**
     *
     * @return string
     */
    public function getWorkplace(): string
    {
        return $this->workplace;
    }

    /**
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     *
     * @return Room
     */
    public function getRoom(): Room
    {
        return $this->room;
    }

    /**
     *
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     *
     * @param string $firstname
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     *
     * @param string $lastname
     */
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     *
     * @param \DateTime $birthdate
     */
    public function setBirthdate(\DateTime $birthdate)
    {
        $this->birthdate = $birthdate;
    }

    /**
     *
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     *
     * @param bool $isAdmin
     */
    public function setIsAdmin(bool $isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

    /**
     *
     * @param double $money
     */
    public function setMoney(float $money)
    {
        $this->money = $money;
    }

    /**
     *
     * @param string $workplace
     */
    public function setWorkplace(string $workplace)
    {
        $this->workplace = $workplace;
    }

    /**
     *
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     *
     * @param string $username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     *
     * @param Room $room
     */
    public function setRoom(Room $room)
    {
        $this->room = $room;
    }
}
?>