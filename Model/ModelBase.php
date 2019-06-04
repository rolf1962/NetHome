<?php
namespace Model;

abstract class ModelBase
{

    private $id;

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
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
}

