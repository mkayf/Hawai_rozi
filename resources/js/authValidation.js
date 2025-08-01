// User registeration form validation:

const userForm = document.querySelector('.user-registration-form');
const userInputs = document.querySelectorAll('.user-input');

let validated = false;

userForm.addEventListener('input', (event) => {
    switch (event.target.id) {
        case 'name':
            if(event.target.value !== 'kaif'){
                document.querySelector('.user-name-error').textContent = 'Invalid name';
                validated = false;
            } else{
                document.querySelector('.user-name-error').textContent = '';
                validated = true;
            }
            break;
    
        default:
            break;
    }
}); 

window.checkValidation = function (){
    if(validated === false) return false;
}