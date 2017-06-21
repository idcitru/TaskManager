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
                        <div align="center">%</div>
                    </th>
                    <th>
                        <div align="center">Труд.</div>
                    </th>
                    <th>
                        <div align="center">Исполнитель</div>
                    </th>
                    <th>
                        <div align="center">Плановая дата</div>
                    </th>
                    <th>
                        <div align="center">Сдвиг сроков</div>
                    </th>
                    <th>
                        <div align="center">Причина просрочки</div>
                    </th>
        </div>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($overdue_tasks as $overdue_task): ?>

            <tr>
                <td>
                    <div align="center">
                        <?= $overdue_task[0]; ?>
                        <?php if ($overdue_task[9] == 3) : ?>
                            <img src="../pic/flag.png" width="20" height="20">
                        <?php endif; ?>
                        <?php if ($overdue_task[9] == 1) : ?>
                            <img src="../pic/imp.png" width="20" height="20">
                        <?php endif; ?>
                    </div>
                </td>
                <td>
                    <div align="center"> <?= $overdue_task[5]; ?> </div>
                </td>
                <td>
                    <div align="left"><a
                                href="../../public/index.php?route=show_complete_a_task&id_task=<?= $overdue_task[0] ?>"> <?= str_first_ten($overdue_task[1], 50); ?>  </a>
                    </div>
                </td>
                <td>
                    <div class="progress" style="margin-bottom: 0px">
                        <?php if ($overdue_task[2] <= 50) : ?>
                            <div class="progress-bar progress-bar-danger progress-bar-striped" style="width:<?=$overdue_task[2]?>%">
                                <span><?=$overdue_task[2]?>%</span>
                            </div>
                        <?php elseif ($overdue_task[2] <= 80) :  ?>
                            <div class="progress-bar progress-bar-warning progress-bar-striped" style="width:<?=$overdue_task[2]?>%">
                                <span><?=$overdue_task[2]?>%</span>
                            </div>
                        <?php   else :  ?>
                            <div class="progress-bar progress-bar-success progress-bar-striped" style="width:<?=$overdue_task[2]?>%">
                                <span><?=$overdue_task[2]?>%</span>
                            </div>
                        <?php  endif; ?>
                    </div>
                </td>
                <td>
                    <div align="center"> <?= $overdue_task[6]; ?> </div>
                </td>
                <td>
                    <div align="center"> <?= $overdue_task[3] . " " . $overdue_task[4]; ?> </div>
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