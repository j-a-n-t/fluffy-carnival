<?php if (isset($_GET["return"])): ?>

    <section class="container-fluid p-4 mt-3 bd-gray-900">
        <div class="container-lg">
            <h4 class="text-uppercase mx-4 display-4">bienvenidos <?php echo $_GET["title"]; ?> </h4>
            <hr class="m-2 text-black">
            <p class="text-black text-opacity-50 mx-4"> <?php echo "{$_GET["typeView"]}" ?> </p>
        </div>
    </section>

<?php else: ?>
    <section class="container-fluid p-4 mt-3 bd-gray-900">
        <div class="container-lg">
            <h4 class="text-uppercase mx-4 display-4">bienvenidos <?php echo strtoupper($_GET["title"]); ?> </h4>
            <hr class="m-2 text-black">
            <p class="text-black text-opacity-50 mx-4"> <?php echo "{$_GET["typeView"]} {$_GET["title"]}" ?> </p>
            <a href="<?php echo $_POST["save"] ?>"
               class="btn btn-outline-primary p-2 w-100">
                <i class="fa-solid fa-floppy-disk"></i> | Nuevo modelo
            </a>
        </div>
    </section>
<?php endif; ?>

