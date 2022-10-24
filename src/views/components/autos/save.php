<?php
$_GET["typeView"] = "Guardar Auto";
$_GET["title"] = "Registrar Auto";
$_GET["return"] = "autos/";
?>

<section class="container">
    <?php include_once(VIEWS_LAYOUTS . "/title.php") ?>

    <div class="container mb-5">

        <div class="w-75 mx-auto pb-4">
            <h4 class="display-5"> Nuevo Modelo</h4>
        </div>

        <div class="w-75 mx-auto">
            <form method="post" action="postNew">


                <div class="form-group">
                    <label>Marca</label>
                    <select type="text" name="submodelo" class="form-control" placeholder="Nuevo Marca">
                        <option value="0"> Selecciona una opcion</option>
                        <?php foreach ($submodelo as $itemSub): ?>
                            <option value=" <?php echo $itemSub["id"] ?> "> <?php echo "${itemSub['marca']} - ${itemSub['modelo']}" ?>  </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Año</label>
                    <select type="text" name="anio" class="form-control" placeholder="Nuevo Marca">
                        <option value="0"> Selecciona una opcion</option>
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
                    />
                </div>

                <div class="form-group">
                    <label>Kilometraje</label>
                    <input type="text"
                           name="kilometraje"
                           class="form-control"
                           placeholder="Nuevo kilometraje"
                    />
                </div>

                <div class="form-group">
                    <label>Color</label>
                    <input type="text"
                           name="color"
                           class="form-control"
                           placeholder="Nuevo Color"
                    />
                </div>

                <div class="form-group">
                    <label>Correo</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Nuevo Email"
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