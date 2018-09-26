<?php

class recipeModel extends genericModel
{
    public function __construct($db)
    {
        parent:: __construct($db);
    }


    public function getAllRecipes()
    {
        return $this->selectAll("recipe");
    }

}