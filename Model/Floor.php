<?php
namespace Model;
include 'ModelBase.php';

class Floor extends ModelBase
{

    private $description;

    public function __construct()
    {}

    /**
     *
     * @return mixed
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     *
     * @param mixed $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
}
