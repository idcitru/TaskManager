<?php require("../templates/header.php") ?>


    <div class="row">

    <form action="index.php">
        <div class="col-xs-3">
            <select class="form-control" name="project_id">
                <option value="1" selected="selected">Выберите проект</option>
                <?php foreach ($projects as $project) : ?>
                    <option value="<?= $project[0]; ?>"> <?= $project[2] . " " . $project[1] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-xs-3">
            <select class="form-control" name="performer_id">
                <option value="NULL" selected="selected">Выберите исполнителя</option>
                <?php foreach ($performers as $performer) : ?>
                    <option value="<?= $performer[0]; ?>"> <?= $performer[1] . " " . $performer[2] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-xs-1">
            <div class="form-group">
                <input type="hidden" name="route" value="!"/>
                <button type="submit" class="btn btn-primary btn-block">ОК</button>
            </div>
        </div>
        </div>
    </form>

        <div class="col-md-12">
            <table class="table table-hover">
                <col width="120" valign="top">
                <col width="250" valign="top">
                <col width="750" valign="top">
                <col width="250" valign="top">
                <col width="150" valign="top">
                <col width="150" valign="top">
                <col width="150" valign="top">
                <col width="170" valign="top">
                <thead>
                <tr>
                    <th>
                        <div align="center">ID</div>
                    </th>
                    <th>
                        <div align="center">Проект</div>
                    </th>
                    <th>
                        <div align="center">Название</div>
                    </th>
                    <th>
                        <div align="center">Исполнитель</div>
                    </th>
                    <th>
                        <div align="center">Труд.</div>
                    </th>
                    <th>
                        <div align="center">Крайняя дата</div>
                    </th>
                    <th>
                        <div align="center">Плановая дата</div>
                    </th>
                    <th>
                        <div align="center">Фактическая дата</div>
                    </th>
                    <th>
                        <div align="center">Статус</div>
                    </th>
        </div>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($tasks_complete as $task_complete): ?>
            <tr>
                <td>
                    <div align="center"> <?= $task_complete[0]; ?>
                        <?php if ($task_complete[10] == 3) : ?>
                            <img src="../pic/flag.png" width="20" height="20">
                        <?php endif; ?>
                        <?php if ($task_complete[10] == 1) : ?>
                            <img src="../pic/imp.png" width="20" height="20">
                        <?php endif; ?>
                    </div>
                </td>
                <td>
                    <div align="center"> <?= $task_complete[5]; ?> </div>
                </td>
                <td>
                    <div align="left"><a
                                href="../../public/index.php?route=show_complete_a_task&id_task=<?= $task_complete[0] ?>"> <?= $task_complete[1]; ?>  </a>
                    </div>
                </td>
                <td>
                    <div align="center"> <?= $task_complete[3] . " " . $task_complete[4]; ?> </div>
                </td>
                <td>
                    <div align="center"> <?= $task_complete[6]; ?> </div>
                </td>
                <td>
                    <div align="center"> <?= date_from_mysql($task_complete[7]); ?> </div>
                </td>
                <td>
                    <div align="center"> <?= date_from_mysql($task_complete[8]); ?> </div>
                </td>
                <td>
                    <div align="center"> <?= date_from_mysql($task_complete[9]); ?> </div>
                </td>
                <td>
                    <div align="center">
                        <?php if ($task_complete[9] > $task_complete[8]) : ?>
                            <img src="../pic/sad.png"
                                 width="35" height="35">
                        <?php else: ?>
                            <img src="../pic/happy.png" width="35"
                                 height="35">
                        <?php endif ?>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
    </div>


<?php require("../templates/footer.php") ?>