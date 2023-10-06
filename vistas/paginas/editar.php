<?php
if (isset($_GET["id"])) {
    $valor = $_GET["id"];
    $item = "id";
    $invitado = controladorFormularios::ctrSeleccionarRegistros($item, $valor);
    // if (isset($invitado)) {
    //     echo "<pre style='color:black'>";
    //     print_r($invitado);
    //     echo "</pre>";
    // }
}

?>
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Editar Invitado
            </h1>
            <ul class="right__content">
                <li>
                    <a href="index.php?pagina=home">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    Editar
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section Here ========= -->

<!--=========== Register Here ========= -->

<style>
    body {
        background-color: #f8f9fa;
    }

    .conteiner {
        padding: 30px;
        border-radius: 15px;
        /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); */
    }

    h2 {
        color: #E0AF61;
        text-align: center;
        margin-bottom: 30px;
        font-family: "Georgia", sans-serif;
    }

    label {
        font-size: 18px;
        font-family: "Georgia", sans-serif;
    }

    .form-control {
        border: 2px solid #E0AF61;
    }

    button {
        background-color: #E0AF61;
        border: none;
        font-size: 18px;
        font-family: "Georgia", sans-serif;
        align-items: center;
    }
</style>
</head>


<div class="conteiner mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Editar los datos del invitado</h2>
            <form method="post">

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" name="actualizarNombre" value=<?php echo $invitado["nombre"]; ?> />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="actualizarEmail" value=<?php echo $invitado["email"]; ?> />
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                    <input type="password" class="form-control" placeholder="Ingrese su contraseña" aria-label="Username" aria-describedby="basic-addon1" name="actualizarPassword" />
                </div>
                <input type="hidden" name="originalPassword" value=<?php echo $invitado["password"] ?> />
                <input type="hidden" name="idUsuario" value=<?php echo $invitado["id"] ?> />

                <button type="submit" class="btn btn-warning" style="background-color: rgb(253, 216, 115)">
                    Actualizar
                </button>

                <?php
                $respuesta = controladorFormularios::ctrActualizarRegistros();
                if ($respuesta == "ok") {
                    echo '<script>
                    if(window.history.replaceState){
                    window.history.replaceState(null,null, window.location.href);
                    }       
                    </script>';
                    echo '<div class = "alert alert-success">El Invitado ha sido actualizado</div>
                    <script>
                    setTimeout(function(){
                        window.location = "index.php?pagina=guests";
                    }, 1600);
                    </script>
                    ';
                }
                ?>

            </form>
        </div>
    </div>
</div>
</section>
<!--=========== Register End ========= -->