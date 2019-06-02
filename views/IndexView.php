
<?php include 'Header.php'; ?>

<section class="recipe-search">
        <div class="container">
            <!-- Add Search form -->
            <h3 class="text-center">Make something delicious tonight!</h3>
            <form class="text-center">
                <input type="search" placeholder="Ex: lasagna" class="search-input">
                <input type="submit" value="Search" class="btn">
            </form>
        </div>
    </section>
    <main>
        <div class="container">
            <div class="section-header">
                <h2 class="pad-bottom">Featured Recipes</h2>
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
            <div class="add-recipe text-center">
                <a href="Login.php">login</a> or <a href="Register.php">register</a> to add a new recipe
            </div>
        </div>
    </main>

<?php include 'Footer.php'; ?>
