<?php
class controladorFormularios
{
    static public function ctrRegistro()
    {
        if (isset($_POST["registroNombre"])) {
            $datos = array(
                "nombre" => $_POST["registroNombre"],
                "email" => $_POST["registroEmail"],
                "password" => $_POST["registroPassword"]
            );
            $tabla = "registros";
            $respuesta = formulariosModelo::mdlRegistro($tabla, $datos);
            return $respuesta;
        }
    }
    public function ctrLogin()
    {
        if (isset($_POST["loginEmail"])) {
            $datos = array(
                "email" => $_POST["loginEmail"],
                "password" => $_POST["loginPassword"]
            );
            $tabla = "registros";
            $respuesta = formulariosModelo::mdlLogin($tabla, $datos);
            if ($respuesta != null) {
                $_SESSION["validarIngreso"] = "ingresado";
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                echo '<div class="alert alert-success">Ingreso exitoso</div>';
                echo '<script>
                setTimeout(function(){
                    window.location = "index.php?pagina=home";
                }, 1600);
                </script>
                ';
            } else {
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                echo '<div class="alert alert-danger">Error!!! al ingresar al sistema, email o contraseña
                no coincide</div>';
            }
        }
    }

    static public function ctrSeleccionarRegistros($item, $valor)
    {
        $tabla = "registros";
        $respuesta = formulariosModelo::mdSeleccionarRegistros($tabla, $valor, $item);
        return $respuesta;
    }

    static public function ctrActualizarRegistros()
    {
        if (isset($_POST["actualizarNombre"])) {
            if ($_POST["actualizarPassword"] != "") {
                $password = $_POST["actualizarPassword"];
            } else {
                $password = $_POST["originalPassword"];
            }
            $tabla = "registros";
            $datos = array(
                "id" => $_POST["idUsuario"],
                "nombre" => $_POST["actualizarNombre"],
                "email" => $_POST["actualizarEmail"],
                "password" => $password
            );
            $respuesta = formulariosModelo::mdlActualizarRegistros($tabla, $datos);
            return $respuesta;
        }
    }

    public function ctrBorrarRegistro()
    {
        if (isset($_POST["eliminarRegistro"])) {
            $tabla = "registros";
            $valor = $_POST["eliminarRegistro"];
            $respuesta = formulariosModelo::mdlBorrarRegistro($valor, $tabla);
            if ($respuesta == "ok") {
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                } 
                window.location = "index.php?pagina=guests";</script>';
            }
        }
    }
}
