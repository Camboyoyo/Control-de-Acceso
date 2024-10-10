function soloNumeros(e) {
    // Permitir solo teclas numéricas, retroceso y tabulación
    const permitidos = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 8, 9, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105];
    if (!permitidos.includes(e.keyCode)) {
      e.preventDefault();
    }
}

document.getElementById("cedula").addEventListener("keydown", soloNumeros);

function mayusculas(e) {
    let aux = e.value = e.value.toUpperCase();
    aux.preventDefault();
}
function ingresar(nacionalidad,cedula, dependencia, motivo_visita){
    /* alert(cedula); */
    let valor = 0;
    if(dependencia == '0'){
        document.getElementById("dependencia").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("dependencia").style.borderColor = "";
        if(motivo_visita == ''){
            document.getElementById("motivo_visita").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("motivo_visita").style.borderColor = "";
        }
    }
    if(!document.getElementById("inlineRadio1").checked && !document.getElementById("inlineRadio2").checked){
        valor++;
    }else{
        document.getElementById("inlineRadio2").style.borderColor = "gray";
        document.getElementById("inlineRadio1").style.borderColor = "gray";
    }
    if(document.getElementById("inlineRadio1").checked){
        if(nacionalidad == '0'){
            document.getElementById("nacionalidad").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("nacionalidad").style.borderColor = "";
        }
        if(cedula == ''){
            document.getElementById("cedula").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("cedula").style.borderColor = "";
        }
    }
    if(valor != 0){
        let mensaje = ("Debe llenar los Datos obligatorios (*) para continuar");
        document.getElementById("texto").innerText = mensaje;
        document.getElementById("titulo").style.backgroundColor = "#DC3831"; //Rojo
        document.getElementById("titulo").style.color = "white";
        document.getElementById("alert").style.display = "block";
        document.getElementById("link").value = "";
        
    }else{
        $.ajax({
            url: "control_acceso.php?nacionalidad="+nacionalidad+"&cedula="+cedula+"&accion="+1,
            type: "GET",
            success: function(resp) {
                let v0 =  resp.split(" / ")[0];
                let v1 =  resp.split(" / ")[1];
                if(v0 == '1'){
                    document.getElementById("texto").innerText = v1;
                    document.getElementById("titulo").style.backgroundColor = "#DC3831"; //Rojo
                    document.getElementById("titulo").style.color = "white";
                    document.getElementById("alert").style.display = "block";
                    document.getElementById("link").value = "acceso_visita2.php";
                    /* location.href = "acceso_visita2.php"; */
                }else{
                    location.href = "acceso_visita2.php";
                }
            }
        });
    }
}
function registrar(){
    let valor = 0;
    if(document.getElementById("dependencia").value == '0'){
        document.getElementById("dependencia").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("dependencia").style.borderColor = "";
        if(document.getElementById("motivo_visita").value == ''){
            document.getElementById("motivo_visita").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("motivo_visita").style.borderColor = "";
        }
    }
    if(!document.getElementById("inlineRadio1").checked && !document.getElementById("inlineRadio2").checked){
        valor++;
    }else{
        document.getElementById("inlineRadio2").style.borderColor = "gray";
        document.getElementById("inlineRadio1").style.borderColor = "gray";
    }
    if(document.getElementById("inlineRadio2").checked){
        if(document.getElementById("observaciones").value == ''){
            document.getElementById("observaciones").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("observaciones").style.borderColor = "";
        }
    }
    if(valor != 0){
        let mensaje = ("Debe llenar los Datos obligatorios (*) para continuar");
        document.getElementById("texto").innerText = mensaje;
        document.getElementById("titulo").style.backgroundColor = "#DC3831"; //Rojo
        document.getElementById("titulo").style.color = "white";
        document.getElementById("alert").style.display = "block";
        document.getElementById("link").value = "";
    }
}
function observar(){
    if(document.getElementById("inlineRadio2").checked){
        document.getElementById("grupo2").style.display = "none";
        document.getElementById("observacion").style.display = "Block";
        document.getElementById("observacion2").style.display = "";
    }
    if(document.getElementById("inlineRadio1").checked){
        document.getElementById("grupo2").style.display = "Block";
        document.getElementById("observacion").style.display = "none";
        document.getElementById("observacion2").style.display = "none";
    }
}
function validar(){
    if(document.getElementById("dependencia").value >= '1'){
        document.getElementById("grupo").style.display = "Block";
    }else{
        document.getElementById("grupo").style.display = "none";
    }
}
function cerrar(){
    if(document.getElementById("link").value == ""){
        document.getElementById("alert").style.display = "none";
    }else{
        location.href = document.getElementById("link").value;
    }    
}