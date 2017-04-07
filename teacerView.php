<?php
/**
 * Created by PhpStorm.
 * User: WorldWiki
 * Date: 08-02-2017
 * Time: 05:02 AM
 */
session_start();
$title = 'Teacher Discussion';
include "theader.php";

?>
    <section id="mu-course-content">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <form method="post" action="">
                        <span class="col-lg-10"> <textarea type="text" name="p_data" required class="form-control"
                                                        placeholder="Enter Your Question.." style="height: 200px;"></textarea></span>
                        <button type="submit" name="addP" class="btn btn-sm col-lg-2 btn-info "><i class="fa fa-edit"></i> Post</button>
                    </form>
                    <?php
                    include "connection.php";
                    $q = $connect->query("SELECT * FROM `post` ORDER BY p_id DESC") or die($connect->error);
                    while ($rr = $q->fetch_assoc()) {
                        $h = $rr['post_hex'];
                        $p_id=$rr['p_id'];
                        $w = $connect->query("SELECT name From people WHERE hex='$h'");
                        $sw = $w->fetch_assoc();
                        ?>

                       <div class="col-lg-12">
                           <hr/>
                           <span class="col-lg-9"><h4><?= $sw['name'] ?><i class="fa fa-arrow-right"></i> <span
                                    style="color: rgba(255, 93, 56, 0.55);"><?= $rr['data'] ?></></h4></span><span class="pull-right">(<?=$rr['date']?>)</span>

                       </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <br/>
                            <form method="post">
                                <?php
                        $qq = $connect->query("SELECT * FROM `comments` WHERE p_id=$p_id ORDER BY c_id DESC") or die($connect->error);
                        while ($rrq = $qq->fetch_assoc()) {
                            $h = $rrq['hex_c'];
                            $w = $connect->query("SELECT name From People WHERE hex='$h'");
                            $sw = $w->fetch_assoc();
                            ?>
                            <div class="col-lg-12"> <span class="col-lg-8"><h5><i class="fa fa-comment"></i> <?= $sw['name'] ?> <i class="fa fa-angle-double-right"></i><p></p>
                                        <p
                                          class="text-justify"  style="color:#2ac610;"><?= $rrq['cont'] ?> <small><?=$rrq['date']?></small></p></h5></span>
                            </div>
                            <?php
                        }
                                ?>
                            <span class="col-lg-9"><textarea class="form-control" name="c_data" required
                                                             placeholder="Enter Comment"></textarea></span><span
                                class="col-lg-2">
                                     <input name="p_id" hidden value="<?=$rr['p_id']?>"/>

                                <button class="btn btn-lg btn-success" name="addC" type="submit">
                            </form>
                            <i class="fa fa-comment"></i>
                                </button></span>
                        </div>

                        <?php
                    }
                    ?>
                    <div class="col-lg-12">
                        <hr/>
                    </div>


                </div>
                <hr/>
            </div>
        </div>
    </section>
<?php include "footer.php"; ?>