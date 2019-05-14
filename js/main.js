// variables
const registerPage = document.querySelector('main.register');

(function() {
   if(registerPage) {
       // variables
       const registerForm = document.getElementById('register-form'),
             emailInput = document.getElementById('email'),
             usernameInput = document.getElementById('username'),
             passwordInput = document.getElementById('password');
                          
             
        function validate(e) {
            if(emailInput.value === '' || !emailInput.value.includes('@') || !emailInput.value.includes('.') || emailInput.value.length < 5) {
                e.preventDefault();
                console.log('email issues!');
                emailInput.style.border = '1px solid red';
                
            } else if(usernameInput.value === '' || usernameInput.value.length < 2) {
                e.preventDefault();
                console.log('username issues!');
                usernameInput.style.border = '1px solid red';
                
            } else if(passwordInput.value === '' || passwordInput.value.length < 5) {
                e.preventDefault();
                console.log('password issues!');
                usernameInput.style.border = '1px solid red';
            }
        }
       registerForm.addEventListener("submit", validate);
       
       console.log('register pg!');
      
   } else {
       console.log('not reg page');
   }

})();