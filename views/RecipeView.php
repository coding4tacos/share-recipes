<?php include 'Header.php'; ?>

<section class="recipe-search">
        <div class="container">
            <!-- Add Search form -->
            <form class="text-center">
                <input type="search" placeholder="Ex: lasagna" class="search-input">
                <input type="submit" value="Search" class="btn">
            </form>
        </div>
    </section>
    <main>
        <div class="container">
            <div class="section-header">
                <h2 class="text-center"><?php echo $data["recipes"]->getName(); ?></h2>
            </div>
            <div class="">
                <img class="featured-recipe-img" src="./img/<?php echo $data["recipes"]->getImg(); ?>" alt="<?php echo $data["recipes"]->getName(); ?>">
                <h4 class="text-center"><?php echo $data["recipes"]->getName(); ?></h4>
            </div>
            <h3>Description:</h3>
                <p class="recipe-description"><?php echo $data["recipes"]->getDescription(); ?></p>
                   
                <h3>Ingredients:</h3>
                <p class=""><?php echo $data["recipes"]->getIngredients(); ?></p>
                <h3>Instructions:</h3>
                <p class=""><?php echo $data["recipes"]->getInstructions(); ?></p>
                </div>
        
            <div class="add-recipe text-center">
                <a href="Login.php">login</a> or <a href="Register.php">register</a> to add a new recipe
            </div>
        </div>
    </main>

<?php include 'Footer.php'; ?>


