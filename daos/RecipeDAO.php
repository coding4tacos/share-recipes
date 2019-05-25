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
        $sql="insert into recipes ( name, description, ingredients, instructions, img) values ( '{$recipe->getName()}', '{$recipe->getDescription()}', '{$recipe->getIngredients()}', '{$recipe->getInstructions()}', '{$recipe->getImg()}')";
        
            // Create a template
            // $sql = $mysqli->prepare("INSERT INTO recipes ( name, description, ingredients, instructions, img ) VALUES ( ?, ?, ?, ?, ?)");
            // Createa prepared statement
        // $stmt = mysqli_stmt_init($this->con);
        // prepare the prepared statement
        // if(!mysqli_stmt_prepare($stmt, $sql)) {
        //      echo "SQL statement failed";
        // }
        
        
       //   $stmt->bind_param("ssssa", '{$recipe->getName()}', '{$recipe->getDescription()}', '{$recipe->getIngredients()}', '{$recipe->getInstructions()}', '{$recipe->getImg()}');
        // $stmt->execute();
        
        // https://www.youtube.com/watch?v=I4JYwRIjX6c
         
        
        
        
        $this->con->query($sql);
        $sql="select last_insert_id() as id";
        $rs=$this->con->query($sql);
        
        
       // $result = $stmt->get_result();  // instead of line above
        // $r = $rs->fetch_assoc();
         $r=$rs->fetch_assoc();
        $recipe->setId($r["id"]);
    }
    
    public function read($id){
        $recipe=null;
        $sql="select * from recipes where id=$id";
        $rs=$this->con->query($sql);
        $r=$rs->fetch_assoc();
        if($r!==null){
            $recipe=new Recipe($r["id"],$r["name"],$r["description"],$r["ingredients"], $r["instructions"], $r["img"]);
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
    
    public function update($recipe){
        $sql="update recipes set name='{$recipe->getName()}',description='{$recipe->getDescription()}',ingredients='{$recipe->getIngredients()}', instructions='{$recipe->getInstructions()}', img='{$recipe->getImg()}' where id={$recipe->getId()}";
        $this->con->query($sql);
           
    }
    
    
}
