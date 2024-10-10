function buscar(){
    let valor = 0;
    if(document.getElementById("fecha1").value == ""){
        document.getElementById("fecha1").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("fecha1").style.borderColor = ""; 
    }
    if(document.getElementById("fecha2").value == ""){
        document.getElementById("fecha2").style.borderColor = "red";
        valor++;
    }else{
        document.getElementById("fecha2").style.borderColor = ""; 
    }
    if(valor > 0){
        document.getElementById("texto").innerText = ("Debe llenar los Datos obligatorios (*) para continuar");
        document.getElementById("titulo").style.backgroundColor = "#DC3831"; //Rojo
        document.getElementById("titulo").style.color = "white";
        document.getElementById("alert").style.display = "block";
    }
}
function cerrar(){
    document.getElementById("alert").style.display = "none";
}