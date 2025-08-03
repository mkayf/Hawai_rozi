// user registration form:

const userForm = document.querySelector('.user-registration-form');
const userInputs = document.querySelectorAll('.user-input');

const userNameError = document.querySelector('.user-name-error');
const userPhoneError = document.querySelector('.user-phone-error');
const userEmailError = document.querySelector('.user-email-error');
const userPasswordError = document.querySelector('.user-password-error');
const userCityError = document.querySelector('.user-city-error');

const userFieldStatus = {
    name: false,
    phone: false,
    email: true,
    password: false,
    city: false
}


const checkValidation = (input) => {
    switch (input.name) {
            case 'name':
                
                if(!/^(?! )[A-Za-z](?: ?[A-Za-z]){2,}$/.test(input.value.trim())){
                    userFieldStatus.name = false;
                    userNameError.textContent = 'Please enter a valid name.';
                } else{
                    userFieldStatus.name = true;
                    userNameError.textContent = '';
                }

                break;
        
            case 'phone_number':

                if(!/^(03\d{9}|3\d{9})$/.test(input.value.trim())){
                    userFieldStatus.phone = false;
                    userPhoneError.textContent = 'Please enter a valid phone number.';
                } else{
                    userFieldStatus.phone = true;
                    userPhoneError.textContent = '';
                }

                break;

            case 'email':

                if(input.value.trim() !== '' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value.trim())){
                    userFieldStatus.email = false;
                    userEmailError.textContent = 'Please enter a valid email address.'
                } else{
                    userFieldStatus.email = true;
                    userEmailError.textContent = '';
                }

                break;
            
            case 'city':

                if(!/^[A-Za-z]+(?: [A-Za-z]+)*$/.test(input.value.trim())){
                    userFieldStatus.city = false;
                    userCityError.textContent = 'Please enter a valid city name using letters only.';
                } else{
                    userFieldStatus.city = true;
                    userCityError.textContent = '';
                }

                break;
            
            case 'password':

                if(!/^.{8,}$/.test(input.value.trim())){
                    userFieldStatus.password = false;
                    userPasswordError.textContent = 'Password must be at least 8 characters long.';
                } else{
                    userFieldStatus.password = true;
                    userPasswordError.textContent = '';
                }

                break;
                
            default:
                break;
        }
}

userInputs.forEach((input) => {
    input.addEventListener('input', () => {
        checkValidation(input);
    });
})


userForm.addEventListener('submit', (e) => {

    userInputs.forEach(checkValidation);

    for(let field in userFieldStatus){
        if(userFieldStatus[field] === false){
            e.preventDefault();
            document.querySelector(`[name="${field}"]`).focus();
            break;
        }
    }

    console.log(userFieldStatus)
})