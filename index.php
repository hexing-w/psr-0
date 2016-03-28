<?php

define("APP_DIR",__DIR__);

 include APP_DIR."/Common/Load.php";

spl_autoload_register("\\Common\\Load::loader");

App\Controller\Home\Index::test();

?>


