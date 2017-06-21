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

        $(function () {
            // инициализировать все элементы на страницы, имеющих атрибут data-toggle="tooltip", как компоненты tooltip
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <title>Задачи</title>
</head>
<body>

<nav class="navbar navbar-inverse fixed-top">
    <div class="container">
        <div class="navbar-header">
            <ul class="nav navbar-nav">

                <li class="active"><a href="/public"">Мои задачи</a> </li>
                <li><a href="/public/index.php?route=assign_all_tasks">Назначить <span
                                class="badge"></span> </a></li>


                <li><a href="/public/index.php?route=show_overdue_tasks">Просроченные <span
                                class="badge"> </span></a></li>
                <li><a href="/public/index.php?route=show_instructed_tasks">Поручил <span
                                class="badge"> </span> </a></li>
                <li><a href="/public/index.php?route=show_complete_tasks">Выполненные задачи </a></li>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Отчеты <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Пульс демо</a></li>
                            <li><a href="/public/index.php?route=show_all_performers">Задачи по отделу</a></li>
                            <li><a href="/public/index.php?route=show_project_tasks">Задачи по проекту</a></li>
                            <li role="separator" class="divider"></li>
                        </ul>
                    </li>
                </ul>

            </ul>
        </div>

        <form action="index.php" class="navbar-form navbar-right">
            <input type="hidden" name="route" value="exit"/>
            <button type="submit" class="btn">Выйти</button>
        </form>
    </div>
</nav>
<div class="container">
<div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Карточка проекта <span class="sr-only">(current)</span></a></li>
            <li><a href="#1"> <button type="button" class="btn btn-primary btn-block">Задачи по проектам </button></a></li>
            <li><a href="#">Реестр документов</a></li>
            <li><a href="#">Договоры</a></li>
            <li><a href="#">Бюджеты</a></li>
        </ul>
        <ul class="nav nav-sidebar">
            <li><a href="">Графики</a></li>
            <li><a href="">Производственные планы</a></li>
            <li><a href="">КС</a></li>
            <li><a href="">Исполнительная документация</a></li>
            <li><a href="">Письма</a></li>
        </ul>
    </div>



</div>

</div><!-- /.container -->

</body>


</html>



