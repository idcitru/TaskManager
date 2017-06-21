<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */



update_persent($_GET["id_task"],($_GET["percent"]));

header("Location: /public/index.php?route=show_a_task&id_task=" . $_GET["id_task"]);



