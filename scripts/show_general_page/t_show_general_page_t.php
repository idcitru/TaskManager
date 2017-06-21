<?php require("../templates/header.php") ?>


    <form action="index.php">
        <div class="row">
            <div class="col-xs-9">
                <div class="form-group">
                    <input type="hidden" name="route" value="add_new_task"/>
                    <button type="submit" class="btn btn-primary">Добавить новую задачу</button>
                </div>
            </div>
    </form>
    <a name="table"></a>

    <div class="row">
        <div class="col-md-6">
            <h4 align="center">ВАЖНЫЕ СРОЧНЫЕ</h4>
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
                        <div align="center">Описание</div>
                    </th>
                    <th>
                        <div align="center">Исполнитель</div>
                    </th>
                    <th>
                        <div align="center">%</div>
                    </th>
                    <th>
                        <div align="center">Срок</div>
                    </th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($tasks_imp as $task): ?>
                    <?php if ($task[5] < $day_imp): ?>
                        <tr class="bg-danger">
                            <td class="danger">
                                <div align="center"> <?= $task[0]; ?>
                                    <?php if ($task[7] == 3) : ?>
                                        <img src="../pic/flag.png" width="20"
                                             height="20">
                                    <?php endif; ?>
                                    <?php if ($task[7] == 1) : ?>
                                        <img src="../pic/imp.png" width="20"
                                             height="20">
                                    <?php endif; ?>
                            </td>
                            <td class="danger">
                                <div align="center"> <?= $task[8] ?> </div>
                            </td>
                            <td class="danger">
                                <div align="left"><a data-toggle="tooltip" data-placement="bottom" title="<?= $task[1]; ?>"
                                                     href="../../public/index.php?route=show_a_task&id_task=<?= $task[0] ?>"> <?= str_first_ten($task[1], 22); ?>  </a>
                                </div>
                            </td>
                            <td class="danger">
                                <div align="left"> <?= $task[2] . " " . str_first_ten($task[3], 1); ?> </div>
                            </td>
                            <td class="danger">
                                <div class="progress" style="margin-bottom: 0px">
                                    <?php if ($task[4] <= 50) : ?>
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" style="width:<?=$task[4]?>%">
                                            <span><?=$task[4]?>%</span>
                                        </div>
                                    <?php elseif ($task[4] <= 80) :  ?>
                                        <div class="progress-bar progress-bar-warning progress-bar-striped" style="width:<?=$task[4]?>%">
                                            <span><?=$task[4]?>%</span>
                                        </div>
                                    <?php   else :  ?>
                                        <div class="progress-bar progress-bar-success progress-bar-striped" style="width:<?=$task[4]?>%">
                                            <span><?=$task[4]?>%</span>
                                        </div>
                                    <?php  endif; ?>
                                </div>
                            </td>
                            <td class="danger">
                                <div align="center"> <?= date_from_mysql($task[5]); ?> </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                </tbody>

            </table>
        </div>

        <div class="col-md-6">
            <h4 align="center">ВАЖНЫЕ НЕСРОЧНЫЕ</h4>
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
                        <div align="center">Описание</div>
                    </th>
                    <th>
                        <div align="center">Исполнитель</div>
                    </th>
                    <th>
                        <div align="center">%</div>
                    </th>
                    <th>
                        <div align="center">Срок</div>
                    </th>
                </tr>
                </thead>

                <tbody>

                <?php foreach ($tasks_imp as $task): ?>
                    <?php if ($task[5] >= $day_imp): ?>
                        <tr>
                            <td class="warning">
                                <div align="center"> <?= $task[0]; ?>
                                    <?php if ($task[7] == 3) : ?>
                                        <img src="../pic/flag.png" width="20" height="20">
                                    <?php endif; ?>
                                    <?php if ($task[7] == 1) : ?>
                                        <img src="../pic/imp.png" width="20"
                                             height="20">
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td class="warning">
                                <div align="center"> <?= $task[8]  ?> </div>
                            </td>
                            <td class="warning">
                                <div align="left"><a data-toggle="tooltip" data-placement="bottom" title="<?= $task[1]; ?>"
                                            href="../../public/index.php?route=show_a_task&id_task=<?= $task[0] ?>"> <?= str_first_ten($task[1], 22); ?>  </a>
                                </div>
                            </td>
                            <td class="warning">
                                <div align="left"> <?= $task[2] . " " . str_first_ten($task[3], 1); ?> </div>
                            </td>
                            <td class="warning">
                                <div class="progress" style="margin-bottom: 0px">
                                    <?php if ($task[4] <= 50) : ?>
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" style="width:<?=$task[4]?>%">
                                            <span><?=$task[4]?>%</span>
                                        </div>
                                    <?php elseif ($task[4] <= 80) :  ?>
                                        <div class="progress-bar progress-bar-warning progress-bar-striped" style="width:<?=$task[4]?>%">
                                            <span><?=$task[4]?>%</span>
                                        </div>
                                    <?php   else :  ?>
                                        <div class="progress-bar progress-bar-success progress-bar-striped" style="width:<?=$task[4]?>%">
                                            <span><?=$task[4]?>%</span>
                                        </div>
                                    <?php  endif; ?>
                                </div>
                            </td>
                            <td class="warning">
                                <div align="center"> <?= date_from_mysql($task[5]); ?> </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h4 align="center">НЕВАЖНЫЕ СРОЧНЫЕ</h4>
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
                        <div align="center">Описание</div>
                    </th>
                    <th>
                        <div align="center">Исполнитель</div>
                    </th>
                    <th>
                        <div align="center">%</div>
                    </th>
                    <th>
                        <div align="center">Срок</div>
                    </th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($tasks_unimp as $task): ?>
                    <?php if ($task[5] < $day_imp): ?>
                        <tr class="success">
                            <td>
                                <div align="center">
                                    <?= $task[0]; ?>
                                    <?php if ($task[7] == 3) : ?>
                                        <img src="../pic/flag.png" width="20"
                                             height="20">
                                    <?php endif; ?>
                                    <?php if ($task[7] == 1) : ?>
                                        <img src="../pic/imp.png" width="20"
                                             height="20">
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td class="">
                                <div align="center"> <?= $task[8] ?> </div>
                            </td>
                            <td>
                                <div align="left"><a data-toggle="tooltip" data-placement="bottom" title="<?= $task[1]; ?>"
                                                     href="../../public/index.php?route=show_a_task&id_task=<?= $task[0] ?>"> <?= str_first_ten($task[1], 22); ?>  </a>
                                </div>
                            </td>
                            <td>
                                <div align="left"> <?= $task[2] . " " . str_first_ten($task[3], 1); ?> </div>
                            </td>
                            <td>
                                <div class="progress" style="margin-bottom: 0px">
                                    <?php if ($task[4] <= 50) : ?>
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" style="width:<?=$task[4]?>%">
                                            <span><?=$task[4]?>%</span>
                                        </div>
                                    <?php elseif ($task[4] <= 80) :  ?>
                                        <div class="progress-bar progress-bar-warning progress-bar-striped" style="width:<?=$task[4]?>%">
                                            <span><?=$task[4]?>%</span>
                                        </div>
                                    <?php   else :  ?>
                                        <div class="progress-bar progress-bar-success progress-bar-striped" style="width:<?=$task[4]?>%">
                                            <span><?=$task[4]?>%</span>
                                        </div>
                                    <?php  endif; ?>
                                </div>
                            </td>
                            <td>
                                <div align="center"> <?= date_from_mysql($task[5]); ?> </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>


        <div class="col-md-6">
            <h4 align="center">ТЕРМИНАЛ</h4>
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
                        <div align="center">Описание</div>
                    </th>
                    <th>
                        <div align="center">Исполнитель</div>
                    </th>
                    <th>
                        <div align="center">%</div>
                    </th>
                    <th>
                        <div align="center">Срок</div>
                    </th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($tasks_unimp as $task): ?>
                    <?php if ($task[5] >= $day_imp): ?>
                        <tr>
                            <td>
                                <div align="center">
                                    <?= $task[0]; ?>
                                    <?php if ($task[7] == 3) : ?>
                                        <img src="../pic/flag.png" width="20"
                                             height="20">
                                    <?php endif; ?>
                                    <?php if ($task[7] == 1) : ?>
                                        <img src="../pic/imp.png" width="20"
                                             height="20">
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td >
                                <div align="center"> <?= $task[8] ?> </div>
                            </td>
                            <td>
                                <div align="left"><a data-toggle="tooltip" data-placement="bottom" title="<?= $task[1]; ?>"
                                                     href="../../public/index.php?route=show_a_task&id_task=<?= $task[0] ?>"> <?= str_first_ten($task[1], 22); ?>  </a>
                                </div>
                            </td>
                            <td>
                                <div align="left"> <?= $task[2] . " " . str_first_ten($task[3], 1); ?> </div>
                            </td>
                            <td>
                                <div class="progress" style="margin-bottom: 0px">
                                    <?php if ($task[4] <= 50) : ?>
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" style="width:<?=$task[4]?>%">
                                            <span><?=$task[4]?>%</span>
                                        </div>
                                    <?php elseif ($task[4] <= 80) :  ?>
                                        <div class="progress-bar progress-bar-warning progress-bar-striped" style="width:<?=$task[4]?>%">
                                            <span><?=$task[4]?>%</span>
                                        </div>
                                    <?php   else :  ?>
                                        <div class="progress-bar progress-bar-success progress-bar-striped" style="width:<?=$task[4]?>%">
                                            <span><?=$task[4]?>%</span>
                                        </div>
                                    <?php  endif; ?>
                                </div>
                            </td>
                            <td>
                                <div align="center"> <?= date_from_mysql($task[5]); ?> </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
    <div class="col-md-12">
        <h4 align="center">ПЛАН РАБОТ НА НЕДЕЛЮ</h4>
        <br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>
                    <div align="center"><?= date_from_mysql(date("Y-m-d")) ?></div>
                </th>
                <th>
                    <div align="center"><?= date_from_mysql(date("Y-m-d", strtotime("+1 day"))) ?></div>
                </th>
                <th>
                    <div align="center"><?= date_from_mysql(date("Y-m-d", strtotime("+2 day"))) ?></div>
                </th>
                <th>
                    <div align="center"><?= date_from_mysql(date("Y-m-d", strtotime("+3 day"))) ?></div>
                </th>
                <th>
                    <div align="center"><?= date_from_mysql(date("Y-m-d", strtotime("+4 day"))) ?></div>
                </th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>
                    <?php foreach ($tasks_alls as $task): ?>
                        <?php if ($task[5] <= (date("Y-m-d"))) : ?>
                            <div align="left">
                                <?php if ($task[7] == 3) : ?>
                                    <img src="../pic/flag.png" width="20" height="20">
                                <?php endif; ?>
                                <?php if ($task[7] == 1) : ?>
                                    <img src="../pic/imp.png" width="20" height="20">
                                <?php endif; ?>
                                    <a data-toggle="tooltip" data-placement="bottom" title="<?= $task[1]; ?>"
                                       href="../../public/index.php?route=show_a_task&id_task=<?= $task[0] ?>"> <?= $task[8] . " " . str_first_ten($task[1], 22); ?>  </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </td>

                <td>
                    <?php foreach ($tasks_alls as $task): ?>
                        <?php if ((date("Y-m-d", strtotime("+1 day"))) == $task[5]) : ?>
                            <div align="left">
                                <?php if ($task[7] == 3) : ?>
                                    <img src="../pic/flag.png" width="20" height="20">
                                <?php endif; ?>
                                <?php if ($task[7] == 1) : ?>
                                    <img src="../pic/imp.png" width="20" height="20">
                                <?php endif; ?>
                                <a data-toggle="tooltip" data-placement="bottom" title="<?= $task[1]; ?>"
                                   href="../../public/index.php?route=show_a_task&id_task=<?= $task[0] ?>"> <?= $task[8] . " " . str_first_ten($task[1], 22); ?>  </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($tasks_alls as $task): ?>
                        <?php if ($task[5] == (date("Y-m-d", strtotime("+2 day")))) : ?>
                            <div align="left">
                                <?php if ($task[7] == 3) : ?>
                                    <img src="../pic/flag.png" width="20" height="20">
                                <?php endif; ?>
                                <?php if ($task[7] == 1) : ?>
                                    <img src="../pic/imp.png" width="20" height="20">
                                <?php endif; ?>
                                <a data-toggle="tooltip" data-placement="bottom" title="<?= $task[1]; ?>"
                                   href="../../public/index.php?route=show_a_task&id_task=<?= $task[0] ?>"> <?= $task[8] . " " . str_first_ten($task[1], 22); ?>  </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($tasks_alls as $task): ?>
                        <?php if ((date("Y-m-d", strtotime("+3 day"))) == $task[5]) : ?>
                            <div align="left">
                                <?php if ($task[7] == 3) : ?>
                                    <img src="../pic/flag.png" width="20" height="20">
                                <?php endif; ?>
                                <?php if ($task[7] == 1) : ?>
                                    <img src="../pic/imp.png" width="20" height="20">
                                <?php endif; ?>
                                <a data-toggle="tooltip" data-placement="bottom" title="<?= $task[1]; ?>"
                                   href="../../public/index.php?route=show_a_task&id_task=<?= $task[0] ?>"> <?= $task[8] . " " . str_first_ten($task[1], 22); ?>  </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($tasks_alls as $task): ?>
                        <?php if ($task[5] === (date("Y-m-d", strtotime("+4 day")))) : ?>
                            <div align="left">
                                <?php if ($task[7] == 3) : ?>
                                    <img src="../pic/flag.png" width="20" height="20">
                                <?php endif; ?>
                                <?php if ($task[7] == 1) : ?>
                                    <img src="../pic/imp.png" width="20" height="20">
                                <?php endif; ?>
                                <a data-toggle="tooltip" data-placement="bottom" title="<?= $task[1]; ?>"
                                   href="../../public/index.php?route=show_a_task&id_task=<?= $task[0] ?>"> <?= $task[8] . " " . str_first_ten($task[1], 22); ?>  </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </td>
            </tr>
            </tbody>

        </table>
    </div>




<?php require("../templates/footer.php") ?>