<?php
/**
 * Created by PhpStorm.
 * User: WorldWiki
 * Date: 26-01-2017
 * Time: 03:52 PM
 */
session_start();
include "connection.php";
$title='Personality';
include "theader.php";
?>

<link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Lobster" rel="stylesheet">
<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Personality</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Personality</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="mu-course-content">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-body">
                    <h3 style="font-family: 'Josefin Slab', serif; color: rgba(255, 6, 0, 0.95);"><b>Personality development, leadership training and counseling.</b></h3>
                    <h4 style=""><u>Has anyone given a thought why is that so?</u></h4>
                    <p class="text-justify" style="font-family: 'Josefin Slab', serif;">Stop faffing  around and take a peek into THE PEAK/ protégé. Go away from the hurly-burly  of the hoi polloi.</p>
                    <p class="text-justify" style="font-family: 'Josefin Slab', serif;">There is no point in wasting your time like a bump on a log. Make ur life worthy as a bat ,out of hell and get your daily grub of wits To fix and Unravel  all your quandaries here the wisecrack From the nerdy nerds.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-12">
            <?php
            $cx=$connect->query("SELECT * FROM personal Order By id DESC ");
            while($xx=$cx->fetch_assoc())
            {
                ?>
            <div class="col-sm-6">


                <h2><h4> <?=$xx['des']?><small>( <?=$xx['date']?>)</small></h4></h2>
                <div class="embed-responsive embed-responsive-4by3">
                    <?=$xx['embed']?>
                </div>
               </div>
                <?php
            }
            ?>


        </div>
    </div>
</div>
    </section>
<div  style="position: fixed; z-index: 2500; padding: 0px; width: 100%; bottom: 0px;"><div class=""><button onclick="pop()" style=" padding: 10px; border-radius: 0;" class="btn btn-block btn-success">Suscribe Now</button></div></div>

<?php
include "footer.php";
?>
<script>
    function pop() {
        $('#myModal').modal('show');
    }
</script>