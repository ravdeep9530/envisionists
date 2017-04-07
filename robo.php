<?php
/**
 * Created by PhpStorm.
 * User: WorldWiki
 * Date: 26-01-2017
 * Time: 03:52 PM
 */
session_start();
include "connection.php";
$title='Robotics';
include "theader.php";
?>

<link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Lobster" rel="stylesheet">

<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Robotics</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Robotcs</li>
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
                    <h3 style="color: rgba(15, 0, 255, 0.55);  color: rgba(255, 6, 0, 0.95); font-family: 'Josefin Slab', serif;"><b>We know that countries like Germany,Japan,Switzerland,America are much advanced in automation and robotics than India.We Indians are lagging almost 10 years behind in this context.</b></h3>
                <h4 style=""><u>Has anyone given a thought why is that so?</u></h4>
                    <p class="text-justify" style="font-family: 'Josefin Slab', serif;">It is because in those countries children start working on things when they are school while our Indian students hear about them when they get in college.</p>
                <p class="text-justify" style="font-family: 'Josefin Slab', serif;">Robotics is the future.All the manufacturing  companies are moving towards Automation And Robotics, towards digitization but talking about the youth of our country,they lack knowledge.
                    So, we aim to provide them with knowledge so that they can learn and implement and succeed and take up India to a level of glory at which it once was.</p>
                    <p><b>Join Our Robotic Community & Let us Tech You Through Live Video Sessions.</b> </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

            <?php
            $cx=$connect->query("SELECT * FROM robotics Order By id DESC ");
            while($xx=$cx->fetch_assoc())
            {
                ?>
                <div class="col-sm-6">


                    <h2><h4 > <?=$xx['des']?><small>( <?=$xx['date']?>)</small></h4></h2>
                    <div class="embed-responsive embed-responsive-16by9">
                        <?=$xx['embed']?>
                    </div>
                </div>
            <?php
            }
            ?>



    </div>
</div></section>

<div  style=" z-index: 2500; position: fixed; padding: 0px; width: 100%; bottom: 0px;"><div class=""><button onclick="pop()" style="padding: 10px; border-radius: 0;" class="btn btn-block btn-success">Suscribe Now</button></div></div>
<?php
include "footer.php";
?>
<script>
    function pop() {
        $('#myModal').modal('show');
    }
</script>