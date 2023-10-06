<?php
#Aqui en el index mandaremos a traer los metodos necesarios para el funcionamiento del sitio

require_once "controladores/plantillaControlador.php";
require_once "controladores/formulariosControlador.php";
require_once "modelos/formulariosModelos.php";
#Instanciamos el controlador de plantillas.
$plantilla = new controladorPlantilla();
$plantilla->ctrTraerPlantilla();
