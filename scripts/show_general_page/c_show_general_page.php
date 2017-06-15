<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */



if ($user_id ==  $head_of_department) { // Если пользователь является начальнико отдела

    $tasks_imp = get_tasks_imp_head_of_department($department_id); // Выводим все задачи отдлеа
    $tasks_unimp = get_tasks_unimp_head_of_department($department_id);
    $day_imp = date("Y-m-d", strtotime("+4 day"));
    $tasks_alls = get_tasks_all_department_id($department_id);
}

else { // Выводим только те задачи в которых сотрудник является исполнителем

    $tasks_imp = get_tasks_imp_id($user_id );
    $tasks_unimp = get_tasks_unimp_id($user_id );
    $day_imp = date("Y-m-d", strtotime("+4 day"));
    $tasks_alls = get_tasks_all_id($user_id);
}

