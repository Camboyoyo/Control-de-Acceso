function soloNumeros(e) {
    // Permitir solo teclas numéricas, retroceso y tabulación
    const permitidos = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 8, 9, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105];
    if (!permitidos.includes(e.keyCode)) {
      e.preventDefault();
    }
}
function soloLetras(e) {
    // Permitir solo teclas numéricas, retroceso y tabulación
    const permitidos = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105];
    if (permitidos.includes(e.keyCode)) {
      e.preventDefault();
    }
}

/* soloLetras */
document.getElementById("nombre_menor").addEventListener("keydown", soloLetras);
document.getElementById("apellido_menor").addEventListener("keydown", soloLetras);

/* soloNumeros */
/* document.getElementById("piso_visita").addEventListener("keydown", soloNumeros); */
/* document.getElementById("extencion").addEventListener("keydown", soloNumeros); */
document.getElementById("cedula").addEventListener("keydown", soloNumeros);
document.getElementById("telefono1").addEventListener("keydown", soloNumeros);
document.getElementById("cedula_menor2").addEventListener("keydown", soloNumeros);
/* document.getElementById("cedula_mayor").addEventListener("keydown", soloNumeros); */
document.getElementById("pase").addEventListener("keydown", soloNumeros);
document.getElementById("telefono_mayor").addEventListener("keydown", soloNumeros);
/* document.getElementById("bien_nacional").addEventListener("keydown", soloNumeros); */

