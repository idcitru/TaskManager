<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */




    $tasks_imp = get_tasks_imp_id($user_id );
    $tasks_unimp = get_tasks_unimp_id($user_id );
    $day_imp = date("Y-m-d", strtotime("+4 day"));
    $tasks_alls = get_tasks_all_id($user_id);


