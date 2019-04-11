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
    public function getId(): int
    {
        return $this->id;
    }

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
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
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

