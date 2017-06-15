<?php require("../templates/header.php") ?>


    <br><br>

<?php foreach ($task as $task_a): ?>
    <div class="row">
        <div class="col-xs-1">
            <label class="control-label" for="inputSuccess1">№</label>
            <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2"
                   value="<?= $task_a[0] ?>" disabled>
        </div>
        <div class="col-xs-9">
            <label class="control-label" for="inputSuccess1">Название задачи</label>
            <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2"
                   value="<?= $task_a[1] ?>" disabled>
        </div>

        <div class="col-xs-2">
            <label class="control-label" for="inputSuccess1">Приоритет заявки</label>
            <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2"
                   value="<?= $task_a[7] ?>" disabled>
        </div>
    </div>

    <br>


    <div class="row">
        <div class="col-lg-12">
            <textarea class="form-control" rows="5" placeholder="Описание задачи" disabled><?= $task_a[2] ?></textarea>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-xs-6">
            <label class="control-label" for="inputSuccess1">Исполнитель</label>
            <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2"
                   value="<?= $task_a[3] . " " . $task_a[4] ?>" disabled>
        </div>
        <div class="col-xs-6">
            <label class="control-label" for="inputSuccess1">Постановщик</label>
            <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" value="" disabled>
        </div>
    </div>

    <br>


    <div class="row">
        <div class="col-xs-3">
            <label class="control-label" for="inputSuccess1">Название проекта</label>
            <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2"
                   value="<?= $task_a[5] ?>" disabled>
        </div>
        <div class="col-xs-3">
            <label class="control-label" for="inputSuccess1">Плановый срок</label>
            <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2"
                   value="<?= date_from_mysql($task_a[10]) ?>" disabled>
        </div>
        <div class="col-xs-2">
            <label class="control-label" for="inputSuccess1">Трудозотраты</label>
            <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2"
                   value="<?= $task_a[6] ?>" disabled>
        </div>

        <div class="col-xs-2">
            <form action="index.php">
                <label class="control-label" for="inputSuccess1">Отредактировать</label>
                <div class="form-group">
                    <input type="hidden" name="route" value="edit_a_task"/>
                    <input type="hidden" name="id_task" value="<?= $task_a[0] ?>"/>
                    <button type="submit" class="btn btn-primary">Отредактировать!</button>
                </div>
            </form>
            <a name="table"></a>
        </div>
        <div class="col-xs-2">
            <form action="index.php">
                <label class="control-label" for="inputSuccess1">Завершить задачу</label>
                <div class="form-group">
                    <input type="hidden" name="route" value="complete_a_task"/>
                    <input type="hidden" name="id_task" value="<?= $task_a[0] ?>"/>
                    <button type="submit" class="btn btn-primary">Выполнена!</button>
                </div>
            </form>
            <a name="table"></a>
        </div>

    </div>

<?php endforeach ?>
    <br><br>

    <div class="row">
        <div class="col-md-4 col-md-offset-8">

        </div>
    </div>


<?php require("../templates/footer.php") ?>