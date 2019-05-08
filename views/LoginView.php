<?php include 'Header.php'; ?>
     <main class="login">
          <div class="container">
               <div class="login-form-wrap">
                    <form class="login-form" action="DoLogin.php" method="POST">
                         <h2 class="pad-bottom text-center">Login</h2>
                         <div class="form-field">
                              <input type="text" name="username" id="username" placeholder="username" />
                         </div>
                         <div class="form-field">
                              <input type="password" name="password" id="password" placeholder="password" />
                         </div>
                         <div class="form-field">
                              <input type="submit" value="Submit" class="btn" />
                         </div>
                         <p class="message">Already registered? <a href="/register.php">Create an
                                   account</a></p>
                    </form>
               </div>
          </div>
     </main>

<?php include 'Footer.php'; ?>
