<?php
$user=$_SESSION["user"];
?><!DOCTYPE html>
<?php include 'Header.php'; ?>
     <main class="login">
          <div class="container">
               <div class="">
                   <p class="logged-in-welcome-msg">Welcome <?= $user->getUsername(); ?></p>
              
               </div>
          </div>
     </main>

<?php include 'Footer.php'; ?>
