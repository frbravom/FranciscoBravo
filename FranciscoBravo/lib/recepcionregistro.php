<?php
include('./atencion.php');
include('./constantes.php');


$oAtencion=new Atencion($_POST["txtRut"], $_POST["txtNombre"],"","", $_POST["txtNombreEsp"], "txtComentarios");
if(isset($_SESSION["aAtencion"])){
    $arrAtencion=$_SESSION["aAtencion"];    
}
$arrAtencion[]=$oAtencion;

$_SESSION["aAtencion"]=$arrAtencion;

echo "<pre>";
var_dump($_POST);
echo "</pre>";
