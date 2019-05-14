<?php if(!isset($_SESSION['user'])){ $user = $_SESSION['user']; } ?>

<?php include 'Header.php'; ?>
     <main>
          <div class="container">
               Welcome <?= $user->getUsername(); ?>! We're glad to have you here!
          </div>
     </main>

<?php include 'Footer.php'; ?>