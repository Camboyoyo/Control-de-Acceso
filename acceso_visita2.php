<!-- HTML 5 Code -->
<?
    session_start();
    if($_SESSION['acceso_visita_cedula'] == ""){
        exit(header('Location: index.php'));
    }
    $_SESSION['acceso_visista_recarga']++;
?>
<!DOCTYPE html>
<html lang="Es-es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Control de Acceso de Visitantes </title>
    <!-- Bootstrap Link's -->
    <link rel="stylesheet" href="css/bootstrap5.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap5.1.3/css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap5.1.3/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap5.1.3/css/bootstrap-utilities.css">
    <link rel="stylesheet" href="css/bootstrap5.1.3/css/bootstrap.rtl.css">
    <!-- Link's CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/alerta.css">
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <!--
        Falta añadirle un Favicon
        <link rel="shortcut icon" href="" type="image/x-icon">
    -->
</head>
<body>
    <div id="alert" class="fondo_alerta" style="display: none;">
        <div class="alerta">
            <h4 id="titulo" style="margin-top: 0;">Advertencia</h4>
            <p id="texto"></p>
            <div class="sep"></div>
            <center>
                <button type="button" class="btn btn-primary" onclick="cerrar()" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: center; border-radius: 30px;" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                    Cerrar
                </button>
            </center>
            <div class="sep"></div>
        </div>
    </div>
    <!-- <div class="alert" id="alert" style="margin-top: 18%;">
        <h4 class="titulo" id="titulo">Advertencia</h4>
        <p id="texto" class="texto"></p>
        <center>
            <button type="button" class="btn btn-primary" onclick="cerrar()" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: center; border-radius: 30px;" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                Cerrar
            </button>
        </center>
    </div> -->
    <!-- Sección de foto (Es un fallo exitoso) -->
    <!-- <section class="foto" id="foto" style="display: none;">
        <div class="content">
            <video id="video"></video>
        </div>
        <div class="content">
            <canvas id="canvas" style="width: 100%; height: 100%;">
            </canvas>
        </div>
        <center>
            <button type="button" class="btn btn-primary" id="foto_boton" onclick="foto()" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: center; border-radius: 30px;" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                Foto
            </button>
            <button type="button" class="btn btn-primary" onclick="foto_cerrar()" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: center; border-radius: 30px;" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                Cerrar
            </button>
        </center>
    </section> -->
    <!-- Header -->
    <header>
        <!-- NavBar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid ">
                <div class="logo" style="margin-left: 3%">
                    <img style="width:100%; height:100%;" src="imagenes/cintillo_institucional.jpg">
                </div>
            </div>
        </nav>
    </header>
    <!-- Main -->
    <main>
        <!-- <a href="index.php" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; float: center; border-radius: 30px" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="transparent";' class="btn btn-primary regresar"><img onmouseover='this.style.backgroundColor="#46A2FD";' src="imagenes/favicon/regresar.png"></a> -->
        <form id="" name="" action="" method="POST" enctype="multipart/form-data">
            <div class="content-formulario-3d"> 
                <div class="content-formulario"> 
                    <!-- Título del logo -->
                    <h1>Registro y Control de Visitantes</h1>
                    <!-- Título del formulario 1 -->
                    <h4>Módulo de Entrada - Datos del Visitante</h4>
                    <!-- Campos obligatorios -->
                    <label style="color: #BF1F13; font-size: 16px; float:right; text-align: right; margin-top:-35px; margin-bottom: 5px; font-weight: 500;"> Datos Obligatorios (*) </label>
                    <!-- Línea divisora -->
                    <hr>
                    <!-- Inicio del registro -->
                    <!-- Separador -->
                    <div class="sep-2"></div>
                    <!-- Separador -->
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">Adjuntar Foto</label><span> *</span>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/user.png" alt="">
                                    </span>
                                    <input id="foto" type="file" class="form-control" style="border-radius: 0 30px 30px 0;" readonly required>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label" style="font-size: 15.3px;">¿Posee Cédula de Identidad?</label><span> *</span>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/users.png" alt="">
                                    </span>
                                    <select id="posee_cedula" class="form-select" onchange="poseecedula()" style="border-radius: 0 30px 30px 0;" aria-label="Default select example" name="posee_cedula" required <?if(isset($_SESSION['acceso_visita_cedula'])){?>disabled<?}?>>
                                        <option value="0">Seleccione</option>
                                        <option value="1" <?if(isset($_SESSION['acceso_visita_cedula'])){?>selected<?}?>>Si</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6" id="contenedor2">
                                <label class="form-label">Cédula de Identidad</label><span> *</span>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/ci.png" alt="">
                                    </span>
                                    <input type="text" class="form-control" id="nacionalidad" value="<? echo $_SESSION['acceso_visita_nacionalidad'];?>" readonly>
                                    <input type="text" maxlength="8" class="form-control" id="cedula" style="border-radius: 0 30px 30px 0;" placeholder="Ej. 10568953" name="cedula" required value="<? echo $_SESSION['acceso_visita_cedula']; ?>" readonly>
                                </div>
                            </div>
                            <!-- <div class="col-6">
                                
                            </div> -->
                            <!-- <canvas class="content-2" id="canvas2" onclick="getVideo()">
                            </canvas> -->
                            <div class="col-6">
                                <label class="form-label">Nombre(s)</label><span> *</span>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/user.png" alt="">
                                    </span>
                                    <input id="nombres" onKeyUp="mayusculas(this);" value="<? echo $_SESSION['acceso_visita_nombres']; ?>" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. Antonio" name="nombres" required  <? if (isset($_SESSION['acceso_visita_nombres'])){?>readonly <?}?>>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Apellido(s)</label><span> *</span>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/user.png" alt="">
                                    </span>
                                    <input id="apellidos" onKeyUp="mayusculas(this);" value="<? echo $_SESSION['acceso_visita_apellidos'] ?>" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. González"  name="apellidos"required <? if (isset($_SESSION['acceso_visita_apellidos'])){?>readonly <?}?>>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Fecha de Nacimiento</label><span> *</span>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/ci.png" alt="">
                                    </span>
                                    <input id="nacimiento" onblur="fecha()" type="date" value="<? echo $_SESSION['acceso_visita_nacimiento']; ?>" class="form-control" style="border-radius: 0 30px 30px 0;" name="nacimiento" required <? if (isset($_SESSION['acceso_visita_nacimiento'])){?>readonly <?}?>>
                                </div>
                            </div>
                            <?if ($_SESSION['acceso_visita_nombres'] != ""){?>
                            <div class="col-6">
                                <label class="form-label">Sexo</label><span> *</span>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/sexo.png" alt="">
                                    </span>
                                    <input id="sexo" onKeyUp="mayusculas(this);" value="<? echo $_SESSION['acceso_visita_sexo']; ?>" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" name="sexo" required <? if (isset($_SESSION['acceso_visita_sexo'])){?>readonly <?}?>>
                                </div>
                            </div>
                            <?}else{?>
                                <div class="col-6">
                                <label class="form-label">Sexo</label><span> *</span>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/sexo.png" alt="">
                                    </span>
                                    <select id="sexo2" class="form-select" style="border-radius: 0 30px 30px 0;" aria-label="Default select example" name="sexo2" required>
                                        <option value="0">Seleccione</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <?}?>
                            <?if ($_SESSION['acceso_visita_nombres'] == ""){?>
                                <center>
                                    <a href="index.php" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; float: center; border-radius: 30px" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="transparent";' class="btn btn-primary regresar">Regresar</a>
                                    <button type="button" onclick="guardar()" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: center; border-radius: 30px;" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                                        Guardar
                                    </button>
                                </center>
                            <?}?>
                            <?if ($_SESSION['acceso_visita_nombres'] != ""){?>
                                <div class="col-6">
                                    <label class="form-label">Teléfono Personal</label><span> *</span>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                            <img src="imagenes/favicon/telefono-inteligente.png" alt="">
                                        </span>
                                        <input id="telefono" maxlength="11" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. 04120000000"  name="telefono" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" style="font-size: 15.3px;">Tipo de Usuario</label><span> *</span>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                            <img src="imagenes/favicon/trabajo.png" alt="">
                                        </span>
                                        <select id="tipo_usuario" class="form-select" style="border-radius: 0 30px 30px 0;" aria-label="Default select example" name="tipo_usuario" required disabled>
                                            <option value="0">Seleccione</option>
                                            <option value="1" selected>Externo</option>
                                            <option value="2">Interno</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Entidad de Trabajo</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                            <img src="imagenes/favicon/puesto2.png" alt="">
                                        </span>
                                        <input id="nombre_empresa" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. Papa Johns" name="nombre_empresa" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Cargo</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                            <img src="imagenes/favicon/puesto2.png" alt="">
                                        </span>
                                        <input id="cargo" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. Diseñador Gráfico" name="cargo" required>
                                    </div>
                                </div>
                                <!-- <div class="col-3"></div> -->
                                <div class="col-6">
                                    <label class="form-label" style="font-size: 15.3px;">¿Trae consigo Dispositivos Electrónicos?</label><span> *</span>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                            <img src="imagenes/favicon/objetivos.png" alt="">
                                        </span>
                                        <select id="dispositivos" onchange="validar1()" class="form-select" style="border-radius: 0 30px 30px 0;" aria-label="Default select example" name="dispositivos" required>
                                            <option value="0">Seleccione</option>
                                            <option value="1">Si</option>
                                            <option value="2">No</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Dispositivos Electrónicos -->

                                <div class="container" id="contenedor1" style="display: none;">
                                    <div class="row">
                                        <div class="linea"></div>
                                        <div class="col-6">
                                            <label class="form-label">Marca</label><span> *</span>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                                    <img src="imagenes/favicon/informacion.png" alt="">
                                                </span>
                                                <input id="marca" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. Lenovo" name="marca" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Modelo</label><span> *</span>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                                    <img src="imagenes/favicon/informacion.png" alt="">
                                                </span>
                                                <input id="modelo" onKeyUp="mayusculas(this);" maxlength="10" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. YSKMF45692" name="modelo" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Serial</label><span> *</span>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                                    <img src="imagenes/favicon/informacion.png" alt="">
                                                </span>
                                                <input id="serial" onKeyUp="mayusculas(this);" maxlength="16" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. ASF4511553120000" name="serial" required>
                                            </div>
                                        </div>
                                        <div>
                                            <center>
                                                <button type="button" class="btn btn-primary" onclick="registrar_dispositivo()" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: center; border-radius: 30px;" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                                                    Registar Dispositivo Electrónico
                                                </button>
                                            </center>
                                        </div>
                                        <div class="col-12">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Marca</th>
                                                        <th scope="col">Modelo</th>
                                                        <th scope="col">Serial</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div class="linea"></div>
                                        <div class="sep-2"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Observaciones</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                            <img src="imagenes/favicon/informacion.png" alt="">
                                        </span>
                                        <textarea name="observaciones2" onKeyUp="mayusculas(this);" id="observaciones2" style="border-radius: 0 30px 30px 0; height: 20px" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <center>
                                    <div class="col-6">
                                        <label class="form-label" style="font-size: 15.3px;">Nro. de Pase</label><span> *</span>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                                <img src="imagenes/favicon/carnet-de-identidad.png" alt="">
                                            </span>
                                            <input type="text" class="form-control" onKeyUp="mayusculas(this);" id="pase" maxlength="4" placeholder="Ej. 1234" name="pase" required>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" onclick="registro()" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: right; border-radius: 0 30px 30px 0" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                                                    Registrar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </center>
                                <div class="col-12">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col" style="width: 20%;">Cédula de Identidad</th>
                                                <th scope="col">Nombre(s)</th>
                                                <th scope="col">Apellido(s)</th>
                                                <th scope="col">Foto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-secondary">
                                                <td> 1 </td>
                                                <td style="text-align: center;"> V 30699868 </td>
                                                <td> Roberto Daniel </td>
                                                <td> Contreras Betancourt </td>
                                                <td style="width: 15%; padding: 0;"><img src="imagenes/personas/30699868.jpg" alt=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <center>
                                    <a href="index.php" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; float: center; border-radius: 30px" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="transparent";' class="btn btn-primary regresar">Regresar</a>
                                    <button type="button" class="btn btn-primary" onclick="finalizar()" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: center; border-radius: 30px;" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                                        Finalizar
                                    </button>
                                </center>
                            <?}?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <!-- Footer -->
    <footer>
        <div class="sep"></div>
        <div class="container" style="color: #fff">
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-6" style="border-right: 1px solid white;">
                    <h3 class="sep-3" style="font-size: 16px; text-align:center">Dirección de Seguridad.</h3>
                </div>
                <div class="col-6">
                    <h3 style="font-size: 16px">Oficina de Tecnología de la Información y la Comunicación (OTIC).</h3>
                    <h3 style="font-size: 16px">División de Análisis y Desarrollo de Sistemas.</h3>
                    <h3 style="font-size: 16px">© 2024 Todos los Derechos Reservados.</h3>
                </div>
            </div>
        </div>
    </footer>
    <!-- Link's JavaScript Bootstrap -->
    <script src="css/bootstrap5.1.3/js/bootstrap.js"></script>
    <script src="css/bootstrap5.1.3/js/bootstrap.bundle.js"></script>
    <!-- Link's JavaScript -->
    <script defer src="js/validacion2.js"></script>
    <script defer src="js/jquery-3.7.1.min.js"></script>
</body>
</html>