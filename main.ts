function Login() {
    var email=(<HTMLInputElement>document.getElementById("email")).value;
    var contra=(<HTMLInputElement>document.getElementById("pass")).value;
    if(email=="" && contra=="" || email==null && contra==null){
        alert("Ingrese un mail y contraseña");
    }else{
        if(email==null || email==""){
            alert("Ingrese un mail");
        }
        if(contra==null || contra==""){
            alert("Ingrese una contraseña")
        }
    }
    var form= new FormData();
    form.append('email',email);
    form.append('contra',contra);
     var ajax:XMLHttpRequest= new XMLHttpRequest();
     ajax.open("POST","login.php",true);
     ajax.setRequestHeader("enctype", "multipart/form-data");
     ajax.send(form);
     ajax.onreadystatechange=function(){
        if(ajax.readyState==4 && ajax.status==200){
            var respuesta= JSON.parse(ajax.responseText);
            if(respuesta.exito){
                window.location.href="control.html";
            }else{
                alert("Usuario y/o contraseña incorrectos");
            }
        }
    }
}