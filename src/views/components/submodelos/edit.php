<?php
$_GET["typeView"] = "Editar";
$_GET["title"] = "SubModelos";
$_GET["return"] = "submodelos";

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
                       value="<?php echo $data["id"]; ?>"
                />

                <div class="form-group">
                    <label for="exampleInputEmail1">Inicial</label>
                    <input type="text"
                           name="inicial"
                           class="form-control"
                           id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Nueva Inicial"
                           value="<?php echo $data["inicial"]; ?>"
                    />
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Vehiculo</label>
                    <input type="text"
                           name="vehiculo"
                           class="form-control"
                           id="exampleInputPassword1"
                           placeholder="Nuevo Vehiculo"
                           value="<?php echo $data["vehiculo"]; ?>"
                    />
                </div>

                <div class="form-group">
                    <label>Marca</label>
                    <select type="text" name="marca" class="form-control" placeholder="Nuevo Marca">
                        <option value="<?php echo $data["marcaID"] ?>"> <?php echo $data["marca"]; ?> </option>
                        <?php foreach ($marcas as $itemMarcas): ?>
                            <option value=" <?php echo $itemMarcas["id"] ?> "> <?php echo $itemMarcas["marca"] ?>  </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Modelo</label>
                    <select type="text" name="modelo" class="form-control" placeholder="Nuevo Modelo">
                        <option value=<?php echo $data["modeloID"] ?>> <?php echo $data["modelo"]; ?> </option>
                        <?php foreach ($model as $itemModel): ?>
                            <option value=" <?php echo $itemModel["id"] ?> "> <?php echo $itemModel["modelo"] ?>  </option>
                        <?php endforeach; ?>
                    </select>
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