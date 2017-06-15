<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */



$id_task = $_GET['id_task'];
complete_a_task($id_task);
complete_a_task_date($id_task);
header("Location: /public");


