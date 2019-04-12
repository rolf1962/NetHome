<?php
namespace Model;

interface IRepository
{

    public function GetAll();

    public function Get($model);
    
    public function GetByID(int $id);

    public function Add($model);

    public function Remove($model);
}
