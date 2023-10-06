<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Login
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
            <h2>Inicia sesión</h2>
            <form method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="loginEmail" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                    <input type="password" class="form-control" placeholder="Ingrese su contraseña" aria-label="Username" aria-describedby="basic-addon1" name="loginPassword" />
                </div>
                <?php
                $login = new controladorFormularios();
                $login->ctrLogin();
                ?>
                <button type="submit" class="btn btn-warning" style="background-color: rgb(253, 216, 115)">
                    Iniciar sesión
                </button>
            </form>
        </div>
    </div>
</div>
</section>
<!--=========== Register End ========= -->