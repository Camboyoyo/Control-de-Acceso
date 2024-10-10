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
    <!--
        Falta añadirle un Favicon
        <link rel="shortcut icon" href="" type="image/x-icon">
    -->
</head>
<body>
    <div id="alert" class="fondo_alerta" style="display: none;">
        <div class="alerta">
            <h4 id="titulo">Datos del Dispositivo</h4>
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
        <form id="" name="" action="" method="POST">
            <div class="content-formulario-3d" style="width: 70%;"> 
                <div class="content-formulario">
                    <!-- Título del logo -->
                    <h1>Registro y Control de Visitantes</h1>
                    <!-- Título del formulario 1 -->
                    <h4>Módulo de Salida - Datos del Visitante</h4>
                    <!-- Campos obligatorios -->
                    <label style="color: #BF1F13; font-size: 16px; float:right; text-align: right; margin-top:-35px; margin-bottom: 5px; font-weight: 500;"> Datos Obligatorios (*) </label>
                    <!-- Línea divisora -->
                    <hr>
                    <!-- Inicio del registro -->
                    <!-- Separador -->
                    <div class="sep-2"></div>
                    <div style="margin-left: 68%;" id="content_fecha">Fecha: <span id="dia"></span>-<span id="mes"></span>-<span id="year"></span> / Hora: <span id="horas"></span>:<span id="minutos"></span>:<span id="segundos"></span> <span id="ap"></span></div>
                    <!-- Datos personales del ususario -->
                    <div class="container">
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <label class="form-label" style="font-size: 15.3px; margin-left: 24%;">Cédula de Identidad</label><span> *</span>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                        <img src="imagenes/favicon/ci.png" alt="">
                                    </span>
                                    <input type="text" maxlength="8"class="form-control" id="cedula" placeholder="Ej. 10568953" name="cedula" required>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" onclick="buscar()" type="button" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: right; border-radius: 0 30px 30px 0" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                                            Buscar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" id="tabla">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" rowspan="2">Cédula de Identidad</th>
                                            <th scope="col" rowspan="2">Nombre(s) y Apellido(s)</th>
                                            <th scope="col" rowspan="2">Dependencia Visitada</th>
                                            <th scope="col" rowspan="2">¿Posee Dispositivos?</th>
                                            <th scope="col" rowspan="2">Hora de Entrada</th>
                                            <th scope="col" rowspan="2" style="padding: 8px 15px;">Hora de Salida</th>
                                            <th scope="col" rowspan="2">Observaciones</th>
                                            <th scope="col" rowspan="2"><input class="form-check-input" onclick="marcar_todo()" type="checkbox" value="" id="todo" style="cursor: pointer; border-color: grey; background-image: url(imagenes/favicon/salida.png); width: 20px; height: 20px"></th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center;">
                                        <tr class="table-secondary">
                                            <td>6523148</td>
                                            <td>Steven Paul Jobs</td>
                                            <td>Recursos Humanos</td>
                                            <td style="cursor: pointer;" onclick="mensaje(' - Marca: Vit ',' - Serial: 156SKIR51 ',' - Modelo: 85SD8EFD ')">si</td>
                                            <td>08:20 am</td>
                                            <td> - </td>
                                            <td><textarea name="observaciones" onKeyUp="mayusculas(this);" id="observaciones" style="height: 20px; border-radius: 30px; border-color: grey" class="form-control" cols="30" rows="10"></textarea></td>
                                            <td><input class="form-check-input" type="checkbox" value="" id="1" style="cursor: pointer; border-color: grey; background-image: url(imagenes/favicon/salida.png); width: 20px; height: 20px"></td>
                                        </tr>
                                        <tr>
                                            <td>35547963</td>
                                            <td>Leila Martinez Barbie</td>
                                            <td>Recursos Humanos</td>
                                            <td>no</td>
                                            <td>08:20 am</td>
                                            <td>10:15 am</td>
                                            <td><textarea name="observaciones" readonly onKeyUp="mayusculas(this);" id="observaciones" style="height: 20px; border-radius: 30px; border-color: grey" class="form-control" cols="30" rows="10">Ninguna</textarea></td>
                                            <td><input class="form-check-input" type="checkbox" value="" id="2" style="cursor: pointer; border-color: grey; background-image: url(imagenes/favicon/salida.png); width: 20px; height: 20px" checked disabled></td>
                                        </tr>
                                        <tr>
                                            <td>12545654</td>
                                            <td>Carolina Barrios</td>
                                            <td>Recursos Humanos</td>
                                            <td style="cursor: pointer;" onclick="mensaje(' - Marca: Lenovo ',' - Serial: 156SKIR51 ',' - Modelo: 85SD8EFD ')">si</td>
                                            <td>08:20 am</td>
                                            <td> - </td>
                                            <td><textarea name="observaciones" onKeyUp="mayusculas(this);" id="observaciones" style="height: 20px; border-radius: 30px; border-color: grey" class="form-control" cols="30" rows="10"></textarea></td>
                                            <td><input class="form-check-input" type="checkbox" value="" id="3" style="cursor: pointer; border-color: grey; background-image: url(imagenes/favicon/salida.png); width: 20px; height: 20px"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- <div class="col-12">
                                    <label class="form-label">Observaciones Generales</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" style="border-radius: 30px 0 0 30px; border-color: grey">
                                            <img src="imagenes/favicon/informacion.png" alt="">
                                        </span>
                                        <textarea name="observaciones" onKeyUp="mayusculas(this);" id="observaciones" style="border-radius: 0 30px 30px 0; height: 20px; border-color: grey" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                </div> -->
                                <!-- <div>
                                    <center>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: center; border-radius: 30px;" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                                            Registrar Salida
                                        </button>
                                    </center>
                                </div> -->
                            </div>  
                            <center>
                                <a href="index.php" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; float: center; border-radius: 30px" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="transparent";' class="btn btn-primary regresar">Regresar</a>
                            </center>                      
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
    <script src="css/bootstrap5.1.3/js/bootstrap.js"></script>
    <script src="css/bootstrap5.1.3/js/bootstrap.bundle.js"></script>
    <!-- Link's JavaScript -->
    <script src="js/salida.js"></script>
    <script src="js/reloj.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
</body>
</html>