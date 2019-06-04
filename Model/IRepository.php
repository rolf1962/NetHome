<?php
namespace Model;

interface IRepository
{

    public function GetAll();

    public function Get($searchModel);
    
    public function GetByID(int $id) : ModelBase;

    public function Add(ModelBase $model);

    public function Remove(ModelBase $model);
}
