<?php
error_reporting(0);
if(isset($_SESSION['login'])&&$_SESSION['login']=="true"){

    $rdate = "02/15/2014";
    $rorigin = "1440 Lawrence Ave West";
    $rdestination = "1440 Lawrence Ave West";
    $rtime = "4:28 pm";
    $rvehicle = "Some description about vehicle";
    $rseats = "2";

    $hdate = "";
    $horigin = "";
    $hdestination = "";
    $htime = "";
    $hvehicle = "";
    $hseats = "";

}
include 'db/dbconnect.php';
include 'db/functions.php';

$requestedresult = getrequestedResuts();
$hostedresults =gethostedResults();
if($_POST['rorigin']!=null){
    $waypoint_1 = $_POST['rorigin'];
    $waypoint_2 = $_POST['rdestination'];
    $waypoint = array($waypoint_1, $waypoint_2);
}
else{
    $waypoint = [];
}

//print_r($waypoint);
//echo strtok($waypoint_1, ',') . ',' . strtok(',');;
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Waypoints in directions</title>
    <style>
        #directions-panel {
            margin-top: 10px;
            background-color: #FFEE77;
            padding: 10px;
            overflow: scroll;
            height: 174px;
        }
    </style>
    <?php include 'includes/header-files.php'; ?>
</head>
<body>
<!-- Profile Nav -->
<section>
    <?php include 'includes/profile-nav.php'; ?>
</section>
<section>
<div id="map"></div>
    <br>
<div id="right-panel">
    <div>
        <b>Start:</b>
        <select id="start">
            <?php
            $arr= $hostedresults;

            while($value = $hostedresults->fetch_assoc()) {
                if($value['email']!=$_SESSION['email']) {
                    $horigin = $value['origin'];
                }
                    ?>
                    <option value="<?php echo $horigin ?>"><?php echo $horigin ?></option>
                    <?php
                }
            ?>
       </select>
        <b>End:</b>
        <label for="end"></label><select id="end">
            <?php
//            while($value_something = $hostedresults->fetch_assoc()) {
             foreach ($arr as $value) {
                 if($value['email'] != $_SESSION['email']) {
                    $hdestination = $value['destination'];
                }
                ?>

                <option value="<?php echo $hdestination ?>"><?php echo $hdestination ?></option>
                <?php
            }
            ?>
        </select>
        <input type="submit" class="btn btn-primary" id="submit">
    </div>
    <div id="directions-panel"></div>
</div>
<script>
    function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);

        document.getElementById('submit').addEventListener('click', function() {
            calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
        window.onload = calculateAndDisplayRoute(directionsService, directionsDisplay);
    }

    function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var waypts = [];
        <?php
        for($i=0;$i<count($waypoint);$i++) { ?>
        waypts.push({
            location: '<?php echo $waypoint[$i] ?>',
            stopover: true
        });
        <?php } ?>
        directionsService.route({
            origin: document.getElementById('start').value,
            destination: document.getElementById('end').value,
            waypoints: waypts,
            optimizeWaypoints: true,
            travelMode: 'DRIVING'
        }, function(response, status) {
            if (status === 'OK') {
                directionsDisplay.setDirections(response);
                var route = response.routes[0];
                var summaryPanel = document.getElementById('directions-panel');
                summaryPanel.innerHTML = '';
                // For each route, display summary information.
                for (var i = 0; i < route.legs.length; i++) {
                    var routeSegment = i + 1;
                    summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
                        '</b><br>';
                    summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
                    summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
                    summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
                }
            }
        });
    }
</script>
<!--<script async defer-->
<!--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBM9gSZW7vdeBC14STP8fAhaMDg0MWqR6s&callback=initMap">-->
<!--</script>-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACv_02IJei64-SGTwF-AAPoj2_lnaPRc8&callback=initMap">
</script>
</section>
<!-- Footer -->
<section>
    <?php include 'includes/footer.php' ?>
</section>
</body>
</html>