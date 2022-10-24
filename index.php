<?php

use Controllers\Routes\Routes;

include_once(__DIR__ . "/src/config/const.php");
include_once(__DIR__ . "/src/controllers/Routes.php");

if (isset($_GET["url"])):

    if (isset($_GET["url2"])):
        new Routes($_GET["url"], $_GET["url2"]);
    else:
        new Routes($_GET["url"]);
    endif;

else:
    new Routes("default");
endif;



