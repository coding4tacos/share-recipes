<?php include 'Header.php'; ?>
<main id="all-recipes-pg">
    <div class="container">
        <div class="section-header">
            <h2 class="pad-bottom">All Recipes</h2>
        </div>
        <div class="flex">
            <?php foreach($data["recipes"] as $i => $recipe){ ?>
                <!-- Recipe -->
                <div class="flex recipe-card">
                    <div class="img-wrap">
                        <img class="" src="./img/<?php echo $recipe->getImg(); ?>" alt="<?php echo $recipe->getName(); ?>">
                    </div>
                    <div class="recipe-information">
                        <h3 class="text-center"><?php echo $recipe->getName(); ?></h3>
                        <p class="recipe-description"><?php echo $recipe->getDescription(); ?></p>
                        <p><a class="btn" href="ViewRecipe.php?id=<?php echo $recipe->getId(); ?>">see more</a></p>
                    </div>
                </div>
            <?php } ?>
        </div><!-- End Featured Recipes -->
        <div class="add-recipe text-center">
            <a href="Login.php">login</a> or <a href="Register.php">register</a> to add a new recipe
        </div>
    </div>
</main>

<?php include 'Footer.php'; ?>