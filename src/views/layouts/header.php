<section class="bg-dark p-3">
    <div class="d-flex justify-content-between align-items-center">

        <div type="button"
             data-bs-toggle="offcanvas"
             data-bs-target="#offcanvasWithBackdrop"
             aria-controls="offcanvasWithBackdrop"
             class="btn-hover-light">
            <button type="button"
                    class="btn text-white"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Abrir menu"
            >
                <i role="button" class="pointer-event fa-solid fa-bars text-white"></i>
            </button>
        </div>

        <nav class="d-flex flex-row gap-4 align-items-center mx-5">
            <a href="home"
               class="text-white text-decoration-none">
                <i class="fa-solid fa-house"></i> |
                Inicio
            </a>
        </nav>

    </div>


    <div class="offcanvas offcanvas-start"
         tabindex="-1"
         id="offcanvasWithBackdrop"
         aria-labelledby="offcanvasWithBackdropLabel">

        <div class="offcanvas-header d-flex flex-row align-items-center border border-bottom-5 border-opacity-25">
            <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">BIENVENIDOS!</h5>
            <button type="button"
                    class="btn text-reset"
                    data-bs-dismiss="offcanvas">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <div class="offcanvas-body">
            <nav class="d-flex flex-column align-items-start">

                <button class="btn w-100 p-0">
                    <a href="home"
                       class="d-flex w-100 justify-content-between align-items-center p-2 text-black text-uppercase text-decoration-none">
                        <span>
                            <i class="fa-solid fa-house"></i> |
                            Inicio
                        </span>
                        <i class="fa-solid fa-arrow-right-to-bracket mx-2"></i>
                    </a>

                </button>

                <button class="btn w-100 p-0">
                    <a class="d-flex w-100 justify-content-between align-items-center p-2 text-black text-uppercase text-decoration-none"
                       data-bs-toggle="collapse"
                       href="#collapseExample"
                       role="button"
                       aria-expanded="false"
                       aria-controls="collapseExample">
                      <span>
                        <i class="fa-solid fa-boxes-stacked"></i> |
                        Catalogos
                        </span>
                        <i class="fa-solid fa-arrow-right-to-bracket mx-2"></i>
                    </a>
                </button>

                <div class="collapse w-100" id="collapseExample">
                    <button class="btn w-100 p-0">
                        <a href="modelos"
                           class="d-flex w-100 justify-content-between align-items-center p-2 text-black text-uppercase text-decoration-none">
                        <span>
                        <i class="fa-solid fa-table-cells-large"></i> |
                        Modelos
                        </span>
                            <i class="fa-solid fa-arrow-right-to-bracket mx-2"></i>
                        </a>
                    </button>
                    <button class="btn w-100 p-0">
                        <a href="submodelos"
                           class="d-flex w-100 justify-content-between align-items-center p-2 text-black text-uppercase text-decoration-none">
                        <span>
                        <i class="fa-solid fa-table-cells"></i> |
                        SubModelos
                        </span>
                            <i class="fa-solid fa-arrow-right-to-bracket mx-2"></i>
                        </a>
                    </button>
                </div>


                <button class="btn w-100 p-0">
                    <a href="autos"
                       class="d-flex w-100 justify-content-between align-items-center p-2 text-black text-uppercase text-decoration-none">
                        <span>
                        <i class="fa-solid fa-car"></i> |
                        Automoviles
                        </span>
                        <i class="fa-solid fa-arrow-right-to-bracket mx-2"></i>
                    </a>
                </button>
            </nav>
        </div>
    </div>


</section>
