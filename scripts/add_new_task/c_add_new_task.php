<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */

$departments = get_all_departments();
$priorities = get_all_priorities();
$projects = get_report_all_projects();

if (isset($_GET["date_of_completion"]) && isset($_GET["department_id"])) {

    add_new_task();
    header("Location: /public");
}


