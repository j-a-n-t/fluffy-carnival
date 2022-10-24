<?php
$_GET["typeView"] = "Editar";
$_GET["title"] = "modelos";
$_GET["return"] = "modelos/nuevo";
?>

<section class="container mt-5">
    <?php include_once(VIEWS_LAYOUTS . "/title.php") ?>

    <div class="container mt-5">

        <div class="w-75 mx-auto pb-4">
            <h4 class="display-5"> Modelo: <?php echo strtoupper($data["modelo"]); ?> </h4>
        </div>

        <div class="w-75 mx-auto">
            <form method="post" action="../postUpdate">

                <input hidden
                       type="text"
                       name="id"
                       class="form-control"
                       id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Enter email"
                       value='<?php echo $data["id"]; ?>'
                />

                <div class="form-group">
                    <label for="exampleInputEmail1">Inicial</label>
                    <input type="text"
                           name="inicial"
                           class="form-control"
                           id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Inicial"
                           value='<?php echo $data["inicial"]; ?>'
                    />
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Modelo</label>
                    <input type="text"
                           name="modelo"
                           class="form-control"
                           id="exampleInputPassword1"
                           placeholder="Modelo"
                           value='<?php echo $data["modelo"]; ?>'
                    />
                </div>

                <div class="mt-4 w-100">
                    <button type="submit"
                            class="btn btn-primary d-block w-100 p-2">
                        <i class="fa-solid fa-pen-to-square"></i> |
                        Actualizar
                    </button>
                </div>
            </form>
        </div>

    </div>
</section>