<?php
#Establecemos la clase al controlador
class controladorPlantilla
{
    #Crearemos una funcion para mandar a llamar a la plantilla.
    function ctrTraerPlantilla()
    {
        include "vistas/plantilla.php";
    }
}
