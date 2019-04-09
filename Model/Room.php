<?php
namespace Model;

class Room
{

    private $id;

    private $description;

    private $floor;

    public function __construct()
    {}

    /**
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *
     * @return Floor
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     *
     * @param Floor $floor
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    }
}

