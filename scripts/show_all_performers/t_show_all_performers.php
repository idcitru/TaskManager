<?php require("../templates/header.php") ?>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>
                        <div align="center">Фамилия</div>
                    </th>
                    <th>
                        <div align="center">Количество задач</div>
                    </th>
                    <th>
                        <div align="center">Общая трудоемоксть</div>
                    </th>
                    <th>
                        <div align="center">Статус</div>
                    </th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($performers as $performer): ?>
                    <tr>
                        <td>
                            <div align="left"><a
                                        href="index.php?route=default&id_performer=<?= $performer[0] ?>"> <?= $performer[1] . " " . $performer[2]; ?> </a>
                            </div>
                        </td>
                        <td>
                            <div align="center"> <?= $performer[3]; ?>  </div>
                        </td>
                        <td>
                            <div align="center"> <?= $performer[4]; ?> </div>
                        </td>
                        <td>
                            <div align="center">
                                <?php if ($performer[4] <= 10): ?>
                                    <img src="../pic/happy.png" width="35"
                                         height="35">
                                <?php elseif ($performer[4] <= 20): ?>
                                    <img src="../pic/norm.png" width="35"
                                         height="35">
                                <?php else: ?>
                                    <img src="../pic/sad.png"
                                         width="35" height="35">
                                <?php endif; ?>
                            </div>
                        </td>

                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


<?php require("../templates/footer.php") ?>