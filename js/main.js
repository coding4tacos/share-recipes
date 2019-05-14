// variables
const registerPage = document.querySelector('main.register'),
      loginPage = document.querySelector('main.login');

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
            
                
            } else if(usernameInput.value === '' || usernameInput.value.length < 2) {
                e.preventDefault();
                usernameInput.style.border = '1px solid red';
                
                errorMessage.textContent = '*Usernames must be at least 3 characters.';

                
            } else if(passwordInput.value === '' || passwordInput.value.length < 5) {
                e.preventDefault();
                passwordInput.style.border = '1px solid red';
                
                errorMessage.textContent = '*Passwords must be at least 5 characters.';
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
                 } else if(passwordInput.value === '') {
                    e.preventDefault();
                    passwordInput.style.border = '1px solid red';
                 }
             }
             loginForm.addEventListener("submit", validate);  
        }
        // END VALIDATION
})();