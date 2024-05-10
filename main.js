//DarkMode

let darkmode = document.querySelector('#darkmode');

darkmode.onclick = () =>{
    if(darkmode.classList.contains('bx-moon')){
        darkmode.classList.replace('bx-moon', 'bx-sun');
        document.body.classList.add('active');
    }else{
        darkmode.classList.replace('bx-sun', 'bx-moon');
        document.body.classList.remove('active');
    }
}




/* const visiteurModule = document.getElementById('visiteur-module');
const loginButton = document.getElementById('login-button');
const signupButton = document.getElementById('signup-button');
const loginModal = document.getElementById('login-modal');
const signupModal = document.getElementById('signup-modal');

loginButton.addEventListener('click', () => {
  loginModal.style.display = 'block';
});

signupButton.addEventListener('click', () => {
  signupModal.style.display = 'block';
});

// Function to close the modals
function closeModal(modal) {
  modal.style.display = 'none';
}

// Add event listeners to close the modals when the 'X' button is clicked
document.getElementById('close-login-modal').addEventListener('click', () => {
  closeModal(loginModal);
});

document.getElementById('close-signup-modal').addEventListener('click', () => {
  closeModal(signupModal);
}); */



