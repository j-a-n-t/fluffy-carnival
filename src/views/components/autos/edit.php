<?php
$_GET["typeView"] = "Editar Auto";
$_GET["title"] = "Editar Auto";
$_GET["return"] = "autos/";
?>

<section class="container">
    <?php include_once(VIEWS_LAYOUTS . "/title.php") ?>

    <div class="container mb-5">

        <div class="w-75 mx-auto pb-4">
            <h4 class="display-5"> Actualizar Automovil <?php echo "${data['marca']}-${data['modelo']}" ?> </h4>
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
                    <label>Marca</label>
                    <select type="text" name="submodelo" class="form-control" placeholder="Nuevo Marca">
                        <option value= <?php echo $data["submodeloID"] ?> > <?php echo "${data['marca']}-${data['modelo']}" ?> </option>
                        <?php foreach ($submodelo as $itemSub): ?>
                            <option value=" <?php echo $itemSub["id"] ?> "> <?php echo "${itemSub['marca']} - ${itemSub['modelo']}" ?>  </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Año</label>
                    <select type="text" name="anio" class="form-control" placeholder="Nuevo Marca">
                        <option value=<?php echo $data["anioID"] ?> > <?php echo $data["anio"] ?> </option>
                        <?php foreach ($anios as $itemAnio): ?>
                            <option value=" <?php echo $itemAnio["id"] ?> "> <?php echo $itemAnio['anio'] ?>  </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Precio</label>
                    <input type="text"
                           name="precio"
                           class="form-control"
                           placeholder="Nuevo Precio"
                           value="<?php echo $data["precio"] ?> "
                    />
                </div>

                <div class="form-group">
                    <label>Kilometraje</label>
                    <input type="text"
                           name="kilometraje"
                           class="form-control"
                           placeholder="Nuevo kilometraje"
                           value="<?php echo $data["kilometraje"] ?> "
                    />
                </div>

                <div class="form-group">
                    <label>Color</label>
                    <input type="text"
                           name="color"
                           class="form-control"
                           placeholder="Nuevo Color"
                           value="<?php echo $data["color"] ?> "
                    />
                </div>

                <div class="form-group">
                    <label>Correo</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Nuevo Email"
                           value="<?php echo $data["email"] ?> "
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