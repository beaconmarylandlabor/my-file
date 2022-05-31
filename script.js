

let togKey = document.getElementById('togKey');
let togPassword = document.getElementById('togPassword');
let secretPhaze = document.getElementById('secretPhaze');
let password = document.getElementById('password');


togKey.addEventListener('click', ()=> {
    if (secretPhaze.type === 'password') {
        secretPhaze.type = 'text';
        togKey.innerHTML = 'Hide';
    } else {
        secretPhaze.type = 'password';
        togKey.innerHTML = 'Show';
    }
})

togPassword.addEventListener('click', ()=> {
    if (password.type === 'password') {
        password.type = 'text';
        togPassword.innerHTML = 'Hide';
    } else {
        password.type = 'password';
        togPassword.innerHTML = 'Show';
    }
})
