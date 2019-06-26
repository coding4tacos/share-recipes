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
    
    public function create($recipe,$user) {
        var_dump($user->getUserId());
        $con = $this->con;
        // SOMETHING MUST CHANGE HERE I THINK
        // prepare and bind
        $stmt = $con->prepare("INSERT INTO recipes (userid, name, description, ingredients, instructions, img) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssss",$userId, $name, $desc, $ingredients, $instructions, $img);

        
        // set params & execute
        $userId = $user->getUserId();
        $name = $recipe->getName();
        $desc = $recipe->getDescription();
        $ingredients = $recipe->getIngredients();
        $instructions = $recipe->getInstructions();
        $img = $recipe->getImg();
        
        $stmt->execute();
    
        $sql="SELECT last_insert_id() AS id";
        $rs=$this->con->query($sql);
       
        $r=$rs->fetch_assoc();
        $recipe->setId($r["id"]);
    }
    
    public function read($id){
        $con = $this->con;
        $recipe = null;
        
        // prepare and bind
        $stmt = $con->prepare("SELECT * FROM recipes WHERE id=?");
        $stmt->bind_param("i", $id);
        
        $stmt->execute();
        $rs=$stmt->get_result();
        if($r=$rs->fetch_assoc()){
            $recipe=new Recipe($r["id"],$r["name"],$r["description"],$r["ingredients"],$r["userId"],$r["instructions"], $r["img"]);
        }
        $rs->free();
        return $recipe;
    }
    
    public function readAll(){
        $con = $this->con; 
        $recipe=null;
        
        $sql="select * from recipes order by time_inserted desc";
        
        $rs=$con->query($sql);
        $recipes=[];
        while($r=$rs->fetch_assoc()){
            $recipes[]=new Recipe($r["id"],$r["name"],$r["description"],$r["ingredients"],$r["userId"],$r["instructions"], $r["img"]);
        }
        $rs->free();
        return $recipes;
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
    
    public function readUserRecipes() {
        $con = $this->con;
        $recipes = null;
        
        // prepare and bind
        $stmt=$con->prepare("SELECT * FROM recipes WHERE username=?");
        $stmt->bind_param("s", $username);
        $username = $_SESSION["user"]->getUsername();
        
        echo $username;
        
        $stmt->execute();
        $recipes=[];

       /* while(count($r) > 0){
            $recipes[]=new Recipe($r["id"],$r["name"],$r["description"],$r["ingredients"],$r["userId"],$r["instructions"], $r["img"]);
        }
        return $recipes; */
    }
    
    public function update($recipe){
        $con = $this->con;
        
        // prepare and bind
        $stmt = $con->prepare("UPDATE recipes SET name=?, description=?, ingredients=?, instructions=?, img=? where id=?");
        $stmt->bind_param("sssssi", $name, $desc, $ingredients, $instructions, $img, $id);

        // set params & execute
        $name = $recipe->getName();
        $desc = $recipe->getDescription();
        $ingredients = $recipe->getIngredients();
        $instructions = $recipe->getInstructions();
        $img = $recipe->getImg();
        $id = $recipe->getId();
        
        $stmt->execute();      
    }  
    
    public function delete($id) {
        $con = $this->con;
        $stmt = $con->prepare("DELETE FROM recipes WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
