
const usernameInput = document.getElementById('username');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');

const usernameFeedback = document.getElementById('usernameFeedback');
const emailFeedback = document.getElementById('emailFeedback');
const passwordFeedback = document.getElementById('passwordFeedback');

usernameInput.addEventListener('input', function () {
    const value = usernameInput.value;
    if (value.length < 3) {
        usernameInput.classList.add('input-error');
        usernameInput.classList.remove('input-success');
        usernameFeedback.textContent = 'Username must be at least 3 characters long.';
        usernameFeedback.classList.add('feedback-error');
        usernameFeedback.classList.remove('feedback-success');
    } else {
        usernameInput.classList.add('input-success');
        usernameInput.classList.remove('input-error');
        usernameFeedback.textContent = 'Username looks good!';
        usernameFeedback.classList.add('feedback-success');
        usernameFeedback.classList.remove('feedback-error');
    }
});

emailInput.addEventListener('input', function () {
    const value = emailInput.value;
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!regex.test(value)) {
        emailInput.classList.add('input-error');
        emailInput.classList.remove('input-success');
        emailFeedback.textContent = 'Please enter a valid email address.';
        emailFeedback.classList.add('feedback-error');
        emailFeedback.classList.remove('feedback-success');
    } else {
        emailInput.classList.add('input-success');
        emailInput.classList.remove('input-error');
        emailFeedback.textContent = 'Email looks good!';
        emailFeedback.classList.add('feedback-success');
        emailFeedback.classList.remove('feedback-error');
    }
});

passwordInput.addEventListener('input', function () {
    const value = passwordInput.value;
    if (value.length < 6) {
        passwordInput.classList.add('input-error');
        passwordInput.classList.remove('input-success');
        passwordFeedback.textContent = 'Password must be at least 6 characters long.';
        passwordFeedback.classList.add('feedback-error');
        passwordFeedback.classList.remove('feedback-success');
    } else {
        passwordInput.classList.add('input-success');
        passwordInput.classList.remove('input-error');
        passwordFeedback.textContent = 'Password looks good!';
        passwordFeedback.classList.add('feedback-success');
        passwordFeedback.classList.remove('feedback-error');
    }
});