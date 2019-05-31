
<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

global $data;

?><!DOCTYPE html>
<html>

<head>
    <title>Share Recipes!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Dancing+Script" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="./chef.png">
</head>

<body>

    <header class="text-center">
        <h1>Share Recipes</h1>
    </header>
    <nav>
        <div class="container">
            <ul class="flex nav-links">
                <li><a href="./" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categories</a></li>
                <?php if(isset($_SESSION['user'])) : ?>
                    <li><a href="./AddRecipe.php" class="nav-link">Add Recipe</a></li>
                    <li><a href="#" class="nav-link">My Account</a></li>
                    <li><a href="Logout.php" class="nav-link">Logout</a></li>
                 <?php else : ?>
                    <li><a href="Register.php" class="nav-link">Sign-up</a></li>
                    <li><a href="Login.php" class="nav-link">Login</a></li>
                 <?php endif; ?>
            </ul>
        </div>
    </nav>
    
    <!-- End header -->