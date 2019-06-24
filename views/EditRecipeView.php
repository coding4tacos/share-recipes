<?php
    session_start();
    if(isset($_SESSION["user"])){ 
        $user=$_SESSION["user"];
    }
    
    if($data["recipes"]) {
    $recipe = $data["recipes"];
};
?>

<?php include 'Header.php'; ?>
     <main class="add-recipe">
          <div class="container edit-recipe">
              <div class="section-header">
                    <h3 class="pad-bottom">Edit Recipe</h3>
                </div>
               <div class="recipe-form-wrap">
                    <form class="add-recipe-form" id="add-recipe-form" action="SaveEdit.php" method="POST" enctype="multipart/form-data">
                        <?php if(isset($_SESSION['user'])){
                            if($_SESSION['user']->getUserId() == $recipe->getUserId()) { ?>
                                <p class="text-right"><a class="btn btn-danger" onclick="return confirm('Delete recipe?')" href="DeleteRecipe.php?id=<?php echo $recipe->getId(); ?>">delete recipe</a></p>
                        <?php }} ?>
                        <input type="hidden" name="id" value="<?php echo $recipe->getId(); ?>" />
                         <div class="form-field">
                             <div class="warning-message"></div>
                             <label for="name">Name</label>
                             <input type="text" name="name" id="name" value="<?php echo $recipe->getName(); ?>">
                         </div>
                            <div class="form-field">
                             <label for="description">Description</label>
                             <textarea for="description" name="description" id="description"><?php echo $recipe->getDescription(); ?></textarea>
                         </div>
                         <div class="form-field">
                             <label for="ingredients">Ingredients</label>
                             <textarea for="ingredients" name="ingredients" id="ingredients"><?php echo $recipe->getIngredients(); ?></textarea>
                         </div>
                      
                         <div class="form-field">
                             <label for="instructions">Instructions</label>
                             <textarea for="instructions" name="instructions" id="instructions"><?php echo $recipe->getInstructions(); ?></textarea>
                         </div>
                       <div class="form-field">
                            <label for="image">Change Image?</label>
                            <input type="file" name="image" id="image">
                       </div>
                        <div class="edit-recipe-image"> 
                            <label>Current Image:</label>
                            <img class="featured-recipe-img" src="./img/<?php echo $recipe->getImg(); ?>" alt="<?php echo $recipe->getName(); ?>">
                        </div>
                       <div class="form-field">
                           <input type="submit" value="Submit" class="btn btn-large">
                           <a href="./" class="btn btn-large btn-danger">Cancel</a>
                       </div>
                    </form>
               </div>
          </div>
     </main>

<?php include 'Footer.php'; ?>




