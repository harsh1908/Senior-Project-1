
<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">

            <li><span><?php echo $rdate; ?></span></li>
            <li><span><?php echo $rtime; ?></span></li>
            <li><span>Seats Available - <?php echo $rseats; ?></span></li>
            <li>Vehicle : <?php echo $rvehicle ?></li>
            <li> Distance: <?php echo $rdistance ?> </li>

        </ul>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-7">
        <div class="map"></div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-7">
        <ul>
            <li><?php echo $rorigin ?> to <?php echo $rdestination; ?>
            </li>
            <li>
                <form name="sendtopayment" action="/waypoint.php" method="post">
                    <input type="hidden" name="remail" value="<?php echo $remail; ?>">
                    <input type="hidden" id="rorigin" name="rorigin" value="<?php echo $rorigin; ?>">
                    <input type="hidden" id="rdestination" name="rdestination" value="<?php echo $rdestination; ?>">
                    <input type="hidden" name="rdate" value="<?php echo $rdate; ?>">
                    <input type="hidden" name="rtime" value="<?php echo $rtime; ?>">
                    <button type="submit" class="btn btn-primary">View Map</button>  <img src="/images/map.png" alt="Map" style="width:10%">
                    <p></p>
                </form>
                <br>
                <form name="sendtorequestpage" action="/redirect.php" method="post">
                    <input type="hidden" name="remail" value="<?php echo $remail; ?>">
                    <input type="hidden" id="rorigin" name="rorigin" value="<?php echo $rorigin; ?>">
                    <input type="hidden" id="rdestination" name="rdestination" value="<?php echo $rdestination; ?>">
                    <input type="hidden" name="rdate" value="<?php echo $rdate; ?>">
                    <input type="hidden" name="rtime" value="<?php echo $rtime; ?>">
                    <button type="submit" class="btn btn-success"><a href="/payment.php" title="Lorem ipsum"><i class="" aria-hidden="true"></i></a>Accept</button>
<!--                <button type="button" class="btn btn-success">Accept</button>-->
<!--                </form>-->
<!--                <button name="sendtorequestpage" action="/redirect.php" method="post" type="submit" class="btn btn-success"><a title="Lorem ipsum"></i></a>Accept</button>-->


                <?php



                echo "<a href='/deleterequestedride.php?id=" . $value['id'] . "' class='btn btn-danger'> Delete</a>";

                ?>
                <?php


                ?>

            </li>
        </ul>

    </div>
</article>
<script>
    function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);

        // document.getElementById('submit').addEventListener('click', function() {
        //     calculateAndDisplayRoute(directionsService, directionsDisplay);
        // });
        window.onload = calculateAndDisplayRoute(directionsService, directionsDisplay);
    }

    function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var waypts = [];
        // var checkboxArray = document.getElementById('waypoints');
        // for (var i = 0; i < checkboxArray.length; i++) {
        //     if (checkboxArray.options[i].selected) {
        //         waypts.push({
        //             location: checkboxArray[i].value,
        //             stopover: true
        //         });
        //     }
        // }

        directionsService.route({
            origin: document.getElementById('rorigin').value,
            destination: document.getElementById('rdestination').value,
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
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }
</script>
<!--<script async defer-->
<!--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBM9gSZW7vdeBC14STP8fAhaMDg0MWqR6s&callback=initMap">-->
<!--</script>-->
<!--<script async defer-->
<!--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACv_02IJei64-SGTwF-AAPoj2_lnaPRc8&callback=initMap">-->
<!--</script>-->

