<?php
$user=$_SESSION["user"];
?><!DOCTYPE html>
<?php include 'Header.php'; ?>
     <main class="login">
          <div class="container">
                   <p class="text-center">Welcome back <?= $user->getUsername(); ?>!</p>
                   
                   
          </div>
     </main>

<?php include 'Footer.php'; ?>
