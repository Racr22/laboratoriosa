function MostrarAcceso() {
    var form = new FormData();
    form.append('op', "MostrarAcceso");
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "clases/adminusers.php", true);
    ajax.setRequestHeader("enctype", "multipart/form-data");
    ajax.send(form);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            {
                var div = document.getElementById("list-home");
                div.innerHTML = ajax.responseText;
            }
        }
    };
}
function MostrarUsuarios() {
    var form = new FormData();
    form.append('op', "MostrarUsuarios");
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "clases/adminusers.php", true);
    ajax.setRequestHeader("enctype", "multipart/form-data");
    ajax.send(form);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            {
                var div = document.getElementById("list-profile");
                div.innerHTML = ajax.responseText;
            }
        }
    };
}
function Alta() {
    var email = document.getElementById("email").value;
    var contra = document.getElementById("pass").value;
    if (email == "" && contra == "" || email == null && contra == null) {
        alert("Ingrese un mail y contraseña");
    }
    else {
        if (email == null || email == "") {
            alert("Ingrese un mail");
        }
        if (contra == null || contra == "") {
            alert("Ingrese una contraseña");
        }
    }
    var form = new FormData();
    form.append('op', 'Alta');
    form.append('email', email);
    form.append('contra', contra);
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "clases/adminusers.php", true);
    ajax.setRequestHeader("enctype", "multipart/form-data");
    ajax.send(form);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var respuesta = JSON.parse(ajax.responseText);
            if (respuesta.exito) {
                alert("Se ha dado de alta el usuario");
                location.reload();
            }
            else {
                alert("No se ha podido dar de alta el usuario");
            }
        }
    };
}
function FormMod(emailmod) {
    var inputmail = document.getElementById("emailmod").value = emailmod;
}
function Modificar() {
    var email = document.getElementById("emailmod").value;
    var contra = document.getElementById("passmod").value;
    var form = new FormData();
    form.append('op', 'Modificar');
    form.append('email', email);
    form.append('contra', contra);
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "clases/adminusers.php", true);
    ajax.setRequestHeader("enctype", "multipart/form-data");
    ajax.send(form);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var respuesta = JSON.parse(ajax.responseText);
            if (respuesta.exito) {
                alert("Se ha modificado el usuario");
                location.reload();
            }
            else {
                alert("No se ha podido modificar el usuario");
            }
        }
    };
}
function FormElim(email) {
    var inputmail = document.getElementById("elim-email").value = email;
}
function Eliminar() {
    var email = document.getElementById("elim-email").value;
    var form = new FormData();
    form.append('op', 'Eliminar');
    form.append('email', email);
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "clases/adminusers.php", true);
    ajax.setRequestHeader("enctype", "multipart/form-data");
    ajax.send(form);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var respuesta = JSON.parse(ajax.responseText);
            if (respuesta.exito) {
                alert("Se ha eliminado el usuario");
                location.reload();
            }
            else {
                alert("No se ha podido eliminado el usuario");
            }
        }
    };
}
