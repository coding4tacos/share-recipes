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
        $con = $this->con;
        
        // prepare and bind
        $stmt = $con->prepare("INSERT INTO recipes (name, description, ingredients, instructions, img) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $desc, $ingredients, $instructions, $img);
        
        // set params & execute
        $name = $recipe->getName();
        $desc = $recipe->getDescription();
        $ingredients = $recipe->getIngredients();
        $instructions = $recipe->getInstructions();
        $img = $recipe->getImg();
        $stmt->execute();
        
        // $sql="insert into recipes ( name, description, ingredients, instructions, img) values ( '{$recipe->getName()}', '{$recipe->getDescription()}', '{$recipe->getIngredients()}', '{$recipe->getInstructions()}', '{$recipe->getImg()}')";
        // $this->con->query($sql);
        $sql="SELECT last_insert_id() AS id";
        $rs=$this->con->query($sql);
       
        $r=$rs->fetch_assoc();
        $recipe->setId($r["id"]);
    }
    
    public function read($id){
      /* // Could be incorrect
        $recipe = null;
        
        $con = $this->con;
        
        // prepare and bind
        $stmt = $con->prepare("SELECT * FROM recipes WHERE id=?");
        $stmt->bind_param("i", $id);
        // set parameters
        $id = $id;
        $r = $stmt->execute();
        if($r!==null){
            $recipe=new Recipe($r["id"],$r["name"],$r["description"],$r["ingredients"], $r["instructions"], $r["img"]);
        }
        $rs->free();
        return $recipe;
        */
    
        $recipe=null;
        $sql="select * from recipes where id=$id";
        $rs=$this->con->query($sql);
        $r=$rs->fetch_assoc();
        if($r!==null){
            $recipe=new Recipe($id,$r["name"],$r["description"],$r["ingredients"],$r["userId"], $r["instructions"], $r["img"]);
        }
        $rs->free();
        return $recipe;

    }
    
    public function readFeatured(){
        $con = $this->con; 
     
        $recipe=null;
        $sql="select * from recipes order by time_inserted desc limit 0,3";
        $rs=$con->query($sql);
        $recipes=[];
        while($r=$rs->fetch_assoc()){
            $recipes[]=new Recipe($r["id"],$r["name"],$r["description"],$r["ingredients"],$r["userId"],$r["instructions"], $r["img"]);
            
        }
        $rs->free();
        return $recipes;
    }
    
    public function update($recipe){
        /*
        $con = $this->con;
        
        // prepare and bind  // THIS MIGHT NOT BE RIGHT
        $stmt = $con->prepare("UPDATE recipes SET VALUES (?, ?, ?, ?, ?) where id=?");
        $stmt->bind_param("ssssssi", $name, $desc, $ingredients, $instructions, $img, $id);

        // set params & execute
        $name = $recipe->getName();
        $desc = $recipe->getDescription();
        $ingredients = $recipe->getIngredients();
        $instructions = $recipe->getInstructions();
        $img = $recipe->getImg();
        $id = $recipe->getId();
        $stmt->execute();
                
*/
        
        $sql="update recipes set name='{$recipe->getName()}',description='{$recipe->getDescription()}',ingredients='{$recipe->getIngredients()}', instructions='{$recipe->getInstructions()}', img='{$recipe->getImg()}' where id={$recipe->getId()}";
        $this->con->query($sql);
         
         
        }  
}
