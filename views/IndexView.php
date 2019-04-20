<?php
global $data;
?><!DOCTYPE html>
<html>

<head>
    <title>Prototipo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Dancing+Script" rel="stylesheet">
</head>

<body>

    <!-- TO DO 
        
        pagina principal: buscador que manda a resultados de busqueda
        
        pagina de registro
        
        pagina de login
        
        pagina 'nueva receta' ---- Need to do 
        
        Timestamps in DB ----- Need to do

        INSPIRATION: https://www.supercook.com/#/recipes
        https://www.myrecipes.com/
        https://www.allrecipes.com/
        
        
        -->
    <header class="text-center">
        <h1>Share Recipes</h1>
    </header>
    <nav>
        <div class="container">
            <ul class="flex nav-links">
                <li><a href="/index.html" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categories</a></li>
                <li><a href="./new-recipe.html" class="nav-link">Add Recipe</a></li>
            </ul>
        </div>
    </nav>
    <section class="recipe-search">
        <div class="container">
            <!-- Add Search form -->
            <h3 class="text-center">Make something delicious tonight!</h3>
            <form class="text-center">
                <input type="search" placeholder="Ex: lasagna">
                <input type="submit" value="Search">
            </form>
        </div>
    </section>
    <main>
        <div class="container">
            <div class="section-header">
                <h2>Featured Recipes</h2>
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
                    <p><a class="btn" href="#">see more</a></p>
                </div>
                <?php } ?>
            </div><!-- End Featured Recipes -->
            <div class="add-recipe text-center">
                <a href="login.html">login to add a new recipe</a>
            </div>
        </div>
    </main>

</body>

</html>