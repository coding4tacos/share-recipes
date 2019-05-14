// variables
const registerPage = document.querySelector('main.register');

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
                console.log('email issues!');
                emailInput.style.border = '1px solid red';
                
                errorMessage.textContent = '*Please add a valid email.';
            
                
            } else if(usernameInput.value === '' || usernameInput.value.length < 2) {
                e.preventDefault();
                console.log('username issues!');
                usernameInput.style.border = '1px solid red';
                
                errorMessage.textContent = '*Usernames must be at least 3 characters.';

                
            } else if(passwordInput.value === '' || passwordInput.value.length < 5) {
                e.preventDefault();
                console.log('password issues!');
                passwordInput.style.border = '1px solid red';
                
                errorMessage.textContent = '*Passwords must be at least 5 characters.';
            }
        }
       registerForm.addEventListener("submit", validate);
       
       console.log('register pg!');
      
   } else {
       console.log('not reg page');
   }

})();