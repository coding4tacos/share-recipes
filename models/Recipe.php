//*<?php

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
    private $userId;
    private $instructions;
    private $img;
    
    
    public function __construct($id,$name,$description,$ingredients,$userId,$instructions, $img){
        $this->id=$id;
        $this->name=$name;
        $this->description=$description;
        $this->ingredients=$ingredients;
        $this->userId=$userId;
        $this->instructions=$instructions;
        /* add the images */ 
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

    function getUserId() {
        return $this->userId;
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

    function setUserId($userId) {
        $this->userId = $userId;
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
