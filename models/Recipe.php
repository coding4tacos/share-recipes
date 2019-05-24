<?php

/*
 Modelo o Entidad o DTO =Data Transfer Object
 */

/**
 * Description of Recipe
 *
 * @author taylo
 */
class Recipe {
    
    private $id;
    private $name;
    private $description;
    private $ingredients;
    private $userEmail;
    private $instructions;
    private $img;
    
    
    public function __construct($id,$name,$description,$ingredients,$userEmail,$instructions, $img=""){
        $this->id=$id;
        $this->name=$name;
        $this->description=$description;
        $this->ingredients=$ingredients;
        $this->userEmail=$userEmail;
        $this->instructions=$instructions;
        $this->img=$img;
    }
    
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    function getIngredients() {
        return $this->ingredients;
    }

    function userEmail() {
        return $this->userEmail;
    }

    function getInstructions() {
        return $this->instructions;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setIngredients($ingredients) {
        $this->ingredients = $ingredients;
    }

    function setInstructions($instructions) {
        $this->instructions = $instructions;
    }

    function getDescription() {
        return $this->description;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function getImg() {
        return $this->img;
    }

    function setImg($img) {
        $this->img = $img;
    }



    
}
