<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */


$projects = get_report_all_projects();
$performers = get_all_performers($department_id);


if ($user_id ==  $head_of_department) { // Если пользователь является начальнико отдела

    $tasks_complete = get_tasks_complete_department($department_id);

}

else { // Выводим только те задачи в которых сотрудник является исполнителем

    $tasks_complete = get_tasks_complete_user($user_id);

}





