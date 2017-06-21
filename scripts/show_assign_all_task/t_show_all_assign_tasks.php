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
                        <div align="center">Постановщик</div>
                    </th>
                    <th>
                        <div align="center">Крайняя дата</div>
                    </th>
        </div>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($assign_tasks as $assign_task): ?>

            <tr>
                <td>
                    <div align="center">
                        <?= $assign_task[0]; ?>
                        <?php if ($assign_task[9] == 3) : ?>
                            <img src="../pic/flag.png" width="20" height="20">
                        <?php endif; ?>
                        <?php if ($assign_task[9] == 1) : ?>
                            <img src="../pic/imp.png" width="20" height="20">
                        <?php endif; ?>
                    </div>
                </td>
                <td>
                    <div align="center"> <?= $assign_task[5]; ?> </div>
                </td>
                <td>
                    <div align="left"><a
                                href="../../public/index.php?route=assign_a_task&id_task=<?= $assign_task[0] ?>"> <?= $assign_task[1]; ?>  </a>
                    </div>
                </td>
                <td>
                    <div align="center"> <?= $assign_task[3] . " " . $assign_task[4]; ?> </div>
                </td>
                <td>
                    <div align="center"> <?= date_from_mysql($assign_task[8]); ?> </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>

        </table>
    </div>
    </div>


<?php require("../templates/footer.php") ?>