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
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
    crossorigin="anonymous">
</head>

<body>

    <header class="text-center">
        <h1>Share Recipes</h1>
    </header>
    <nav>
        <div class="container">
            <div id="nav-toggle">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </div>
            <ul class="flex nav-links" id="nav-links">
                <li><a href="./" class="nav-link">Home</a></li>
                <li><a href="ViewRecipes.php" class="nav-link">All Recipes</a></li>
                <?php if(isset($_SESSION['user'])) : ?>
                    <li><a href="./AddRecipe.php" class="nav-link">Add Recipe</a></li>
                    <li><a href="#" class="nav-link">My Recipes</a></li>
                    <li><a href="Logout.php" class="nav-link">Logout</a></li>
                 <?php else : ?>
                    <li><a href="Register.php" class="nav-link">Sign-up</a></li>
                    <li><a href="Login.php" class="nav-link">Login</a></li>
                 <?php endif; ?>
            </ul>
        </div>
    </nav>
    
    <!-- End header -->