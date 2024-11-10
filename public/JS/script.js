

// JavaScript to toggle password visibility
document.getElementById('togglePassword1').addEventListener('click', function () {
    var passwordField = document.getElementById('password');
    var passwordToggleIcon = document.getElementById('togglePassword1').querySelector('i');
    
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      passwordToggleIcon.classList.remove('bi-eye');
      passwordToggleIcon.classList.add('bi-eye-slash');
    } else {
      passwordField.type = 'password';
      passwordToggleIcon.classList.remove('bi-eye-slash');
      passwordToggleIcon.classList.add('bi-eye');
    }
  });

  document.getElementById('togglePassword2').addEventListener('click', function () {
    var passwordField = document.getElementById('password_confirmation');
    var passwordToggleIcon = document.getElementById('togglePassword2').querySelector('i');
    
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      passwordToggleIcon.classList.remove('bi-eye');
      passwordToggleIcon.classList.add('bi-eye-slash');
    } else {
      passwordField.type = 'password';
      passwordToggleIcon.classList.remove('bi-eye-slash');
      passwordToggleIcon.classList.add('bi-eye');
    }
  });


 
