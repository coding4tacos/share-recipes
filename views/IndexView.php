
<?php 
$allRecipes = $data["allRecipes"];
$randomNumber = rand(0, count($allRecipes) - 1);
$randomRecipe = $allRecipes[$randomNumber];

include 'Header.php'; ?>

<!-- 
<section class="recipe-search">
    <div class="container">
        <h3 class="text-center">Make something delicious tonight!</h3>
        <form class="text-center">
            <input type="search" placeholder="Ex: lasagna" class="search-input">
            <input type="submit" value="Search" class="btn">
        </form>
    </div>
</section>
-->
<main>
    <div class="container">
        <div class="section-header">
            <h3 class="pad-bottom">Make something delicious tonight!</h3>
            <h2 class="pad-bottom">Recently Added</h2>
        </div>
        <div class="flex featured-recipes">
            <?php foreach($data["recipes"] as $i => $recipe){ ?>
            <!-- Recipe -->
            <div class="featured-recipe">
                <div class="featured-recipe-img-wrap">
                    <img class="featured-recipe-img" src="./img/<?php echo $recipe->getImg(); ?>" alt="<?php echo $recipe->getName(); ?>">
                    <h4 class="text-center"><?php echo $recipe->getName(); ?></h4>
                </div>
                <p class="recipe-description"><?php echo $recipe->getDescription(); ?></p>
                <p><a class="btn" href="ViewRecipe.php?id=<?php echo $recipe->getId(); ?>">see more</a></p>
            </div>
            <?php } ?>
        </div><!-- End Featured Recipes -->

        <section class="random-featured-recipe">
            <div class="section-header">
                <h2>Featured Recipe - <span class="text-green"><?php echo $randomRecipe->getName(); ?></span></h2>
                <p class="recipe-description"><?php echo $randomRecipe->getDescription(); ?></p>
            </div>
                <!-- Recipe -->
                <div class="flex random-recipe">
                    <div class="recipe-information">
                        <i class="fas fa-star"></i>
                    <h3>Ingredients:</h3>
                    <p><?php echo $recipe->getIngredients(); ?></p>
                    <h3>Instructions:</h3>
                    <p class="pad-bottom"><?php echo $recipe->getInstructions(); ?></p>
                    </div>
                    <div class="img-wrap">
                        <img class="" src="./img/<?php echo $randomRecipe->getImg(); ?>" alt="<?php echo $randomRecipe->getName(); ?>">
                    </div>
                </div>

        </section>
        <div class="add-recipe text-center">
            <a href="Login.php">login</a> or <a href="Register.php">register</a> to add a new recipe
        </div>
    </div>
</main>

<?php include 'Footer.php'; ?>

