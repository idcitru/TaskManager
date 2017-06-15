<?php require("../templates/header.php") ?>


    <form name="contact_form" action="/public/index.php" onsubmit="return validate_form ( );">
        <br>


        <div class="row">
            <div class="col-xs-10">
                <label class="control-label" for="inputSuccess1">Название задачи</label>
                <input type="text" class="form-control" id="inputSuccess1" name="name_task">
            </div>

            <div class="col-xs-2">
                <label class="control-label" for="inputSuccess1">Приоритет заявки</label>
                <select class="form-control" name="priority_id">
                    <option value="NULL" selected="selected">Выберите приоритет</option>
                    <?php foreach ($priorities as $priority) : ?>
                        <option value="<?= $priority[0]; ?>"><?= $priority[1] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <br>


        <div class="row">
            <div class="col-lg-12">
                <textarea class="form-control" rows="5" placeholder="Описание задачи"
                          name="description_task"></textarea>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-xs-6">
                <label class="control-label" for="inputSuccess1">Назначить отделу</label>
                <select class="form-control" name="department_id">
                    <option value="NULL" selected="selected">Выберите отдел</option>
                    <?php foreach ($departments as $department) : ?>
                        <option value="<?= $department[0]; ?>"> <?= $department[1] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="col-xs-6">
                <label class="control-label" for="inputSuccess1">Постановщик</label>
                <input  class="hidden" id="inputSuccess1" name="manager_task_id" value="<?=   $user_id; ?>">
                <input disabled class="form-control" id="inputSuccess1" name="manager_task_id" value="Вы">
            </div>
        </div>

        <br>


        <div class="row">
            <div class="col-xs-3">
                <label class="control-label" for="inputSuccess1">Название проекта</label>
                <select class="form-control" name="project_id">
                    <option value="1" selected="selected">Выберите проект</option>
                    <?php foreach ($projects as $project) : ?>
                        <option value="<?= $project[0]; ?>"> <?= $project[2] . " " . $project[1] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="col-xs-3">
                <label class="control-label" for="inputSuccess1">Крайний срок</label>
                <input type="date" class="form-control" id="inputSuccess1" name="date_of_completion">
            </div>
        </div>


        <br>


            <input type="hidden" name="route" value="add_new_task"/>
            <button type="submit" class="btn btn-primary">Добавить</button>


    </form>


    <script>
        <!--

        function validate_form ( )
        {
            valid = true;

            if ( document.contact_form.priority_id.value == "NULL" )
            {
                alert ( "Пожалуйста заполните поле 'Приоритет заявки'." );
                valid = false;
            }

            if ( document.contact_form.date_of_completion.value == "" )
            {
                alert ( "Пожалуйста заполните поле 'Крайняя дата'." );
                valid = false;
            }

            if ( document.contact_form.department_id.value == "NULL" )
            {
                alert ( "Пожалуйста заполните поле 'Назначить отделу'." );
                valid = false;
            }

            if ( document.contact_form.description_task.value == "" )
            {
                alert ( "Пожалуйста заполните поле 'Описание задачи'." );
                valid = false;
            }

            if ( document.contact_form.name_task.value == "" )
            {
                alert ( "Пожалуйста заполните поле 'Название задачи'." );
                valid = false;
            }

            return valid;
        }

        //-->
    </script>

<?php require("../templates/footer.php") ?>