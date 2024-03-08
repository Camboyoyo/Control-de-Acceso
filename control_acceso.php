<?
    session_start();

    $accion = $_REQUEST['accion'];

    if($accion == 1){
        $cedula = $_REQUEST['cedula'];
        $nacionalidad = $_REQUEST['nacionalidad'];
        if($nacionalidad == "1"){
            $_SESSION['nacionalidad'] = "VENEZOLANO";
        }else 
        if($nacionalidad == "2"){
            $_SESSION['nacionalidad'] = "EXTRANJERO";
        }
        $_SESSION['cedula'] = $cedula;
        echo $cedula;
    }
?>