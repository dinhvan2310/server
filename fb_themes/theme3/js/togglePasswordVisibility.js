function togglePasswordVisibility(event) {
    event.preventDefault();
    const passwordInput = document.getElementById('password');
    const showPassword = document.getElementById('showPassword');
    const hidePassword = document.getElementById('hidePassword');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        showPassword.style.display = 'none';
        hidePassword.style.display = 'inline';
    } else {
        passwordInput.type = 'password';
        showPassword.style.display = 'inline';
        hidePassword.style.display = 'none';
    }
}