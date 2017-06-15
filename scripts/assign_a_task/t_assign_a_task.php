<?php require("../templates/header.php") ?>


    <br><br>
    <form name="contact_form" action="/public/index.php" onsubmit="return validate_form ( );">

        <?php foreach ($task as $task_a): ?>
            <div class="row">
                <div class="col-xs-1">
                    <label class="control-label" for="inputSuccess1">№</label>
                    <input type="hidden" name="id_task" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2"
                           value="<?= $task_a[0] ?>" >
                    <input type="text" name="id_task" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2"
                           value="<?= $task_a[0] ?>" disabled>
                </div>
                <div class="col-xs-9">
                    <label class="control-label" for="inputSuccess1">Название задачи</label>
                    <input type="text" name="name_task" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2"
                           value="<?= $task_a[1] ?>">
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
                    <textarea class="form-control"name="description_task" rows="5" placeholder="Описание задачи"><?= $task_a[2] ?></textarea>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-xs-3">
                    <label class="control-label" for="inputSuccess1">Исполнитель</label>
                    <select class="form-control" name="performer_id">
                        <option value="NULL" selected="selected">Выберите исполнителя</option>
                        <?php foreach ($performers as $performer) : ?>
                            <option value="<?= $performer[0]; ?>"> <?= $performer[1] . " " . $performer[2] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="col-xs-3">
                    <label class="control-label" for="inputSuccess1">Крайний срок</label>
                    <input type="date" disabled name="date_of_completion" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2"
                           value="<?= $task_a[9] ?>">
                </div>
                <div class="col-xs-3">
                    <label class="control-label" for="inputSuccess1">Плановый срок</label>
                    <input type="date"  name="date_of_deadline" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2">
                </div>
                <div class="col-xs-3">
                    <label class="control-label" for="inputSuccess1">Трудозотраты</label>
                    <input type="text" name="working_hours" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2">
                </div>
            </div>

            <br>


        <?php endforeach ?>
        <br>
        <div class="row">
            <div class="col-xs-3">
                <input type="hidden" name="route" value="assign_a_task"/>
                <button type="submit" class="btn btn-primary">Назначить</button>
            </div>
        </div>
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

            if ( document.contact_form.date_of_deadline.value == "" )
            {
                alert ( "Пожалуйста заполните поле 'Плановый  срок'." );
                valid = false;
            }

            if ( document.contact_form.performer_id.value == "NULL" )
            {
                alert ( "Пожалуйста заполните поле 'Исполнитель'." );
                valid = false;
            }

            if ( document.contact_form.working_hours.value == "" )
            {
                alert ( "Пожалуйста заполните поле 'Трудозатраты'." );
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