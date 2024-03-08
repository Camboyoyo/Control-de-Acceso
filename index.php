<?
    session_start();
    $_SESSION['recarga'] = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Acceso de Visitantes</title>
    <!-- Bootstrap Link's -->
    <link rel="stylesheet" href="css/bootstrap5.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap5.1.3/css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap5.1.3/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap5.1.3/css/bootstrap-utilities.css">
    <link rel="stylesheet" href="css/bootstrap5.1.3/css/bootstrap.rtl.css">
    <!-- Link's CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
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
    <body>
        <div class="alert" id="alert" style="margin-top: 18%;">
            <h4 class="titulo" id="titulo">Advertencia</h4>
            <p id="texto" class="texto"></p>
            <center>
                <button type="button" class="btn btn-primary" onclick="cerrar()" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: center; border-radius: 30px;" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                    Cerrar
                </button>
            </center>
        </div>
        <!-- <a href="vista.php" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; float: center; border-radius: 30px; margin-top: 50px" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="transparent";' class="btn btn-primary regresar"><img onmouseover='this.style.backgroundColor="#46A2FD";' src="imagenes/favicon/regresar.png"></a> -->
            <div class="card" style="border-radius: 30px; margin-top: 70px; width: 33%; margin-bottom: 20px; margin-left: 34%">
                <div class="card-body">
                    <center>
                        <img style="width: 40%;" src="imagenes/logo.png">
                        <div class="sep"></div>
                        <h3 class="card-title" style="color: rgb(35, 96, 249); font-size: 30px; text-align: center; width: 100%; margin-top: 0">Registro y Control de Visitantes</h3>
                        <h5 style="color: #BF1F13; font-size: 16px; font-weight: 500; width: 100%"> Datos Obligatorios (*) </h5>
                        <div class="linea"></div>
                    </center>
                    <div style="width: 100%; height: 8px"></div>
                    <div class="col-12">
                        <label class="form-label">Dependencia</label><span> *</span>
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                <img src="imagenes/favicon/puesto1.png" alt="">
                            </span>
                            <select id="dependencia" class="form-select" onchange="validar()" style="border-radius: 0 30px 30px 0;" aria-label="Default select example" name="dependencia" required>
                                <option value="0">Seleccione</option>
                                <option value="1">Oficina de Gestión Humana</option>
                                <option value="2">Oficina de Gestión al Ciudadano</option>
                                <option value="3">Despacho del Ministro</option>
                            </select>
                        </div>
                    </div>
                    <div class="container" style="display: none;" id="grupo">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">Punto de Control</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/telefono.png" alt="">
                                    </span>
                                    <input id="punto_control" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. Torre Norte" name="punto_control" readonly required>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Extensión Telefónica</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/telefono.png" alt="">
                                    </span>
                                    <input id="extencion" maxlength="7" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. 1111111" name="extencion" readonly required>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Teléfono de Dependencia</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/telefono.png" alt="">
                                    </span>
                                    <input id="telefono" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. 02128586620" name="telefono" readonly required>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Piso a Visitar</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/puesto1.png" alt="">
                                    </span>
                                    <input id="piso_visita" maxlength="1" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. 4" name="piso_visita" readonly required>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Motivo de la Visita</label><span> *</span>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/objetivos.png" alt="">
                                    </span>
                                    <textarea name="motivo_visita" onKeyUp="mayusculas(this);" id="motivo_visita" class="form-control" style="border-radius: 0 30px 30px 0; min-height: 39px; height: 39px" placeholder="Ej. entregar un dispositivo electrónico" required></textarea>
                                    <!-- <input id="motivo_visita" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. entregar un dispositivo electrónico" name="motivo_visita" required> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Persona a Visitar</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/user.png" alt="">
                                    </span>
                                    <input id="persona_visitar" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" name="persona_visitar" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <center>
                        <div class="col-9">
                            <label class="form-label">¿Será atendido?</label><span> *</span>
                            <div class="input-group mb-3" style="margin-left: 20%;">
                                <div class="form-check form-check-inline">
                                    <input style="border-color: gray;" class="form-check-input" type="radio" onclick="observar()" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input style="border-color: gray;" class="form-check-input" type="radio" onclick="observar()" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                    </center>
                    <div class="col-12" style="display: none;" id="observacion">
                        <label class="form-label">Observaciones</label><span> *</span>
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                <img src="imagenes/favicon/informacion.png" alt="">
                            </span>
                            <textarea name="observaciones" onKeyUp="mayusculas(this);" id="observaciones" style="border-radius: 0 30px 30px 0; height: 20px" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-12" id="grupo2" style="display: none;">
                        <label class="form-label" style="text-align: left; float: left">Ingrese el número de la Cédula de Identidad</label><span style="margin-left: 4px;"> *</span>
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                <img src="imagenes/favicon/ci.png" alt="">
                            </span>
                            <select class="form-select" style="padding-right: 0;" id="nacionalidad">
                                <option value="0" selected>Seleccione</option>
                                <option value="1">Venezolano</option>
                                <option value="2">Extranjero</option>
                            </select>
                            <input id="cedula" onKeyUp="mayusculas(this);" type="text" class="form-control" maxlength="8" placeholder="Ej. 00000000" name="cedula" required>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" onclick="ingresar(nacionalidad.value,cedula.value,dependencia.value,motivo_visita.value)" type="button" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: center; border-radius: 0 30px 30px 0;" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                                    Buscar
                                </button>
                            </div>
                        </div>
                    </div>
                    <center>
                        <a href="vista.php" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; border-radius: 30px" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="transparent";' class="btn btn-primary regresar">
                            Regresar
                        </a>
                        <button id="observacion2" onclick="registrar()" type="button" class="btn btn-primary regresar" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; border-radius: 30px; display: none" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                            Registrar
                        </button>
                        <a href="salida_visita.php" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; border-radius: 30px;" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="transparent";' class="btn btn-primary regresar">
                            <img onmouseover='this.style.backgroundColor="#46A2FD";' src="imagenes/favicon/salida.png">
                        </a>
                    </center>
                </div>
            </div>
    </body>
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
    <script src="js/inicio.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
</body>
</html>