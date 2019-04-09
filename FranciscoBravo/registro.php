<?php
include('./lib/constantes.php');
include('./lib/atencion.php');

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>BIENSANITOS</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div id="contenedor">
            <div id="head">
                <div color="blue" id="titulositio">Clinica Bien Sanitos</div>
                <div id="titulo">Registro</div>
                <div id="menunav"><?php include('menunav.php'); ?></div>
            </div>
            <div id="contenidos">
                <div id="contenido">
                    <!--inicio formulario-->
                    <form name="formRegistro" class="text-center border border-light p-5" action="lib/recepcionregistro.php" method="post">
                        <p class="h4 mb-4">Registro</p>
                        <!-- Rut -->
                        <input type="text" id="txtRut" name="txtRut" class="form-control mb-4" placeholder="Rut">
                        <!-- Nombre -->
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control mb-4" placeholder="Nombre">
                        <!-- Tipo de Atencion -->
                        <label>Tipo de Atencion</label>
                        <select id="ddlTipoAtencion"class="browser-default custom-select mb-4">
                            <option value="0">Escoja una opcion</option>
                            <option value="1">Desarrollador Dolores Leves</option>
                            <option value="2">Complicaciones Menores</option>
                            <option value="3">Grave</option>
                            <option value="4">Muy Grave</option>
                        </select>
                        <!-- Nombre especialista -->
                        <input type="text" id="txtNombreEsp" name="txtNombreEsp" class="form-control mb-4" placeholder="Nombre Especialista Responsable">
                        <!-- Comentarios -->
                        <div class="form-group">
                            <input type="text" id="txtComentarios" name="txtComentarios" class="form-control mb-4" placeholder="Comentarios">
                        </div>
                        <!-- Submit -->
                        <button class="btn btn-info btn-block" type="submit">Registrar!</button>

                    </form>
                    <!--fin formulario-->
                </div>
                <div id="menu"><?php include('menu.php'); ?></div>
            </div>
            <div id="footer">Clinica Bien Sanitos   --   Antonio Varas 666, Fono: 222222222</div>
        </div>

    </body>

    <script>
        $("[id*=prisolicitud]").on("click", function (event) {
            var idname = $(this).attr("id");
            idname = idname.substring(13, 14);
            //$("[id*=subsolicitud-"+idname+"]").css("display", "block");

            if (($("[id*=subsolicitud-" + idname + "]").css("display") != "none")) {
                $("[id*=subsolicitud-" + idname + "]").css("display", "none");
            } else {
                $("[id*=subsolicitud-" + idname + "]").css("display", "block");
            }
        });
        $('[data-toggle="tooltip"]').tooltip();
    </script>
</html>
