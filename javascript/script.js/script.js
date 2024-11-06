 
 document.addEventListener('DOMContentLoaded', function() {
    const RegisterButton = document.getElementById('RegisterButton');
    const LoginButton = document.getElementById('LoginButton');
    const Loginform = document.getElementById('Login');
    const RegisterForm = document.getElementById('Register');
 
    RegisterButton.addEventListener('click', function() {
        Loginform.style.display = "none";
        RegisterForm.style.display = "block";
    });
 
    LoginButton.addEventListener('click', function() {
        Loginform.style.display = "block";
        RegisterForm.style.display = "none";
    });
 });
 