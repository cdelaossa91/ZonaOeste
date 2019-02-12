var username;
var password;
var alerta=document.getElementById('alert').innerHTML;

button=document.acceder;
button.onsubmit=validation(event);

function validation(event){
    event.preventDefault;
    username=document.login.username.value;
    password=document.login.password.value;
    
    if(username==''){
      
        alerta="Debe llenar todos los campos!";
        username.focus();
    } else if (password==''){
        alerta="Debe llenar todos los campos!";
        password.focus();    
    } else {
        submit();
    }
    
}