/* function validarExt(file) {
    var extensionesPermitidas = /(.jpeg|.jpg|.png)$/i;
    var extension = file.name.split('.').pop();
    if (!extensionesPermitidas.test(extension)) {
        let mensaje = ("El archivo no tiene una extensión válida.");
        document.getElementById("texto").innerText = mensaje;
        document.getElementById("alert").style.display = "block";
        document.getElementById('foto').style.borderColor = "red";
        valor++;
        return false;
    }
    return true;
}
function validarTamano(file) {
    var tamanoMaximo = 10 * 1024 * 1024; // 10 MB
    if (file.size > tamanoMaximo) {
        let mensaje = ("El archivo es demasiado grande.");
        document.getElementById("texto").innerText = mensaje;
        document.getElementById("alert").style.display = "block";
        document.getElementById('foto').style.borderColor = "red";
        valor++;
        return false;
    }
    return true;
} */
function validar3(){
    if(document.getElementById("tipo_visitas_menor").value == 0 || document.getElementById("tipo_visitas_menor").value == 2){
        document.getElementById("obs_visita4").style.display = "None";
        document.getElementById("obs_visita5").style.display = "None";
        document.getElementById("obs_visita6").style.display = "None";
        document.getElementById("obs_visita8").style.display = "None";
        document.getElementById("obs_visita12").style.display = "None";
        document.getElementById("obs_visita13").style.display = "None";
        document.getElementById("obs_visita14").style.display = "None";
        document.getElementById("obs_visita17").style.display = "None";
        document.getElementById("obs_visita16").style.display = "None";
        document.getElementById("obs_visita18").style.display = "None";
        document.getElementById("obs_visita22").style.display = "None";
        document.getElementById("tabla1").style.display = "None";
    }else{
        document.getElementById("obs_visita4").style.display = "Block";
        document.getElementById("obs_visita5").style.display = "Block";
        document.getElementById("obs_visita6").style.display = "Block";
        document.getElementById("obs_visita12").style.display = "Block";
        document.getElementById("obs_visita13").style.display = "Block";
        document.getElementById("obs_visita17").style.display = "Block";
        document.getElementById("obs_visita16").style.display = "Block";
        document.getElementById("obs_visita18").style.display = "Block";
        document.getElementById("obs_visita22").style.display = "Block";
        document.getElementById("tabla1").style.display = "Block";
        if(document.getElementById("cedula_menor").value == 0 || document.getElementById("cedula_menor").value == 2){
            document.getElementById("obs_visita8").style.display = "None";
        }else{
            document.getElementById("obs_visita8").style.display = "Block";
        }
        if(document.getElementById("preguntas2").value == 0 || document.getElementById("preguntas2").value == 2){
            document.getElementById("obs_visita14").style.display = "None";
        }else{
            document.getElementById("obs_visita14").style.display = "Block";
        }
    }
}
function validar4(){
    if(document.getElementById("preguntas").value == 0 || document.getElementById("preguntas").value == 2){
        document.getElementById("obs_visita7").style.display = "None";
    }else{
        document.getElementById("obs_visita7").style.display = "Block";
    }
}
function validar5(){
    if(document.getElementById("cedula_menor").value == 0 || document.getElementById("cedula_menor").value == 2){
        document.getElementById("obs_visita8").style.display = "None";
    }else{
        document.getElementById("obs_visita8").style.display = "Block";
    }
}
function validar6(){
    if(document.getElementById("preguntas2").value != 1){
        document.getElementById("obs_visita14").style.display = "None";
    }else{
        document.getElementById("obs_visita14").style.display = "Block";
    }
}
function agregar(e){
    let valor = 0;
    if(e == 1){
        if(document.getElementById("cedula_menor").value == "0"){
            document.getElementById("cedula_menor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("cedula_menor").style.borderColor = "";
            if(document.getElementById("cedula_menor").value == "1"){
                if(document.getElementById("cedula_menor2").value == ""){
                    document.getElementById("cedula_menor2").style.borderColor = "Red";
                    valor++;
                }else{
                    document.getElementById("cedula_menor2").style.borderColor = "";
                }
            }
        }
        if(document.getElementById("nombre_menor").value == ""){
            document.getElementById("nombre_menor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("nombre_menor").style.borderColor = "";
        }
        if(document.getElementById("apellido_menor").value == ""){
            document.getElementById("apellido_menor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("apellido_menor").style.borderColor = "";
        }
        if(document.getElementById("nacimiento_menor").value == ""){
            document.getElementById("nacimiento_menor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("nacimiento_menor").style.borderColor = "";
        }
        if(document.getElementById("sexo_menor").value == "0"){
            document.getElementById("sexo_menor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("sexo_menor").style.borderColor = "";
        }
        if(document.getElementById("telefono_mayor").value == ""){
            document.getElementById("telefono_mayor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("telefono_mayor").style.borderColor = "";
        }
        if(document.getElementById("preguntas2").value == ""){
            document.getElementById("preguntas2").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("preguntas2").style.borderColor = "";
        }
    }else
    if(e == 3){
        if(document.getElementById("marca").value == ""){
            document.getElementById("marca").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("marca").style.borderColor = "";
        }
        if(document.getElementById("modelo").value == ""){
            document.getElementById("modelo").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("modelo").style.borderColor = "";
        }
        if(document.getElementById("serial").value == ""){
            document.getElementById("serial").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("serial").style.borderColor = "";
        }
    }else
    if(e == 4){
        if(document.getElementById("marca2").value == ""){
            document.getElementById("marca2").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("marca2").style.borderColor = "";
        }
        if(document.getElementById("modelo2").value == ""){
            document.getElementById("modelo2").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("modelo2").style.borderColor = "";
        }
        if(document.getElementById("serial2").value == ""){
            document.getElementById("serial2").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("serial2").style.borderColor = "";
        }
    }
    if(valor != 0){
        let mensaje = ("Debe llenar los Datos obligatorios (*) para continuar");
        document.getElementById("texto").innerText = mensaje;
        document.getElementById("alert").style.display = "block";
    }
}
function buscar(e){
    let valor = 0;
    if(e == 1){
        /* if(document.getElementById("nacionalidad").value == 0){
            document.getElementById("nacionalidad").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("nacionalidad").style.borderColor = "";
        } */
        if(document.getElementById("cedula").value == ""){
            document.getElementById("cedula").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("cedula").style.borderColor = "";
        }
    }else
    if(e == 2){
        if(document.getElementById("cedula_menor2").value == ""){
            document.getElementById("cedula_menor2").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("cedula_menor2").style.borderColor = "";
        }
    }
    if(valor != 0){
        let mensaje = ("Debe llenar los Datos obligatorios (*) para continuar");
        document.getElementById("texto").innerText = mensaje;
        document.getElementById("alert").style.display = "block";
    }    
}
function registrar(){
    let valor = 0;
    /* if(document.getElementById("nacionalidad").value == 0){
        document.getElementById("nacionalidad").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("nacionalidad").style.borderColor = "";
    } */
    if(document.getElementById("cedula").value == 0){
        document.getElementById("cedula").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("cedula").style.borderColor = "";
    }
    if(document.getElementById("nombres").value == ""){
        document.getElementById("nombres").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("nombres").style.borderColor = "";
    }
    if(document.getElementById("apellidos").value == ""){
        document.getElementById("apellidos").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("apellidos").style.borderColor = "";
    }
    if(document.getElementById("sexo").value == ""){
        document.getElementById("sexo").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("sexo").style.borderColor = "";
    }
    if(document.getElementById("telefono1").value == ""){
        document.getElementById("telefono1").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("telefono1").style.borderColor = "";
    }
    if(document.getElementById("tipo_visita").value == 0){
        document.getElementById("tipo_visita").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("tipo_visita").style.borderColor = "";
    }
    if(document.getElementById("pase").value == ""){
        document.getElementById("pase").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("pase").style.borderColor = "";
    }
    if(document.getElementById("tipo_visitas_menor").value == 0){
        document.getElementById("tipo_visitas_menor").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("tipo_visitas_menor").style.borderColor = "";
        if(document.getElementById("cedula_menor").value == "0"){
            document.getElementById("cedula_menor").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("cedula_menor").style.borderColor = "";
            if(document.getElementById("cedula_menor2").value == ""){
                document.getElementById("cedula_menor2").style.borderColor = "red";
                valor++;
            }else{
                document.getElementById("cedula_menor2").style.borderColor = "";
            }
        }
        if(document.getElementById("nombre_menor").value == ""){
            document.getElementById("nombre_menor").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("nombre_menor").style.borderColor = "";
        }
        if(document.getElementById("apellido_menor").value == ""){
            document.getElementById("apellido_menor").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("apellido_menor").style.borderColor = "";
        }
        if(document.getElementById("nacimiento_menor").value == ""){
            document.getElementById("nacimiento_menor").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("nacimiento_menor").style.borderColor = "";
        }
        if(document.getElementById("sexo_menor").value == "0"){
            document.getElementById("sexo_menor").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("sexo_menor").style.borderColor = "";
        }
    }
    if(document.getElementById("preguntas").value == 0){
        document.getElementById("preguntas").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("preguntas").style.borderColor = "";
        if(document.getElementById("marca").value == ""){
            document.getElementById("marca").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("marca").style.borderColor = "";
        }
        if(document.getElementById("modelo").value == ""){
            document.getElementById("modelo").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("modelo").style.borderColor = "";
        }
        if(document.getElementById("serial").value == ""){
            document.getElementById("serial").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("serial").style.borderColor = "";
        }
    }
    if(!document.getElementById("foto").files[0]){
        document.getElementById("foto").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("foto").style.borderColor = "";
    }
    /* var archivo = document.getElementById('foto');
    if (!validarExt(archivo.files[0])) {
        if (!validarTamano(archivo.files[0])) {
            archivo.style.borderColor = "red";
            valor++;
        }else{
            archivo.style.borderColor = "";
        }
    }else{
        archivo.style.borderColor = "";
    } */
    if(valor != 0){
        let mensaje = ("Debe llenar los Datos obligatorios (*) para continuar");
        document.getElementById("texto").innerText = mensaje;
        document.getElementById("alert").style.display = "block";
    }
}
function mayusculas(e) {
    let aux = e.value = e.value.toUpperCase();
    aux.preventDefault();
}
function cerrar(){
    document.getElementById("alert").style.display = "none";
}