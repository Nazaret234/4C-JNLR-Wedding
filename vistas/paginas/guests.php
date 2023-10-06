<?php
if (!isset($_SESSION["validarIngreso"])) {
    echo '<script> window.location = "index.php?pagina=login";</script>';
    return;
} else {
    if ($_SESSION["validarIngreso"] != "ingresado") {
        echo '<script> window.location = "index.php?pagina=login";</script>';
        return;
    }
}

$invitado = controladorFormularios::ctrSeleccionarRegistros(null, null);
?>
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Guests
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
                    Login
                </li>
            </ul>
        </div>
    </div>
</section>

<style>
    .conteiner {
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
        margin: 80px;
    }

    h2 {
        color: #dc3545;
        text-align: center;
        margin-bottom: 30px;
        font-family: "Georgia", sans-serif;
        font-size: 50px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
    }

    th,
    td {
        border: 2px solid rgb(219, 163, 9);
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: rgb(219, 163, 9);
        color: "black"
    }

    button {
        margin-right: 5px;
    }

    .tabla {
        color: black;
    }
</style>

<div class="conteiner">
    <h2>Lista de Invitados</h2>
    <table class="tabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($invitado as $key => $value) : // hacemos recorrido al arreglo
            ?>
                <tr>
                    <td> <?php echo ($key + 1) ?> </td>
                    <td> <?php echo $value["nombre"] ?> </td>
                    <td> <?php echo $value["email"] ?> </td>
                    <td> <?php echo $value["f"] ?> </td>
                    <td>
                        <div class="btn-group">
                            <div class="px-1">
                                <?php echo '<a href="index.php?pagina=editar&id=' . $value["id"] . '"'; ?> > <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button></a>
                            </div>
                            <form method="POST">
                                <input type="hidden" value=<?php echo $value["id"]; ?> name="eliminarRegistro">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                <?php
                                $borrar = new controladorFormularios();
                                $borrar->ctrBorrarRegistro();
                                ?>
                            </form>

                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>