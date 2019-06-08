<?php
if($data["recipes"]) {
    $recipe = $data["recipes"];
};
?>
<?php include 'Header.php'; ?>
    <main>
        <div class="container">
            <div class="section-header">
                <h2 class="text-center"><?php echo $recipe->getName(); ?></h2>
                <p class="recipe-description text-center"><?php echo $recipe->getDescription(); ?></p>
            </div>
            <div class="flex single-recipe">
                <div class="recipe-image"> 
                    <img class="featured-recipe-img" src="./img/<?php echo $recipe->getImg(); ?>" alt="<?php echo $recipe->getName(); ?>">
                </div>
                <div class="recipe-info">
                    <h3>Ingredients:</h3>
                    <p class=""><?php echo $recipe->getIngredients(); ?></p>
                    <h3>Instructions:</h3>
                    <p class="pad-bottom"><?php echo $recipe->getInstructions(); ?></p>
                    <?php if(isset($_SESSION['user'])){
                        if($_SESSION['user']->getUserId() == $recipe->getUserId()) {
                             ?>
                            <p><a class="btn" href="EditRecipe.php?id=<?php echo $recipe->getId(); ?>">edit recipe</a></p>
                    <?php }} ?>
                </div>
            </div>
          
            <div class="add-recipe text-center">
                <a href="Login.php">login</a> or <a href="Register.php">register</a> to add a new recipe
            </div>
        </div>
    </main>

<?php include 'Footer.php'; ?>


