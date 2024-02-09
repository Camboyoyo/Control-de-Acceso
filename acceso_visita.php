<!-- HTML 5 Code -->
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
    <!--
        Falta añadirle un Favicon
        <link rel="shortcut icon" href="" type="image/x-icon">
    -->
</head>
<body>
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
        <form id="" name="" action="" method="POST">
            <div class="content-formulario">
                <img class="logo-2" src="imagenes/logo.png">  
                <!-- Título del logo -->
                <h1>Registro y Control de Visitantes</h1>
                <!-- Título del formulario 1 -->
                <h2>Datos de la Visita</h2>
                <!-- Campos obligatorios -->
                <label style="color: #BF1F13; font-size: 16px; float:right; text-align: right; margin-top:-35px; margin-bottom: 5px; font-weight: 500;"> Datos Obligatorios (*) </label>
                <!-- Línea divisora -->
                <div class="linea"></div>
                <!-- Inicio del registro -->
                <!-- Separador -->
                <div class="sep-2"></div>
                <!-- Datos personales del ususario -->
                <div class="container">
                    <div class="row">
                    <div class="col-6">
                            <label class="form-label" style="font-size: 15.3px;">Tipo de Usuario</label><span>*</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/trabajo.png" alt="">
                                </span>
                                <select id="tipo_visita" class="form-select" style="border-radius: 0 30px 30px 0;" aria-label="Default select example" name="tipo_visita" onchange="validar1()" required>
                                    <option value="0">Seleccione</option>
                                    <option value="1">Externo</option>
                                    <option value="2">Interno</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-6" id="obs_visita" style="display: none;">
                            <label class="form-label">Observación de la Visita</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/arroba.png" alt="">
                                </span>
                                <textarea name="observaciones3" id="observaciones" style="border-radius: 0 30px 30px 0; height: 20px" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div> -->
                        <div class="col-6" id="obs_visita2" style="display: none;">
                            <label class="form-label">Nombre de la Empresa</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/puesto2.png" alt="">
                                </span>
                                <input id="nombre_empresa" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. Papa Johns" name="nombre_empresa" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Motivo de la Visita</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/objetivos.png" alt="">
                                </span>
                                <input id="motivo_visita" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. entregar un dispositivo electrónico" name="motivo_visita" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Dependencia</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/puesto1.png" alt="">
                                </span>
                                <select id="dependencia" class="form-select" style="border-radius: 0 30px 30px 0;" aria-label="Default select example" name="dependencia" onchange="validar2()" required>
                                    <option value="0">Seleccione</option>
                                    <option value="1">Oficina de Gestión Humana</option>
                                    <option value="2">Oficina de Gestión al Ciudadano</option>
                                    <option value="3">Despacho del Ministro</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Persona a Visitar</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/user.png" alt="">
                                </span>
                                <input id="persona_visitar" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" name="persona_visitar" required>
                            </div>
                        </div>
                        <div class="col-6" id="obs_visita3" style="display: none;">
                            <label class="form-label">Extensión Telefónica</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/telefono.png" alt="">
                                </span>
                                <input id="extencion" maxlength="4" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. 1111" name="extencion" readonly required>
                            </div>
                        </div>
                        <div class="col-6" id="obs_visita" style="display: none;">
                            <label class="form-label">Piso a Visitar</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/puesto1.png" alt="">
                                </span>
                                <input id="piso_visita" maxlength="1" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. 4" name="piso_visita" readonly required>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Separador -->
                <div class="sep-2"></div>
                <!-- Línea divisora -->
                <h2 style="margin-top: 0;">Datos del Visitante</h2>
                <div class="linea"></div>
                <!-- Separador -->
                <div class="container">
                    <div class="row">
                        <div class="sep"></div>
                        <div class="col-6">
                            <label class="form-label">Nacionalidad</label><span> *</span><br>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/ciudadania1.png" alt="">
                                </span>
                                <select id="nacionalidad" class="form-select"  style="border-radius: 0 30px 30px 0;" aria-label="Default select example" name="snacionalidad" required>
                                    <option value="0">Seleccione</option>
                                    <option value="1">Venezolano(a)</option>
                                    <option value="2">Extranjero(a)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Cédula de Identidad</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/ci.png" alt="">
                                </span>
                                <input type="text" maxlength="8" class="form-control" id="cedula" placeholder="Ej. 10568953" name="cedula" required>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" onclick="buscar(1)" type="button" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: right; border-radius: 0 30px 30px 0" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                                        Buscar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Nombre(s)</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/user.png" alt="">
                                </span>
                                <input id="nombres" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. Antonio" name="nombres" readonly required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Apellido(s)</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/user.png" alt="">
                                </span>
                                <input id="apellidos" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. González"  name="apellidos" readonly required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Sexo</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/sexo.png" alt="">
                                </span>
                                <input id="sexo" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" readonly  name="sexo" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Teléfono Personal</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/telefono-inteligente.png" alt="">
                                </span>
                                <input id="telefono1" maxlength="11" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. 04120000000"  name="telefono1" required>
                            </div>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-6">
                            <label class="form-label" style="font-size: 15.3px;">¿Viene con Acompañante? (Menor de Edad)</label><span>*</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/users.png" alt="">
                                </span>
                                <select id="tipo_visitas_menor" class="form-select" style="border-radius: 0 30px 30px 0;" aria-label="Default select example" name="tipo_visitas_menor" onchange="validar3()" required>
                                    <option value="">Seleccione</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>

                        <!-- Menor de Edad -->
                        
                        <div id="obs_visita12" style="display: none;">
                            <h2 style="margin-top: 0;">Datos del Menor de Edad</h2>
                            <div class="linea"></div>
                            <div class="sep-2"></div>
                        </div>

                        <div class="col-6" id="obs_visita4" style="display: none;">
                            <label class="form-label" style="font-size: 15.3px;">¿Posee Cédula de Identidad?</label><span>*</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/users.png" alt="">
                                </span>
                                <select id="cedula_menor" class="form-select" style="border-radius: 0 30px 30px 0;" onchange="validar5()" aria-label="Default select example" name="cedula_menor" required>
                                    <option value="0">Seleccione</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6" id="obs_visita8" style="display: none;">
                            <label class="form-label">Cédula de Identidad </label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/ci.png" alt="">
                                </span>
                                <input type="text" maxlength="8" class="form-control" id="cedula_menor2" placeholder="Ej. 10568953" name="cedula_menor2" required>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" onclick="buscar(2)" type="button" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: right; border-radius: 0 30px 30px 0" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                                        Buscar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6" id="obs_visita5" style="display: none;">
                            <label class="form-label">Nombre(s)</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/users.png" alt="">
                                </span>
                                <input id="nombre_menor" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. Paul" name="nombre_menor" required>
                            </div>
                        </div>
                        <div class="col-6" id="obs_visita6" style="display: none;">
                            <label class="form-label">Apellido(s)</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/users.png" alt="">
                                </span>
                                <input id="apellido_menor" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. Rojas" name="apellido_menor" required>
                            </div>
                        </div>
                        <div class="col-6" id="obs_visita18" style="display: none;">
                            <label class="form-label">Fecha de Nacimiento</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/ci.png" alt="">
                                </span>
                                <input id="nacimiento_menor" type="date" class="form-control" style="border-radius: 0 30px 30px 0;" name="nacimiento_menor" required>
                            </div>
                        </div>
                        <div class="col-6" id="obs_visita22" style="display: none;">
                            <label class="form-label" style="font-size: 15.3px;">Sexo</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/sexo.png" alt="">
                                </span>
                                <select id="sexo_menor" class="form-select" style="border-radius: 0 30px 30px 0;" aria-label="Default select example" name="sexo_menor" required>
                                    <option value="0">Seleccione</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <center>
                                <button id="obs_visita17" type="button" onclick="agregar(1)" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: center; border-radius: 30px; display: none;" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                                    Registar Acompañante
                                </button>
                            </center>
                        </div>
                        <div class="col-12" id="tabla1" style="display: none;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Cédula de Identidad</th>
                                        <th scope="col">Nombre(s)</th>
                                        <th scope="col">Apellido(s)</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div id="obs_visita13" style="display: none;">
                            <div class="linea"></div>
                            <div class="sep-2"></div>
                        </div>

                        <!-- Acompañante mayor -->

                        <div class="col-3"></div>
                        <div class="col-6">
                            <label class="form-label" style="font-size: 15.3px;">¿Viene con Acompañante? (Mayor de Edad)</label><span>*</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/users.png" alt="">
                                </span>
                                <select id="tipo_visitas_mayor" class="form-select" style="border-radius: 0 30px 30px 0; appearance: none;" onchange="validar6()" aria-label="Default select example" name="tipo_visitas_mayor" required>
                                    <option value="">Seleccione</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>

                        <!-- Mayor de Edad -->

                        <div id="obs_visita14" style="display: none;">
                            <h2 style="margin-top: 0;">Datos del Mayor de Edad</h2>
                            <div class="linea"></div>
                            <div class="sep-2"></div>
                        </div>
                        <div class="col-6" id="obs_visita9" style="display: none;">
                            <label class="form-label">Cédula de Identidad</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/ci.png" alt="">
                                </span>
                                <input type="text" maxlength="8" class="form-control" id="cedula_mayor" placeholder="Ej. 10568953" name="cedula_mayor" required>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" onclick="buscar(3)" type="button" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: right; border-radius: 0 30px 30px 0" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                                        Buscar
                                    </button>
                                </div>
                                <!-- <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/users.png" alt="">
                                </span>
                                <input id="cedula_mayor" maxlength="8" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. 00000000" name="cedula_mayor" required> -->
                            </div>
                        </div>
                        <div class="col-6" id="obs_visita10" style="display: none;">
                            <label class="form-label">Nombre(s)</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/users.png" alt="">
                                </span>
                                <input id="nombre_mayor" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. Paul" name="nombre_mayor" required>
                            </div>
                        </div>
                        <div class="col-6" id="obs_visita11" style="display: none;">
                            <label class="form-label">Apellido(s)</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/users.png" alt="">
                                </span>
                                <input id="apellido_mayor" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. Rojas" name="apellido_mayor" required>
                            </div>
                        </div>
                        <div class="col-6" id="obs_visita19" style="display: none;">
                            <label class="form-label">Fecha de Nacimiento</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/ci.png" alt="">
                                </span>
                                <input id="nacimiento_mayor" type="date" class="form-control" style="border-radius: 0 30px 30px 0;" name="nacimiento_mayor" required>
                            </div>
                        </div>
                        <div class="col-6" id="obs_visita20" style="display: none;">
                            <label class="form-label" style="font-size: 15.3px;">Sexo</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/sexo.png" alt="">
                                </span>
                                <select id="sexo_mayor" class="form-select" style="border-radius: 0 30px 30px 0;" aria-label="Default select example" name="sexo_mayor" required>
                                    <option value="0">Seleccione</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6" id="obs_visita21" style="display: none;">
                            <label class="form-label">Teléfono Personal</label><span> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/telefono-inteligente.png" alt="">
                                </span>
                                <input id="telefono_mayor" maxlength="11" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. 04120000000" name="telefono_mayor" required>
                            </div>
                        </div>
                        <div>
                            <center>
                                <button id="obs_visita16" type="button" onclick="agregar(2)" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: center; border-radius: 30px; display: none;" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                                    Registar Acompañante
                                </button>
                            </center>
                        </div>
                        <div class="col-12" id="tabla2" style="display: none;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Cédula de Identidad</th>
                                        <th scope="col">Nombre(s)</th>
                                        <th scope="col">Apellido(s)</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div id="obs_visita15" style="display: none;">
                            <div class="linea"></div>
                            <div class="sep-2"></div>
                        </div>

                        <!-- Dispositivos Electrónicos -->

                        <h2 style="margin-top: 0;">Datos Adicionales</h2>
                        <div class="linea"></div>
                        <div class="sep-2"></div>
                        <div class="col-3"></div>
                        <div class="col-6">
                            <label class="form-label" style="font-size: 15.3px;">¿Trae consigo Dispositivos Electrónicos?</label><span>*</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/objetivos.png" alt="">
                                </span>
                                <select id="preguntas" class="form-select"  style="border-radius: 0 30px 30px 0;" aria-label="Default select example" name="preguntas" onchange="validar4()" required>
                                    <option value="">Seleccione</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-6">
                            <label class="form-label" style="font-size: 15.3px;">Nro. de Pase</label><span>*</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/objetivos.png" alt="">
                                </span>
                                <input id="pase" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. 1234" name="pase" required>
                            </div>
                        </div> -->
                        <!-- <div class="col-12" id="obs_visita7" style="display: none;">
                            <label class="form-label" style="font-size: 15.3px;">Detalle (Marca, Modelo, Serial, Bien Nacional)</label><span>*</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/informacion.png" alt="">
                                </span>
                                <textarea name="observaciones1" onKeyUp="mayusculas(this);" id="observaciones1" style="border-radius: 0 30px 30px 0; height: 20px" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div> -->

                        <!-- Dispositivos Electrónicos -->

                        <div class="container" id="obs_visita7" style="display: none;">
                            <div class="row">
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
                                <div class="col-6">
                                    <label class="form-label">Bien Nacional</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                            <img src="imagenes/favicon/informacion.png" alt="">
                                        </span>
                                        <input id="bien_nacional" maxlength="7" onKeyUp="mayusculas(this);" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. 4205640" name="bien_nacional" required>
                                    </div>
                                </div>
                                <div>
                                    <center>
                                        <button type="button" onclick="agregar(3)" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: center; border-radius: 30px;" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
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
                                                <th scope="col">Bien Nacional</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="linea"></div>
                                <div class="sep-2"></div>
                            </div>
                        </div>

                        <!-- Observaciones -->

                        <div class="col-12">
                            <label class="form-label">Observaciones</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/informacion.png" alt="">
                                </span>
                                <textarea name="observaciones2" onKeyUp="mayusculas(this);" id="observaciones2" style="border-radius: 0 30px 30px 0; height: 20px" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-6">
                            <label class="form-label" style="font-size: 15.3px;">Nro. de Pase</label><span>*</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="border-radius: 30px 0 0 30px;">
                                    <img src="imagenes/favicon/carnet-de-identidad.png" alt="">
                                </span>
                                <input type="text" class="form-control" id="pase" maxlength="4" placeholder="Ej. 1234" name="pase" required>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" onclick="registrar()" type="button" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: right; border-radius: 0 30px 30px 0" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";'>
                                        Registar Entrada
                                    </button>
                                </div>
                            </div>
                        </div>
                            <!-- input id="pase" type="text" class="form-control" style="border-radius: 0 30px 30px 0;" placeholder="Ej. 1234" name="pase" required> -->
                        <!-- </div>
                            <center>
                                <button class="sep-3" style="background-color: #46A2FD; color: #fff; border: 1px Solid #46A2FD; padding: 7px 22px; float: center; border-radius: 30px" onmouseout='this.style.color="#fff"; this.style.backgroundColor="#46A2FD"; this.style.border="1px Solid #46A2FD"' onmouseover='this.style.color="#46A2FD"; this.style.backgroundColor="#fff";' data-bs-toggle="tooltip" type="submit" onclick="registrar()">Registar Entrada</button>
                            </center>
                        </div> -->
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
                    <h3 class="sep-3" style="font-size: 16px; text-align:center">Dirección de Seguridad</h3>
                </div>
                <div class="col-6">
                    <h3 style="font-size: 16px">Oficina de Tecnología de la Información y la Comunicación (OTIC).</h3>
                    <h3 style="font-size: 16px">División Análisis y Desarrollo de Sistemas.</h3>
                    <h3 style="font-size: 16px">© 2023 Todos los Derechos Reservados.</h3>
                </div>
            </div>
        </div>
    </footer>
    <!-- Link's JavaScript Bootstrap -->
    <script src="css/bootstrap5.1.3/js/bootstrap.js"></script>
    <script src="css/bootstrap5.1.3/js/bootstrap.bundle.js"></script>
    <!-- Link's JavaScript -->
    <script src="js/validacion.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
</body>
</html>