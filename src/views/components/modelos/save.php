<?php
$_GET["typeView"] = "Guardar";
$_GET["title"] = "modelos";
$_GET["return"] = "modelos/nuevo";
?>

<section class="container mt-5">
    <?php include_once(VIEWS_LAYOUTS . "/title.php") ?>

    <div class="container mt-5">

        <div class="w-75 mx-auto pb-4">
            <h4 class="display-5"> Nuevo Modelo</h4>
        </div>

        <div class="w-75 mx-auto">
            <form method="post" action="postNew">

                <input hidden
                       type="text"
                       name="id"
                       class="form-control"
                       id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Enter email"
                />

                <div class="form-group">
                    <label for="exampleInputEmail1">Inicial</label>
                    <input type="text"
                           name="inicial"
                           class="form-control"
                           id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Nueva Inicial"
                    />
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Modelo</label>
                    <input type="text"
                           name="modelo"
                           class="form-control"
                           id="exampleInputPassword1"
                           placeholder="Nuevo Modelo"
                    />
                </div>

                <div class="mt-4 w-100">
                    <button type="submit"
                            class="btn btn-primary d-block w-100 p-2">
                        <i class="fa-solid fa-pen-to-square"></i> |
                        Guardar
                    </button>
                </div>
            </form>
        </div>

    </div>
</section>