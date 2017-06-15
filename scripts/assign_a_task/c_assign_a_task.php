<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */


$task = show_a_task($_GET["id_task"]);
$performers = get_all_performers($department_id);
$priorities = get_all_priorities();
$projects = get_report_all_projects();





if (isset($_GET["date_of_deadline"]) && isset($_GET["performer_id"])) {

    assign_a_task($_GET["id_task"]);
    header("Location: /public");
}


