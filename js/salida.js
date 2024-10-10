function mayusculas(e) {
    let aux = e.value = e.value.toUpperCase();
    aux.preventDefault();
}
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
/* document.getElementById("nombre_menor").addEventListener("keydown", soloLetras);
document.getElementById("apellido_menor").addEventListener("keydown", soloLetras); */

/* soloNumeros */
document.getElementById("cedula").addEventListener("keydown", soloNumeros);

function buscar(){
    let valor = 0;
    if(document.getElementById("nacionalidad").value == "0"){
        document.getElementById("nacionalidad").style.borderColor = "Red";
        valor++;
    }else{
        document.getElementById("nacionalidad").style.borderColor = "";
    }
    if(document.getElementById("cedula").value == ""){
        document.getElementById("cedula").style.borderColor = "Red";
        valor++;
    }else{
        document.getElementById("cedula").style.borderColor = "";
    }
    if(valor > 0){
        document.getElementById("texto").innerText = ("Debe llenar los Datos obligatorios (*) para continuar");
        document.getElementById("titulo").innerText = ("Advertencia");
        document.getElementById("titulo").style.backgroundColor = "#DC3831"; //Rojo
        document.getElementById("titulo").style.color = "white";
        document.getElementById("alert").style.display = "block";
    }/* else{
        document.getElementById("tabla").style.display = "Block";
    } */
}
function mensaje(dato1, dato2, dato3){
    document.getElementById("titulo").innerText = ("Datos del Dispositivo");
    document.getElementById("texto").innerText = dato1+"\n"+dato2+"\n"+dato3;
    document.getElementById("titulo").style.backgroundColor = "#46A2FD"; //Azul
    document.getElementById("titulo").style.color = "white";
    document.getElementById("alert").style.display = "block";
}
function cerrar(){
    document.getElementById("alert").style.display = "none";
}
/* function agregar(){
    let valor1 = 0;
    let valor2 = 0;
    let valor3 = 0;
    for(i = 0; i <= 16; i++){
        let input = document.getElementById(i);
        if(input){
            if(input.checked){
                alert("el número "+i+" ha sido selecionado");
            }else{
                valor1++;
            }
        }else{
            valor2++;
        }
    }
    valor3 = valor1+valor2;
    if(valor3 == 17){
        alert("No se ha selecionado ningun campo");
    }
} */
function marcar_todo(){
    if(document.getElementById("todo").checked){
        for(i = 0; i <= 16; i++){
            let input = document.getElementById(i);
            if(input){
                if(!input.checked){
                    input.checked = true;
                }
            }
        }
    }else{
        for(i = 0; i <= 16; i++){
            let input = document.getElementById(i);
            if(input){
                if(!input.disabled){
                    if(input.checked){
                        input.checked = false;
                    }
                }
            }
        }
    }
}