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
document.getElementById("nombre_mayor").addEventListener("keydown", soloLetras);
document.getElementById("apellido_mayor").addEventListener("keydown", soloLetras);

/* soloNumeros */
document.getElementById("piso_visita").addEventListener("keydown", soloNumeros);
document.getElementById("extencion").addEventListener("keydown", soloNumeros);
document.getElementById("cedula").addEventListener("keydown", soloNumeros);
document.getElementById("telefono1").addEventListener("keydown", soloNumeros);
document.getElementById("cedula_menor2").addEventListener("keydown", soloNumeros);
document.getElementById("cedula_mayor").addEventListener("keydown", soloNumeros);
document.getElementById("pase").addEventListener("keydown", soloNumeros);
document.getElementById("telefono_mayor").addEventListener("keydown", soloNumeros);
document.getElementById("bien_nacional").addEventListener("keydown", soloNumeros);

function validar1(){
    /* if(document.getElementById("tipo_visita").value <= 1){
        document.getElementById("obs_visita2").style.display = "None";
    }else */
    /* if(document.getElementById("tipo_visita").value == 5 || document.getElementById("tipo_visita").value == 1){
        document.getElementById("obs_visita2").style.display = "Block";
    }else{
        document.getElementById("obs_visita2").style.display = "None";
    } */
}
function validar2(){
    if(document.getElementById("dependencia").value == 0){
        document.getElementById("obs_visita3").style.display = "None";
        document.getElementById("obs_visita").style.display = "None";
    }else{
        document.getElementById("obs_visita3").style.display = "Block";
        document.getElementById("obs_visita").style.display = "Block";
    }
}
function validar3(){
    if(document.getElementById("tipo_visitas_menor").value == 0 || document.getElementById("tipo_visitas_menor").value == 2){
        document.getElementById("obs_visita4").style.display = "None";
        document.getElementById("obs_visita5").style.display = "None";
        document.getElementById("obs_visita6").style.display = "None";
        document.getElementById("obs_visita8").style.display = "None";
        document.getElementById("obs_visita12").style.display = "None";
        document.getElementById("obs_visita13").style.display = "None";
        document.getElementById("obs_visita17").style.display = "None";
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
        document.getElementById("obs_visita18").style.display = "Block";
        document.getElementById("obs_visita22").style.display = "Block";
        document.getElementById("tabla1").style.display = "Block";
        if(document.getElementById("cedula_menor").value == 0 || document.getElementById("cedula_menor").value == 2){
            document.getElementById("obs_visita8").style.display = "None";
        }else{
            document.getElementById("obs_visita8").style.display = "Block";
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
    if(document.getElementById("tipo_visitas_mayor").value == 0 || document.getElementById("tipo_visitas_mayor").value == 2){
        document.getElementById("obs_visita9").style.display = "None";
        document.getElementById("obs_visita10").style.display = "None";
        document.getElementById("obs_visita11").style.display = "None";
        document.getElementById("obs_visita14").style.display = "None";
        document.getElementById("obs_visita15").style.display = "None";
        document.getElementById("obs_visita16").style.display = "None";
        document.getElementById("obs_visita19").style.display = "None";
        document.getElementById("obs_visita20").style.display = "None";
        document.getElementById("obs_visita21").style.display = "None";
        document.getElementById("tabla2").style.display = "None";
    }else{
        document.getElementById("obs_visita9").style.display = "Block";
        document.getElementById("obs_visita10").style.display = "Block";
        document.getElementById("obs_visita11").style.display = "Block";
        document.getElementById("obs_visita14").style.display = "Block";
        document.getElementById("obs_visita15").style.display = "Block";
        document.getElementById("obs_visita16").style.display = "Block";
        document.getElementById("obs_visita19").style.display = "Block";
        document.getElementById("obs_visita20").style.display = "Block";
        document.getElementById("obs_visita21").style.display = "Block";
        document.getElementById("tabla2").style.display = "Block";
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
    }else
    if(e == 2){
        if(document.getElementById("cedula_mayor").value == ""){
            document.getElementById("cedula_mayor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("cedula_mayor").style.borderColor = "";
        }
        if(document.getElementById("nombre_mayor").value == ""){
            document.getElementById("nombre_mayor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("nombre_mayor").style.borderColor = "";
        }
        if(document.getElementById("apellido_mayor").value == ""){
            document.getElementById("apellido_mayor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("apellido_mayor").style.borderColor = "";
        }
        if(document.getElementById("nacimiento_mayor").value == ""){
            document.getElementById("nacimiento_mayor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("nacimiento_mayor").style.borderColor = "";
        }
        if(document.getElementById("sexo_mayor").value == "0"){
            document.getElementById("sexo_mayor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("sexo_mayor").style.borderColor = "";
        }
        if(document.getElementById("telefono_mayor").value == ""){
            document.getElementById("telefono_mayor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("telefono_mayor").style.borderColor = "";
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
    }
    if(valor != 0){
        alert("Debe llenar los campos obligatorios (*) para continuar");
    }
}
function buscar(e){
    let valor = 0;
    if(e == 1){
        if(document.getElementById("nacionalidad").value == 0){
            document.getElementById("nacionalidad").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("nacionalidad").style.borderColor = "";
        }
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
    }else
    if(e == 3){
        if(document.getElementById("cedula_mayor").value == ""){
            document.getElementById("cedula_mayor").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("cedula_mayor").style.borderColor = "";
        }
    }
    if(valor != 0){
        alert("Debe llenar los campos obligatorios (*) para continuar");
    }    
}
function registrar(){
    let valor = 0;
    if(document.getElementById("nacionalidad").value == 0){
        document.getElementById("nacionalidad").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("nacionalidad").style.borderColor = "";
    }
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
    if(document.getElementById("tipo_visitas_mayor").value == ""){
        document.getElementById("tipo_visitas_mayor").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("tipo_visitas_mayor").style.borderColor = "";
    }
    if(document.getElementById("tipo_visita").value == 0){
        document.getElementById("tipo_visita").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("tipo_visita").style.borderColor = "";
        if(document.getElementById("tipo_visita").value == 2){
            if(document.getElementById("nombre_empresa").value == ""){
                document.getElementById("nombre_empresa").style.borderColor = "red";
                valor++;
            }else{
                document.getElementById("nombre_empresa").style.borderColor = "";
            }
        }
    }
    if(document.getElementById("motivo_visita").value == ""){
        document.getElementById("motivo_visita").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("motivo_visita").style.borderColor = "";
    }
    if(document.getElementById("pase").value == ""){
        document.getElementById("pase").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("pase").style.borderColor = "";
    }
    if(document.getElementById("dependencia").value == 0){
        document.getElementById("dependencia").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("dependencia").style.borderColor = "";
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
    if(document.getElementById("tipo_visitas_mayor").value == 0){
        document.getElementById("tipo_visitas_mayor").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("tipo_visitas_mayor").style.borderColor = "";
        if(document.getElementById("cedula_mayor").value == ""){
            document.getElementById("cedula_mayor").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("cedula_mayor").style.borderColor = "";
        }
        if(document.getElementById("nombre_mayor").value == ""){
            document.getElementById("nombre_mayor").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("nombre_mayor").style.borderColor = "";
        }
        if(document.getElementById("apellido_mayor").value == ""){
            document.getElementById("apellido_mayor").style.borderColor = "red";
            valor++;
        }else{
            document.getElementById("apellido_mayor").style.borderColor = "";
        }
        if(document.getElementById("nacimiento_mayor").value == ""){
            document.getElementById("nacimiento_mayor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("nacimiento_mayor").style.borderColor = "";
        }
        if(document.getElementById("sexo_mayor").value == "0"){
            document.getElementById("sexo_mayor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("sexo_mayor").style.borderColor = "";
        }
        if(document.getElementById("telefono_mayor").value == ""){
            document.getElementById("telefono_mayor").style.borderColor = "Red";
            valor++;
        }else{
            document.getElementById("telefono_mayor").style.borderColor = "";
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
    if(valor != 0){
        alert("Debe llenar los campos obligatorios (*) para continuar");
    }
}
function mayusculas(e) {
    let aux = e.value = e.value.toUpperCase();
    aux.preventDefault();
}