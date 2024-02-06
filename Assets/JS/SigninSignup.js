const container = document.getElementById('container');
const signinBtn = document.getElementById('signin');
const signupBtn = document.getElementById('signup');

signinBtn.addEventListener('click', () => {
    container.classList.remove('active');
});

signupBtn.addEventListener('click', () => {
    container.classList.add('active');
});
  
