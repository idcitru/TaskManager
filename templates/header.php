<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>

    <title>Задачи</title>
</head>
<body>


<nav class="navbar navbar-inverse fixed-top">
    <div class="container">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <?php if ($_SESSION['head_of_department'] == true) : ?>
                    <li class="active"><a href="/public"">Мои задачи</a> </li>
                    <li><a href="/public/index.php?route=assign_all_tasks">Назначить <span
                                    class="badge"> <?= $assign_tasks_count ?></span> </a></li>
                <?php else: ?>
                    <li><a href="/public"">Мои задачи </a> </li>
                <?php endif ?>
                <li><a href="/public/index.php?route=show_overdue_tasks">Просроченные <span
                                class="badge"> <?= $overdue_tasks_count ?></span></a></li>
                <li><a href="/public/index.php?route=show_instructed_tasks">Поручил <span
                                class="badge"> <?= $instructed_tasks_count ?></span> </a></li>
                <li><a href="/public/index.php?route=show_complete_tasks">Выполненные задачи </a></li>
                <li><a href="/public/index.php?route=show_all_performers">Сводный отчет</a></li>
            </ul>
        </div>

        <form action="index.php" class="navbar-form navbar-right">
            <input type="hidden" name="route" value="exit"/>
            <button type="submit" class="btn">Выйти</button>

        </form>
    </div>
</nav>
<div class="container">










