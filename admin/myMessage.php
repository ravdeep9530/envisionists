<?php
/**
 * Created by PhpStorm.
 * User: WorldWiki
 * Date: 26-01-2017
 * Time: 05:31 AM
 */
include "connection.php";
if (isset($_POST['bmsg']))
{
$connect->query("UPDATE my_message SET message='".$_POST['msg']."' WHERE id=1");

}


include "adminHeader.php";
$sx=$connect->query("SELECT * FROM my_message;");
$sxx=$sx->fetch_array();
?>
<head>
    <title>My Message</title>
</head>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>My Message</h3>
            </div>
            <form action="" method="post">
            <div class="panel-body">

                <textarea name="msg"><?=$sxx['message']?></textarea>
            </div>
            <div class="panel-footer">
                <button class="btn btn-block btn-success" name="bmsg">Update My Message</button>
            </div>
            </form>
        </div>
        </div>
    </div>

</div>
<?php
include "footer.php";
?>

