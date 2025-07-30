let form = document.querySelector('form');
let clear = document.querySelector('button[type="reset"]');
let title = document.getElementById('title');
let content = document.getElementById('content');
let message = document.getElementById('missing');

clear.addEventListener('click', executeEvent)

function executeEvent(e){
    let res = confirm("Are you sure you want to clear this form?");
    if (!res){
        e.preventDefault();
    }
}
// Highlighting blank fields
form.addEventListener('submit', highlight)

function highlight(e){
    let valid = true;

    title.classList.remove('error');
    content.classList.remove('error');
    message.textContent = "";

    if (title.value === ''){
        title.classList.add('error');
        valid = false;
    }
    if (content.value === ''){
        content.classList.add('error')
        valid = false;
    }

    if(!valid){
        message.textContent = "Missing fields are highlighted in red, please fix.";
        e.preventDefault();
    }
}