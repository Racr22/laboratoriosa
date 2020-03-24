function MostrarAcceso(){
    var form= new FormData();
    form.append('op',"MostrarAcceso");
    var ajax:XMLHttpRequest= new XMLHttpRequest();
    ajax.open("POST","clases/adminusers.php",true);
    ajax.setRequestHeader("enctype", "multipart/form-data");
    ajax.send(form);
    ajax.onreadystatechange = () => {

        if (ajax.readyState == 4 && ajax.status == 200) {
            { 
          
                var div = <HTMLDivElement> document.getElementById("list-home");         
                div.innerHTML = ajax.responseText;       
                      
            }
        }
    }
}
function MostrarUsuarios(){
    var form= new FormData();
    form.append('op',"MostrarUsuarios");
    var ajax:XMLHttpRequest= new XMLHttpRequest();
    ajax.open("POST","clases/adminusers.php",true);
    ajax.setRequestHeader("enctype", "multipart/form-data");
    ajax.send(form);
    ajax.onreadystatechange = () => {

        if (ajax.readyState == 4 && ajax.status == 200) {
            { 
          
                var div = <HTMLDivElement> document.getElementById("list-profile");         
                div.innerHTML = ajax.responseText;       
                      
            }
        }
    }
}
function Alta(){
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
    form.append('op','Alta')
    form.append('email',email);
    form.append('contra',contra);
     var ajax:XMLHttpRequest= new XMLHttpRequest();
     ajax.open("POST","clases/adminusers.php",true);
     ajax.setRequestHeader("enctype", "multipart/form-data");
     ajax.send(form);
     ajax.onreadystatechange=function(){
        if(ajax.readyState==4 && ajax.status==200){
            var respuesta= JSON.parse(ajax.responseText);
            if(respuesta.exito){
                alert("Se ha dado de alta el usuario");
                location.reload();
            }else{
                alert("No se ha podido dar de alta el usuario");
            }
        }
    }
}
function FormMod(emailmod:string) {
    var inputmail=(<HTMLInputElement>document.getElementById("emailmod")).value=emailmod;
}
function Modificar() {
    
    var email=(<HTMLInputElement>document.getElementById("emailmod")).value;
    var contra=(<HTMLInputElement>document.getElementById("passmod")).value;
    var form= new FormData();
    form.append('op','Modificar')
    form.append('email',email);
    form.append('contra',contra);
     var ajax:XMLHttpRequest= new XMLHttpRequest();
     ajax.open("POST","clases/adminusers.php",true);
     ajax.setRequestHeader("enctype", "multipart/form-data");
     ajax.send(form);
     ajax.onreadystatechange=function(){
        if(ajax.readyState==4 && ajax.status==200){
            var respuesta= JSON.parse(ajax.responseText);
            if(respuesta.exito){
                alert("Se ha modificado el usuario");
                location.reload();
            }else{
                alert("No se ha podido modificar el usuario");
            }
        }
    }
}
function FormElim(email:string) {
    var inputmail=(<HTMLInputElement>document.getElementById("elim-email")).value=email;
}

function Eliminar() {
    var email=(<HTMLInputElement>document.getElementById("elim-email")).value;
    var form= new FormData();
    form.append('op','Eliminar')
    form.append('email',email);
     var ajax:XMLHttpRequest= new XMLHttpRequest();
     ajax.open("POST","clases/adminusers.php",true);
     ajax.setRequestHeader("enctype", "multipart/form-data");
     ajax.send(form);
     ajax.onreadystatechange=function(){
        if(ajax.readyState==4 && ajax.status==200){
            var respuesta= JSON.parse(ajax.responseText);
            if(respuesta.exito){
                alert("Se ha eliminado el usuario");
                location.reload();
            }else{
                alert("No se ha podido eliminado el usuario");
            }
        }
    }
}