<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 14.02.17
 * Time: 16:14
 */

session_start();
if (isset($_SESSION['user_id'])) {

    require("../models/models.php");

    $user_id = $_SESSION['user_id'];
    $row = get_id_department($user_id);
    $department_id =  implode($row[0]); //  Получили id отдела к которому относится сотрудник
    $head_of_department = head_of_department($department_id);
    $head_of_department = implode($head_of_department[0]); // получили id начальника отдела



    if ($user_id ==  $head_of_department) {
        $_SESSION['head_of_department'] = true;
        $_SESSION['head_of_department_id'] = $department_id;
    }
    else {
        $_SESSION['head_of_department'] = false;
    }


        //Считает кол-во задач у сотрудника поручил
    $instructed_tasks = show_instructed_tasks($user_id);
    $instructed_tasks_count = count($instructed_tasks);

    //Считает кол-во просроченных
    $overdue_tasks = show_overdue_tasks($user_id);
    $overdue_tasks_count = count($overdue_tasks);

    //Считает кол-во задач которые необходимо назначить
    $assign_tasks = show_all_assign_tasks($department_id);
    $assign_tasks_count = count($assign_tasks);


    $route = isset($_GET['route'])  ? $_GET['route'] : 'default';

    switch($route)
    {
        //Подключаем обработчик с формой регистрации
        case 'default':
            require '../scripts/show_general_page/c_show_general_page.php';
            require '../scripts/show_general_page/t_show_general_page.php';
            break;

        case 'exit':
            session_destroy();
            header("Location: ../");
            break;

        case 'assign_all_tasks':
            require '../scripts/show_assign_all_task/c_show_all_assign_tasks.php';
            require '../scripts/show_assign_all_task/t_show_all_assign_tasks.php';
            break;

        case 'assign_a_task':
            require '../scripts/assign_a_task/c_assign_a_task.php';
            require '../scripts/assign_a_task/t_assign_a_task.php';
            break;


        case 'show_assign_all_task':
            require '../scripts/show_assign_all_task/c_assign_a_task.php';
            require '../scripts/show_assign_all_task/t_assign_a_task.php';
            break;

        case 'add_new_task':
            require '../scripts/add_new_task/c_add_new_task.php';
            require '../scripts/add_new_task/t_add_new_task.php';
            break;

        case 'show_overdue_tasks':
            require '../scripts/show_overdue_tasks/c_show_overdue_tasks.php';
            require '../scripts/show_overdue_tasks/t_show_overdue_tasks.php';
            break;

        case 'show_instructed_tasks':
            require '../scripts/show_instructed_tasks/c_show_instructed_tasks.php';
            require '../scripts/show_instructed_tasks/t_show_instructed_tasks.php';
            break;

        case 'show_complete_a_task':
            require '../scripts/show_a_complete_task/c_show_a_complete_task.php';
            require '../scripts/show_a_complete_task/t_show_a_complete_task.php';
            break;

        case 'edit_a_task':
            include '../scripts/edit_a_task/c_edit_a_task.php';
            include '../scripts/edit_a_task/t_edit_a_task.php';
            break;

        case 'show_complete_tasks':
            include '../scripts/show_complete_tasks/c_show_all_tasks_complete.php';
            include '../scripts/show_complete_tasks/t_show_all_tasks_complete.php';
            break;

        case 'complete_a_task':
            include '../scripts/complete_a_task/c_complete_a_task.php';
            break;
        case 'show_a_task':
            include '../scripts/show_a_task/c_show_a_task.php';
            include '../scripts/show_a_task/t_show_a_task.php';
            break;

        case 'show_all_performers':
            include '../scripts/show_all_performers/c_show_all_performers.php';
            include '../scripts/show_all_performers/t_show_all_performers.php';
            break;



        //    default:
      //      header("Location: /public");
    }

} else {

//  header("Location: /");
}
