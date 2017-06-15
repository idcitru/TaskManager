<?php require("../templates/header.php") ?>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
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
                        <div align="center">Плановая дата</div>
                    </th>
        </div>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($overdue_tasks as $overdue_task): ?>

            <tr>
                <td>
                    <div align="center">
                        <?php if ($overdue_task[9] == 3) : ?>
                            <img src="../pic/flag.png" width="20" height="20">
                        <?php endif; ?>
                        <?= $overdue_task[0]; ?>
                    </div>
                </td>
                <td>
                    <div align="center"> <?= $overdue_task[5]; ?> </div>
                </td>
                <td>
                    <div align="left"><a
                                href="../../public/index.php?route=show_complete_a_task&id_task=<?= $overdue_task[0] ?>"> <?= $overdue_task[1]; ?>  </a>
                    </div>
                </td>
                <td>
                    <div align="left"> <?= $overdue_task[2]; ?> </div>
                </td>
                <td>
                    <div align="center"> <?= $overdue_task[3] . " " . $overdue_task[4]; ?> </div>
                </td>
                <td>
                    <div align="center"> <?= $overdue_task[7]; ?> </div>
                </td>
                <td>
                    <div align="center"> <?= $overdue_task[6]; ?> </div>
                </td>
                <td>
                    <div align="center"> <?= date_from_mysql($overdue_task[8]); ?> </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>

        </table>
    </div>
    </div>


<?php require("../templates/footer.php") ?>