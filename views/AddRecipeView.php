<?php
    $user=$_SESSION["user"];
?>
<?php include 'Header.php'; ?>
     <main class="add-recipe">
          <div class="container">
              <div class="section-header">
                    <h3>Thanks for contributing your recipe! We can't wait to try it.</h3>
                </div>
               <div class="recipe-form-wrap">
                    <form class="add-recipe-form" id="add-recipe-form" action="SaveRecipe.php" method="POST" enctype="multipart/form-data">
                         <div class="form-field">
                             <div class="warning-message"></div>
                             <label for="name">Name</label>
                             <input type="text" name="name" id="name">
                         </div>
                            <div class="form-field">
                             <label for="description">Description</label>
                             <textarea for="description" name="description" id="description"></textarea>
                         </div>
                         <div class="form-field">
                             <label for="ingredients">Ingredients</label>
                             <textarea for="ingredients" name="ingredients" id="ingredients"></textarea>
                         </div>
                      
                         <div class="form-field">
                             <label for="instructions">Instructions</label>
                             <textarea for="instructions" name="instructions" id="instructions"></textarea>
                         </div>
                       <div class="form-field">
                            <label for="image">Recipe image:</label>
                            <input type="file" name="image" id="image">
                       </div>
                       <div class="form-field">
                           <input type="submit" value="Submit" class="btn btn-large">
                       </div>
                    </form>
               </div>
          </div>
     </main>

<?php include 'Footer.php'; ?>

