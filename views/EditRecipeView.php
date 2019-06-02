<?php include 'Header.php'; ?>

    <main>
        <div class="container">
            <div class="section-header">
                <h2 class="text-center"><?php echo $data["recipes"]->getName(); ?></h2>
                <p class="recipe-description text-center"><?php echo $data["recipes"]->getDescription(); ?></p>
            </div>
            <div class="flex single-recipe">
                <div class="recipe-image"> 
                    <img class="featured-recipe-img" src="./img/<?php echo $data["recipes"]->getImg(); ?>" alt="<?php echo $data["recipes"]->getName(); ?>">
                </div>
                <div class="recipe-info">
                    <h3>Ingredients:</h3>
                    <p class=""><?php echo $data["recipes"]->getIngredients(); ?></p>
                    <h3>Instructions:</h3>
                    <p class=""><?php echo $data["recipes"]->getInstructions(); ?></p>
                </div>
                </div>
            <div class="add-recipe text-center">
                <a href="Login.php">login</a> or <a href="Register.php">register</a> to add a new recipe
            </div>
        </div>
    </main>

<?php include 'Footer.php'; ?>


