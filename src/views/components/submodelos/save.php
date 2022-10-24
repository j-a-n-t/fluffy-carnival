<?php
$_GET["typeView"] = "Guardar";
$_GET["title"] = "submodelos";
$_GET["return"] = "submodelos";
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
                    <label for="exampleInputPassword1">Vehiculo</label>
                    <input type="text"
                           name="vehiculo"
                           class="form-control"
                           id="exampleInputPassword1"
                           placeholder="Nuevo Vehiculo"
                    />
                </div>

                <div class="form-group">
                    <label>Marca</label>
                    <select type="text" name="marca" class="form-control" placeholder="Nuevo Marca">
                        <option value="0"> Selecciona una opcion</option>
                        <?php foreach ($marcas as $itemMarcas): ?>
                            <option value=" <?php echo $itemMarcas["id"] ?> "> <?php echo $itemMarcas["marca"] ?>  </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Modelo</label>
                    <select type="text" name="modelo" class="form-control" placeholder="Nuevo Modelo">
                        <option value="0"> Selecciona una opcion</option>
                        <?php foreach ($model as $itemModel): ?>
                            <option value=" <?php echo $itemModel["id"] ?> "> <?php echo $itemModel["modelo"] ?>  </option>
                        <?php endforeach; ?>
                    </select>
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