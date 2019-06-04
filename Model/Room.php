<?php
namespace Model;
include 'ModelBase.php';

class Room extends ModelBase
{

    private $description;

    private $floor;

    public function __construct()
    {}

    /**
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     *
     * @return Floor
     */
    public function getFloor(): Floor
    {
        return $this->floor;
    }

    /**
     *
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     *
     * @param Floor $floor
     */
    public function setFloor(Floor $floor)
    {
        $this->floor = $floor;
    }
}

