<?php
include('./lib/atencion.php');
include('./lib/constantes.php');

if (isset($_SESSION["aAtencion"])) {
    $arrAtencion = $_SESSION["aAtencion"];
} else {
    $arrAtencion = "";
}
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
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div id="contenedor">
            <div id="head">
                <div color="blue" id="titulositio">Clinica Bien Sanitos</div>
                <div id="titulo">Resumen</div>
                <div id="menunav"><?php include('menunav.php'); ?></div>
            </div>
            <div id="contenidos">
                <div id="contenido">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Rut</th>
                                <th>Nombre</th>
                                <th>Tipo Atencion</th>
                                <th>Fecha Atencion</th>
                                <th>Nombre Especialista</th>
                                <th>Comentario</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($arrAtencion as $key => $oAtencion) {
                                ?>
                                <tr>
                                    <td>#<?= $key + 1; ?></td>
                                    <td><?= $oAtencion->getRut(); ?></td>
                                    <td><?= $oAtencion->getNombre(); ?></td>
                                    <td>Tipo Atencion</td>
                                    <td>Fecha Atencion</td>
                                    <td><?= $oAtencion->getNombreresponsable(); ?></td>
                                    <td><?= $oAtencion->getComentario(); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>




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
