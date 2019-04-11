<?php
namespace Model;

class Floor
{

    private $id;

    private $description;

    public function __construct()
    {}

    /**
     *
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

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
     * @param mixed $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
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
