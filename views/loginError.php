<?php include 'Header.php'; ?>
<div class="section-header">
    <h4 class="error-message">Sorry, login unsuccessful. Please try again or <a href="Register.php">register</a>.</h4>
</div>

     <main class="login">
          <div class="container">
               <div class="login-form-wrap">
                    <form class="login-form" action="DoLogin.php" method="POST" id="login-form">
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
                         <p class="message">Haven't registered? <a href="Register.php">Create an
                                   account</a></p>
                    </form>
               </div>
          </div>
     </main>

<?php include 'Footer.php'; ?>