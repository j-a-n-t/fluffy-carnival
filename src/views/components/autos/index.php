<section class="mb-5">

    <?php include_once(VIEWS_LAYOUTS . "/title.php"); ?>

    <div class="mx-4">
        <table class="table table-hover table-bordered table-responsive">
            <thead class="thead-dark bg-black text-white text-center">
            <tr>
                <th scope="col" hidden>#</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Anio</th>
                <th scope="col">Precio</th>
                <th scope="col">Kilometraje</th>
                <th scope="col">Color</th>
                <th scope="col">Email</th>
                <th scope="col">Estatus</th>
                <th scope="col">Creado</th>
                <th scope="col">ultima mod.</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($data as $item): ?>
                <tr class="text-center">
                    <td scope="col" hidden> <?php echo $item["id"] ?> </td>
                    <td scope="col">  <?php echo $item["marca"] ?>  </td>
                    <td scope="col"> <?php echo $item["modelo"] ?></td>
                    <td scope="col"> <?php echo $item["anio"] ?></td>
                    <td scope="col"> <?php echo $item["precio"] ?></td>
                    <td scope="col"> <?php echo $item["kilometraje"] ?></td>
                    <td scope="col"> <?php echo strtoupper($item["color"]) ?></td>
                    <td scope="col"> <?php echo $item["email"] ?></td>
                    <td scope="col" class="d-flex justify-content-center">
                        <div class="text-white rounded-3 py-1 px-2 w-50 opacity-75 bg-success">
                            <?php echo $item["estatus"] ?>
                        </div>
                    </td>
                    <td scope="col"> <?php echo substr($item["creacion"], 0, 10) ?></td>
                    <td scope="col"> <?php echo substr($item["modificacion"], 0, 10) ?></td>
                    <td scope="col">

                        <div>
                            <a href='autos/editar/<?php echo base64_encode($item["id"]); ?>'
                               data-toggle="tooltip"
                               data-placement="top"
                               title='<?php echo "Editar modelo {$item["modelo"]}" ?>'
                               class="btn btn-primary">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="autos/postDelete/<?php echo base64_encode($item["id"]); ?>"
                               data-toggle="tooltip"
                               data-placement="top"
                               title='<?php echo "Eliminar modelo {$item["modelo"]}" ?>'
                               class="btn btn-danger">
                                <i class="fa-solid fa-dumpster-fire"></i>
                            </a>

                        </div>

                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>

</section>

