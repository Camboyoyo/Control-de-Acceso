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
function mayusculas(e) {
    let aux = e.value = e.value.toUpperCase();
    aux.preventDefault();
}
document.getElementById("cedula").addEventListener("keydown", soloNumeros);
document.getElementById("nombres").addEventListener("keydown", soloLetras);
document.getElementById("apellidos").addEventListener("keydown", soloLetras);
document.getElementById("telefono").addEventListener("keydown", soloNumeros);
function cerrar(){
    document.getElementById("alert").style.display = "none";
}
function guardar(){
    let valor = 0;
    if(document.getElementById("posee_cedula").value == "0"){
        document.getElementById("posee_cedula").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("posee_cedula").style.borderColor = ""; 
    }
    if(document.getElementById("cedula").value == ""){
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
    if(document.getElementById("nacimiento").value == ""){
        document.getElementById("nacimiento").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("nacimiento").style.borderColor = ""; 
    }
    if(document.getElementById("sexo2").value == "0"){
        document.getElementById("sexo2").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("sexo2").style.borderColor = ""; 
    }
    if(valor > 0){
        document.getElementById("texto").innerText = ("Debe llenar los Datos obligatorios (*) para continuar");
        document.getElementById("titulo").style.backgroundColor = "#DC3831"; //Rojo
        document.getElementById("titulo").style.color = "white";
        document.getElementById("alert").style.display = "";
    }
}
function validar1(){
    if(document.getElementById("dispositivos").value == "1"){
        document.getElementById("contenedor1").style.display = "block";
    }else{
        document.getElementById("contenedor1").style.display = "none";
    }
}
function registro(){
    let valor = 0;
    if(document.getElementById("posee_cedula").value == "0"){
        document.getElementById("posee_cedula").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("posee_cedula").style.borderColor = ""; 
    }
    if(document.getElementById("cedula").value == ""){
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
    if(document.getElementById("nacimiento").value == ""){
        document.getElementById("nacimiento").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("nacimiento").style.borderColor = ""; 
    }
    if(document.getElementById("sexo").value == ""){
        document.getElementById("sexo").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("sexo").style.borderColor = ""; 
    }
    if(document.getElementById("telefono").value == ""){
        document.getElementById("telefono").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("telefono").style.borderColor = ""; 
    }
    if(document.getElementById("tipo_usuario").value == "0"){
        document.getElementById("tipo_usuario").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("tipo_usuario").style.borderColor = ""; 
    }
    if(document.getElementById("dispositivos").value == "0"){
        document.getElementById("dispositivos").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("dispositivos").style.borderColor = ""; 
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
    if(document.getElementById("pase").value == ""){
        document.getElementById("pase").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("pase").style.borderColor = ""; 
    }
    if(valor > 0){
        document.getElementById("texto").innerText = ("Debe llenar los Datos obligatorios (*) para continuar");
        document.getElementById("titulo").style.backgroundColor = "#DC3831"; //Rojo
        document.getElementById("titulo").style.color = "white";
        document.getElementById("alert").style.display = "block";
    }
}
function registrar_dispositivo(){
    let valor = 0;
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
    if(valor > 0){
        document.getElementById("texto").innerText = ("Debe llenar los Datos obligatorios (*) para continuar");
        document.getElementById("titulo").style.backgroundColor = "#DC3831"; //Rojo
        document.getElementById("titulo").style.color = "white";
        document.getElementById("alert").style.display = "block";
    }
}
function finalizar(){
    location.href = "index.php";
}
function poseecedula(){
    if(document.getElementById("posee_cedula").value == "1"){
        document.getElementById("contenedor2").style.display = "block";
    }else{
        document.getElementById("contenedor2").style.display = "none"; 
    }
}
function fecha(){
    let hoy = new Date();
    let fecha_nac = document.getElementById("nacimiento").value;
    let fecha = new Date(fecha_nac);
    let diferencia = hoy - fecha;
    let edad = Math.floor(diferencia / (1000 * 60 * 60 * 24 * 365.25));
    if (edad < 9) {
        document.getElementById("nacimiento").style.borderColor = "red";
        document.getElementById("texto").innerText = ("El usuario debe ser mayor a 8 años para ser registrado");
        document.getElementById("titulo").style.backgroundColor = "#DC3831"; //Rojo
        document.getElementById("titulo").style.color = "white";
        document.getElementById("alert").style.display = "block";
    }else{
        document.getElementById("nacimiento").style.borderColor = "";
    }
}