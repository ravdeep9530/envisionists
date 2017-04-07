
<!DOCTYPE html>
<html>
<head>
   <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>

<?php
if(isset($_GET['hex'])) {
    $hex = $_GET['hex'];
    $dataPoints = array();
    include "connection.php";
//Define some data

    $sxrcx=$connect->query("SELECT your_test.obt_marks,test.course_name,your_test.total_marks,your_test.date,test.tui,test.name FROM your_test INNER JOIN test ON test.id=your_test.test_id WHERE hex='".$hex."'")or die();
    while($ss=$sxrcx->fetch_assoc()) {

        array_push($dataPoints, array("label" => $ss['name'], "y" => $ss['obt_marks']));

    }

}
?>

<body>
<div id="chartContainer"></div>

<script type="text/javascript">

    $(function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "theme2",
            zoomEnabled: true,
            animationEnabled: true,
            title: {
                text: "Your Test Performance"
            },
            subtitles:[
                {   text: "(Try Zooming & Panning)" }
            ],
            data: [
                {
                    type: "line",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }
            ]
        });
        chart.render();
    });
</script>
</body>

</html>
