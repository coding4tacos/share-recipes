<?php include 'Header.php'; ?>
     <main class="login">
          <div class="container">
               <div class="login-form-wrap">
                    <form class="login-form" action="DoRegister.php" method="POST">
                         <h2 class="pad-bottom text-center">Sign Up!</h2>
                         <div class="form-field">
                              <label for="username">Email</label>
                              <input type="text" name="email" id="email" placeholder="ex: john@something.com" />
                         </div>
                         <div class="form-field">
                              <label for="username">Username</label>
                              <input type="text" name="username" id="username" placeholder="ex: iluvrecipes" />
                         </div>
                         <div class="form-field">
                              <label for="password">Password</label>
                              <input type="password" name="password" id="password" placeholder="password" />
                         </div>
                         <div class="text-center">
                              <input type="submit" value="Sign Up" class="btn" />
                         </div>
                         <p class="message">Already registered? <a href="login.php">Login</a></p>
                    </form>
               </div>
          </div>
     </main>

<?php include 'Footer.php'; ?>