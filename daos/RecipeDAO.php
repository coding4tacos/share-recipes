<?php

/*
DAO = Data Access Object
 * 
 * Contiene la inteligencia necesaria para comunicarse con la base de datos.
 * 
 * Implementaresmos el paradigma CRUD = Create Read Update Delete
 */


class RecipeDAO {
   
    private $con;
    
    public function __construct(){
        $this->con=DB::getDbCon();
    }
    
    public function create($recipe) {
        $sql="insert into recipes ( name, description, ingredients, instructions, img) values ( '{$recipe->getName()}', '{$recipe->getDescription()}', '{$recipe->getIngredients()}', '{$recipe->getInstructions()}', '{$recipe->getImg()["name"]}'}";
       // var_dump($sql);
        // var_dump($recipe->getImg()['name']);
        $this->con->query($sql);
    }
    
    public function read($id){
        $recipe=null;
        $sql="select * from recipes where id=$id";
        $rs=$this->con->query($sql);
        $r=$rs->fetch_assoc();
        if($r!==null){
            $recipe=new Recipe($r["id"],$r["name"],$r["description"],$r["ingredients"],$r["userId"],$r["instructions"], $r["img"]);
        }
        $rs->free();
        return $recipe;
    }
    
    public function readeFeatured(){
        $recipe=null;
        $sql="select * from recipes order by time_inserted desc limit 0,3";
        $rs=$this->con->query($sql);
        $recipes=[];
        while($r=$rs->fetch_assoc()){
            $recipes[]=new Recipe($r["id"],$r["name"],$r["description"],$r["ingredients"],$r["userId"],$r["instructions"], $r["img"]);
            
        }
        $rs->free();
        return $recipes;
    }
    
    
}
