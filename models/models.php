<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 18.02.17
 * Time: 14:12
 */

require("../func/f_connect_to_base.php");

function get_id_department($user_id)
{

    $mysqli = connect_to_base();
    $sql = "select department_id from performers where id_performer = $user_id";
    $result = $mysqli->query($sql);
    return $result->fetch_all();
}

function head_of_department($department_id)
{

    $mysqli = connect_to_base();
    $sql = "select head_of_department_id from departments where id_department = $department_id";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

//Получение задача по отделу
function get_tasks_imp_head_of_department($department_id)
{

    $mysqli = connect_to_base();
    $sql = "SELECT id_task, name_task , performers.surname, performers.name, working_hours, date_of_dedline,
            status_id, id_priority, number_project
            FROM tasks 
            left join priorities on id_priority = priority_id
            left join projects on id_project = project_id
            left join performers on id_performer = performer_id WHERE 
            status_id = 2 and priority_id = 1 and tasks.department_id = $department_id and performer_id != 0 
            OR status_id = 2 and priority_id = 3 and tasks.department_id = $department_id and performer_id != 0  ";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_tasks_unimp_head_of_department($department_id)
{

    $mysqli = connect_to_base();
    $sql = "SELECT id_task, name_task, performers.surname, performers.name, working_hours, date_of_dedline,
            status_id, priority_id, number_project
            FROM tasks 
            left join performers on id_performer = performer_id 
            left join projects on id_project = project_id
            WHERE status_id = 2 and priority_id = 2 and tasks.department_id = $department_id and performer_id != 0 ";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_tasks_all_department_id($department_id)
{

    $mysqli = connect_to_base();
    $sql = "SELECT id_task, name_task, performers.surname, performers.name, working_hours, date_of_dedline,
            status_id, priority_id, number_project  
            FROM tasks 
            left join performers on id_performer = performer_id 
            left join projects on id_project = project_id
            WHERE tasks.department_id = $department_id and status_id = 2 and performer_id != 0 ";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

//Получение задач по исполнителю
function get_tasks_imp_id($id_performer)
{

    $mysqli = connect_to_base();
    $sql = "SELECT id_task, name_task , performers.surname, performers.name, working_hours, date_of_dedline,
            status_id, priority_id, number_project
            FROM tasks 
            left join priorities on id_priority = priority_id 
            left join performers on id_performer = performer_id 
            left join projects on id_project = project_id
            WHERE performer_id = $id_performer and status_id = 2 and priority_id = 1 and performer_id != 0  
            OR performer_id = $id_performer and status_id = 2 and priority_id = 3 and performer_id != 0 ";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_tasks_unimp_id($id_performer)
{

    $mysqli = connect_to_base();
    $sql = "SELECT id_task, name_task, performers.surname, performers.name, working_hours, date_of_dedline,
            status_id, priority_id, number_project
            FROM tasks 
            left join performers on id_performer = performer_id 
            left join projects on id_project = project_id
            WHERE performer_id = $id_performer and status_id = 2 and priority_id = 2 and performer_id != 0 ";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_tasks_all_id($id_performer)
{

    $mysqli = connect_to_base();
    $sql = "SELECT id_task, name_task, performers.surname, performers.name, working_hours, date_of_dedline,
            status_id, priority_id, number_project  
            FROM tasks 
            left join performers on id_performer = performer_id 
            left join projects on id_project = project_id
            WHERE performer_id = $id_performer and status_id = 2 and performer_id != 0 ";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

// Получение конкретнйо заявки

function show_a_task($id_task)
{


    $mysqli = connect_to_base();
    $sql = "SELECT id_task, name_task, description_task, performers.surname, performers.name,
            name_project,  working_hours, `name_priority`, name_status, date_of_completion,  date_of_dedline FROM tasks
            left join priorities on id_priority = priority_id 
            left join performers on id_performer = performer_id 
            left join status on id_status = status_id
            left join projects on id_project = project_id WHERE id_task = $id_task";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function show_instructed_tasks($user_id)
{

    $mysqli = connect_to_base();
    $sql = "SELECT id_task, name_task, description_task, performers.surname, performers.name,
            number_project,  working_hours, `name_priority`, date_of_completion, priority_id, date_of_dedline
            FROM tasks
            left join priorities on id_priority = priority_id 
            left join performers on id_performer = performer_id 
            left join status on id_status = status_id
            left join projects on id_project = project_id
            where manager_task_id = $user_id and status_id = 2";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}


function show_all_assign_tasks($department_id )
{

    $mysqli = connect_to_base();
    $sql = "SELECT id_task, name_task, description_task, performers.surname, performers.name,
            number_project,  working_hours, `name_priority`, date_of_completion, priority_id FROM tasks
            left join priorities on id_priority = priority_id 
            left join performers on id_performer = performer_id 
            left join status on id_status = status_id
            left join projects on id_project = project_id
            where  performer_id = 0 and tasks.department_id = '$department_id' ";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}


function assign_a_task($id_task)
{


    $mysqli = connect_to_base();


    $new_task_name = $_GET["name_task"];
    $new_task_priority = $_GET["priority_id"];
    $new_task_description = $_GET["description_task"];
    $new_task_performer_id = $_GET["performer_id"];
    $new_task_working_hours = $_GET["working_hours"];
    $new_task_date_of_deadline = $_GET["date_of_deadline"];


    $sql = "update `tasks` set name_task = '$new_task_name', 
            description_task = '$new_task_description ',
            performer_id = '$new_task_performer_id', 
            working_hours =  '$new_task_working_hours',
            priority_id =   '$new_task_priority', 
            date_of_dedline = '$new_task_date_of_deadline'
            where `id_task` = $id_task";
    $mysqli->query($sql);


}



function show_overdue_tasks($user_id)
{

    $mysqli = connect_to_base();
    $today = date("Y-m-d");
    $sql = "SELECT id_task, name_task, description_task, performers.surname, performers.name,
            number_project,  working_hours, `name_priority`, date_of_dedline, priority_id FROM tasks
            left join priorities on id_priority = priority_id 
            left join performers on id_performer = performer_id 
            left join status on id_status = status_id
            left join projects on id_project = project_id
            where performer_id = $user_id and status_id = 2 and date_of_dedline < '$today' ";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_all_tasks_complete()
{


    $mysqli = connect_to_base();
    $sql = "SELECT id_task, name_task, description_task, performers.surname, performers.name,
            number_project,  working_hours, `name_priority`, date_of_completion, date_of_dedline, date_of_complete, id_priority FROM tasks
            left join priorities on id_priority = priority_id 
            left join performers on id_performer = performer_id 
            left join status on id_status = status_id
            left join projects on id_project = project_id
            where status_id = 1";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

//Проставляет время выполнение задачи
function complete_a_task($id_task)
{
    $mysqli = connect_to_base();
    $sql = "update tasks set status_id = 1 where `id_task` = $id_task";
    $result = $mysqli->query($sql);

}

function complete_a_task_date($id_task)
{
    $mysqli = connect_to_base();
    $today = date("Y-m-d");
    $sql = "update tasks set date_of_complete = '$today' where `id_task` = $id_task";
    $mysqli->query($sql);

}

function add_new_task()
{


    $mysqli = connect_to_base();

    $new_task_id = NULL;
    $new_task_name = $_GET["name_task"];
    $new_task_description = $_GET["description_task"];
    $new_task_performer_id = NULL;
    $new_task_manager_task_id = $_GET["manager_task_id"];;
    $new_task_project_id = $_GET["project_id"];
    $new_task_working_hours = NULL;
    $new_task_priority = $_GET["priority_id"];
    $new_task_status_id = 2; // Заявка в работе
    $new_task_department_id = $_GET["department_id"];
    $new_task_date_of_completion = $_GET["date_of_completion"];
    $new_task_date_of_deadline = NULL;
    $new_task_date_of_complete = NULL;

    $sql = "INSERT INTO `tasks` VALUES ('$new_task_id', '$new_task_name', '$new_task_description ', '$new_task_performer_id', 
                                        '$new_task_manager_task_id ', '$new_task_project_id', '$new_task_working_hours',
                                        '$new_task_priority', '$new_task_status_id', '$new_task_department_id',
                                        '$new_task_date_of_completion', '$new_task_date_of_deadline','$new_task_date_of_complete')";
    $mysqli->query($sql);


}

function edit_a_task($id_task)
{


    $mysqli = connect_to_base();


    $new_task_name = $_GET["name_task"];
    $new_task_description = $_GET["description_task"];
    $new_task_performer_id = $_GET["performer_id"];
    $new_task_manager_task_id = NULL;
    $new_task_project_id = $_GET["project_id"];
    $new_task_working_hours = $_GET["working_hours"];
    $new_task_priority = $_GET["priority_id"];
    $new_task_date_of_completion = $_GET["date_of_completion"];
    $new_task_date_of_complete = NULL;;

    $sql = "update `tasks` set name_task = '$new_task_name', 
            description_task = '$new_task_description ',
            performer_id = '$new_task_performer_id',
            manager_task_id = '$new_task_manager_task_id ', 
            project_id = '$new_task_project_id',
            working_hours =  '$new_task_working_hours',
            priority_id =   '$new_task_priority', 
            date_of_completion = '$new_task_date_of_completion'
            where `id_task` = $id_task";
    $mysqli->query($sql);


}

function get_tasks_some_performer($id_performer)
{

    $mysqli = connect_to_base();
    $sql = "SELECT id_task, name_task, description_task  working_hours, working_hours, date_of_completion
            FROM tasks left join priorities on id_priority = priority_id left join performers on 
            id_performer = performer_id where id_performer =  $id_performer";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_all_performers($department_id)
{

    $mysqli = connect_to_base();
    $sql = "SELECT * FROM performers WHERE department_id = $department_id";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_all_departments()
{

    $mysqli = connect_to_base();
    $sql = "SELECT * FROM departments";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_all_priorities()
{

    $mysqli = connect_to_base();
    $sql = "SELECT * FROM priorities";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_report_all_performers()
{

    $mysqli = connect_to_base();
    $sql = "SELECT performers.id_performer, performers.surname, performers.name, count(working_hours), sum(working_hours) FROM tasks 
            left join priorities on id_priority = priority_id left join performers on id_performer = performer_id 
            WHERE status_id = 2 group by performers.surname ";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_report_all_projects()
{

    $mysqli = connect_to_base();
    $sql = "SELECT * FROM projects";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function date_from_mysql($date)
{

    $time = strtotime($date);


    $month_name = array(1 => 'января', 2 => 'февраля', 3 => 'марта',
        4 => 'апреля', 5 => 'мая', 6 => 'июня',
        7 => 'июля', 8 => 'августа', 9 => 'сентября',
        10 => 'октября', 11 => 'ноября', 12 => 'декабря'
    );

    $month = $month_name[date('n', $time)];

    $day = date('j', $time); # С помощью функции date() получаем число дня
    $year = date('Y', $time); # Получаем год
    $hour = date('G', $time); # Получаем значение часа
    $min = date('i', $time); # Получаем минуты
    if ($date == date("Y-m-d")) return "сегодня";
    else

        return $date = "$day $month $year";  # Собираем пазл из переменных

}


/*

function get_tasks_imp()
{

    $mysqli = connect_to_base();
    $sql = "SELECT id_task, name_task , performers.surname, performers.name, working_hours, date_of_completion,
            status_id FROM tasks left join priorities on id_priority = priority_id left join performers on 
            id_performer = performer_id WHERE status_id = 2 and priority_id = 1 OR status_id = 2 and priority_id = 3 ";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_tasks_unimp()
{

    $mysqli = connect_to_base();
    $sql = "SELECT id_task, name_task, performers.surname, performers.name, working_hours, date_of_completion,
            status_id FROM tasks left join performers on id_performer = performer_id WHERE status_id = 2 
            and priority_id = 2";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

*/




