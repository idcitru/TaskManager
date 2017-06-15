<?php require("../templates/header.php") ?>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <col width="20" valign="top">
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
                        <div align="center">Описание</div>
                    </th>
                    <th>
                        <div align="center">Исполнитель</div>
                    </th>
                    <th>
                        <div align="center">Приоритет</div>
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
                    <div align="left"> <?= $task_complete[2]; ?> </div>
                </td>
                <td>
                    <div align="center"> <?= $task_complete[3] . " " . $task_complete[4]; ?> </div>
                </td>
                <td>
                    <div align="center"> <?= $task_complete[7]; ?> </div>
                </td>
                <td>
                    <div align="center"> <?= $task_complete[6]; ?> </div>
                </td>
                <td>
                    <div align="center"> <?= date_from_mysql($task_complete[8]); ?> </div>
                </td>
                <td>
                    <div align="center"> <?= date_from_mysql($task_complete[9]); ?> </div>
                </td>
                <td>
                    <div align="center"> <?= date_from_mysql($task_complete[10]); ?> </div>
                </td>
            <td>
                <div align="center">
                    <?php if ($task_complete[10] > $task_complete[9]) : ?>
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