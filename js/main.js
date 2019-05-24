// variables
const registerPage = document.querySelector('main.register'),
      loginPage = document.querySelector('main.login'),
      addRecipe = document.querySelector('main.add-recipe');

(function() {
   if(registerPage) {
       // variables
       const registerForm = document.getElementById('register-form'),
             emailInput = document.getElementById('email'),
             usernameInput = document.getElementById('username'),
             passwordInput = document.getElementById('password'),
             errorMessage = document.querySelector('.error-message');
       
        function validate(e) {
            if(emailInput.value === '' || !emailInput.value.includes('@') || !emailInput.value.includes('.') || emailInput.value.length < 5) {
                e.preventDefault();
                emailInput.style.border = '1px solid red';
                errorMessage.textContent = '*Please add a valid email.';
                // reset after 2 seconds
                setTimeout(function(){ 
                emailInput.style.border = '2px solid rgba(57, 126, 56, .5)';

                errorMessage.textContent = null;
                }, 2500);
            
                
            } else if(usernameInput.value === '' || usernameInput.value.length < 2) {
                e.preventDefault();
                
                
                usernameInput.style.border = '1px solid red';
                
                errorMessage.textContent = '*Usernames must be at least 3 characters.';
                    // reset after 2 seconds
                    setTimeout(function(){ 
                    usernameInput.style.border = '2px solid rgba(57, 126, 56, .5)';

                    errorMessage.textContent = null;
                }, 2500);
                
            } else if(passwordInput.value === '' || passwordInput.value.length < 5) {
                e.preventDefault();
                passwordInput.style.border = '1px solid red';
                
                errorMessage.textContent = '*Passwords must be at least 5 characters.';
                
                // reset after 2 seconds
                    setTimeout(function(){ 
                    passwordInput.style.border = '2px solid rgba(57, 126, 56, .5)';

                    errorMessage.textContent = null;
                }, 2500);
                
            }     
        }
        registerForm.addEventListener("submit", validate);
    }
        
        
        // Login Page
        if(loginPage) {
            const loginForm = document.getElementById('login-form'),
             usernameInput = document.getElementById('username'),
             passwordInput = document.getElementById('password'),
             errorMessage = document.querySelector('.error-message');
     
             function validate(e) {
                 if(usernameInput.value === '') {
                    e.preventDefault();
                    usernameInput.style.border = '1px solid red';
                    
                    // reset after 2 seconds
                    setTimeout(function(){ 
                    usernameInput.style.border = '2px solid rgba(57, 126, 56, .5)';
                    }, 2500);
                
                 } else if(passwordInput.value === '') {
                    e.preventDefault();
                    passwordInput.style.border = '1px solid red';
                    
                    // reset after 2 seconds
                    setTimeout(function(){ 
                    passwordInput.style.border = '2px solid rgba(57, 126, 56, .5)';
                    }, 2500);
                 }
             }
             loginForm.addEventListener("submit", validate);  
        }
        
        // Add Recipe Page
        if(addRecipe) {
        // variables
        const recipeForm = document.getElementById('add-recipe-form'),
              warningMsg = document.querySelector('.warning-message'),
              recipeName = document.getElementById('name'),
              recipeDescription = document.getElementById('description'),
              recipeIngredients = document.getElementById('ingredients'),
              recipeInstructions = document.getElementById('instructions'),
              recipeImage = document.getElementById('image');
              
        const redBorder = '1px solid red',
                          greenBorder = '2px solid rgba(57, 126, 56, .5)';

         let errorMsg = '';
             
         function validateNewRecipe(e) {
              if(recipeName.value === '' || recipeDescription.value === '' || recipeIngredients.value === '' || recipeInstructions.value === '') {
                    e.preventDefault();
                    
                    recipeName.style.border = redBorder;
                    recipeDescription.style.border = redBorder;
                    recipeIngredients.style.border = redBorder; 
                    recipeInstructions.style.border = redBorder;
                     
                    warningMsg.textContent = '**You gotta fill out all fields';
                    
                    // reset after 2 seconds
                    setTimeout(function(){ 
                        recipeName.style.border = greenBorder;
                        recipeDescription.style.border = greenBorder;
                        recipeIngredients.style.border = greenBorder; 
                        recipeInstructions.style.border = greenBorder;
                    }, 2500);
                    
                    // reset after 3.5 seconds
                    setTimeout(function(){ 
                        warningMsg.textContent = null;
                    }, 3500);
                
                 } /* 
     *                // check for image
                  else if(recipeImage.files.length <= 0) {
                    e.preventDefault();
                    
                    console.log(recipeImage.files);
                     console.log('length ' + recipeImage.files.length);
                    recipeImage.style.borderBottom = redBorder;
                    warningMsg.textContent = '**Please add an image';


                    // reset after 2 seconds
                    setTimeout(function(){ 
                       // something
                    recipeImage.style.borderBottom = 'none';
                    warningMsg.textContent = null;
                    }, 3500);
                 } 
 * */
                  
   }
       recipeForm.addEventListener("submit", validateNewRecipe);
    }
         
         
        // END VALIDATION
})();