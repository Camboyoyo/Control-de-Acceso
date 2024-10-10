<?
    include("include/bd.php");
    session_start();

    /* Las conexiones a las base de datos son entes y sigefir para diferenciarlas entre ellas */

    $accion = $_REQUEST['accion'];

    /* en los echo 1 son para los mensajes y 2 para las funsiones bien ejecutadas */

    if($accion == 1){
        $cedula = $_REQUEST['cedula'];
        $nacionalidad = $_REQUEST['nacionalidad'];
        if($nacionalidad == "V"){
            $_SESSION['acceso_visita_nacionalidad'] = "VENEZOLANO";
        }else 
        if($nacionalidad == "E"){
            $_SESSION['acceso_visita_nacionalidad'] = "EXTRANJERO";
        }
        $_SESSION['acceso_visita_cedula'] = $cedula;
        /* Buscar a la persona en la base de datos del ministerio */
        $SQL1 = "SELECT * FROM public.personal WHERE cedula = '".$cedula."' AND nacionalidad = '".$nacionalidad."'";
        $row = pg_query($sigefir, $SQL1);
        /* Buscar a la persona en la base de datos del saime */
        $SQL2 = "SELECT * FROM public.saime WHERE numcedula = '".$cedula."' AND letra = '".$nacionalidad."'";
        $row2 = pg_query($sigefir, $SQL2);
        if ($persona_sigefir = pg_fetch_assoc($row)){
            $_SESSION['acceso_visita_nombres'] = $persona_sigefir["primer_nombre"]." ".$persona_sigefir["segundo_nombre"];
            $_SESSION['acceso_visita_apellidos'] = $persona_sigefir["primer_apellido"]." ".$persona_sigefir["segundo_apellido"];
            $_SESSION['acceso_visita_nacimiento'] = $persona_sigefir["fecha_nacimiento"];
            if($persona_sigefir["sexo"] == "F"){
                $_SESSION['acceso_visita_sexo'] = "FEMENINO";
            }else{
                $_SESSION['acceso_visita_sexo'] = "MASCULINO";
            }
        }else
        if ($persona_entes = pg_fetch_assoc($row2)){
            $_SESSION['acceso_visita_nombres'] = $persona_entes["primer_nombre"]." ".$persona_entes["segundo_nombre"];
            $_SESSION['acceso_visita_apellidos'] = $persona_entes["primer_apellido"]." ".$persona_entes["segundo_apellido"];
            $_SESSION['acceso_visita_nacimiento'] = $persona_entes["fechanac"];
            if($persona_entes["sexo"] == "F"){
                $_SESSION['acceso_visita_sexo'] = "FEMENINO";
            }else{
                $_SESSION['acceso_visita_sexo'] = "MASCULINO";
            }
        }else{
            echo "1 / EL usuario se deberá registrar";
        }
    }
?>