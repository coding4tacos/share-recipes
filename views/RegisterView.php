<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
     <nav>
          <div class="container">
               <ul class="flex nav-links">
                    <li><a href="/" class="nav-link">Home</a></li>
                    <li><a href="#" class="nav-link">Categories</a></li>
                    <li><a href="/new-recipe.html" class="nav-link">Add Recipe</a></li>
               </ul>
          </div>
     </nav>
     <main class="login">
          <div class="container">
               <div class="login-form-wrap">
                    <form class="login-form" action="DoRegister.php" method="POST">
                         <h2 class="pad-bottom text-center">Sign Up!</h2>
                         <div class="form-field">
                              <label for="username">Email</label>
                              <input type="text" placeholder="ex: john@something.com" />
                         </div>
                         <div class="form-field">
                              <label for="username">Username</label>
                              <input type="text" placeholder="ex: iluvrecipes" />
                         </div>
                         <div class="form-field">
                              <label for="password">Password</label>
                              <input type="password" placeholder="password" />
                         </div>
                         <div class="text-center">
                              <input type="submit" value="Sign Up" class="btn" />
                         </div>
                         <p class="message">Already registered? <a href="login.html">Login</a></p>
                    </form>
               </div>
          </div>
     </main>


</body>

</html>