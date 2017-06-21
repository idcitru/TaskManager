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
        <div class="col-xs-1">
            <div class="form-group">
                <input type="hidden" name="route" value="!"/>
                <button type="submit" class="btn btn-primary btn-block">ОК</button>
            </div>
        </div>
        </div>
    </form>

    <br><br>

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
                        <div align="center">Крайняя дата</div>
                    </th>
                    <th>
                        <div align="center">Плановая дата</div>
                    </th>
        </div>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($instructed_tasks as $instructed_task): ?>

            <tr>
                <td>
                    <div align="center">
                        <?= $instructed_task[0]; ?>
                        <?php if ($instructed_task[9] == 3) : ?>
                            <img src="../pic/flag.png" width="20" height="20">
                        <?php endif; ?>
                        <?php if ($instructed_task[9] == 1) : ?>
                            <img src="../pic/imp.png" width="20" height="20">
                        <?php endif; ?>
                    </div>
                </td>
                <td>
                    <div align="center"> <?= $instructed_task[5]; ?> </div>
                </td>
                <td>
                    <div align="left"><a
                                href="../../public/index.php?route=show_complete_a_task&id_task=<?= $instructed_task[0] ?>"> <?= str_first_ten($instructed_task[1], 40); ?>  </a>
                    </div>
                </td>
                <td>
                    <div class="progress" style="margin-bottom: 0px">
                        <?php if ($instructed_task[7] <= 50) : ?>
                            <div class="progress-bar progress-bar-danger progress-bar-striped" style="width:<?=$instructed_task[7]?>%">
                                <span><?=$instructed_task[7]?>%</span>
                            </div>
                        <?php elseif ($instructed_task[7] <= 80) :  ?>
                            <div class="progress-bar progress-bar-warning progress-bar-striped" style="width:<?=$instructed_task[7]?>%">
                                <span><?=$instructed_task[7]?>%</span>
                            </div>
                        <?php   else :  ?>
                            <div class="progress-bar progress-bar-success progress-bar-striped" style="width:<?=$instructed_task[7]?>%">
                                <span><?=$instructed_task[7]?>%</span>
                            </div>
                        <?php  endif; ?>
                    </div>
                </td>
                <td>
                    <div align="center"> <?= $instructed_task[6]; ?> </div>
                </td>
                <td>
                    <div align="center"> <?= $instructed_task[3] . " " . $instructed_task[4]; ?> </div>
                </td>
                <td>
                    <div align="center"> <?= date_from_mysql($instructed_task[8]); ?> </div>
                </td>
                <td>
                    <div align="center"> <?= date_from_mysql($instructed_task[10]); ?> </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>

        </table>
    </div>
    </div>


<?php require("../templates/footer.php") ?>