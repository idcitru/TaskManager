<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */





if ($user_id ==  $head_of_department) { // Если пользователь является начальнико отдела

    $overdue_tasks = show_overdue_department_tasks($department_id);
}

else { // Выводим только те задачи в которых сотрудник является исполнителем

    $overdue_tasks = show_overdue_tasks($user_id);
}








