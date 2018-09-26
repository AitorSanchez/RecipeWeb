<?php

class recipeController extends genericController
{
    public function __construct($db)
    {
        parent:: __construct($db);
    }


    public function index()
    {
        $model = new recipeModel($this);
        $recipes = $model->getAllRecipes();
        $this->template->set("recipes", $recipes);
        $this->template->render("recipes/list.php");
    }
}

