<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><span><?php echo $hdate; ?></span></li>
            <li><span><?php echo $htime; ?></span></li>
            <li><span>Seats Available - <?php echo $hseats; ?></span></li>
            <li>Vehicle : <?php echo $hvehicle ?></li>
        </ul>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7">
        <div id="map<?php echo $htime?>"></div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-7">
        <ul>
            <li><?php echo $horigin ?> to <?php echo $hdestination; ?>
            </li>
            <li>
                <form name="sendtopayment" action="/waypoint.php" method="post">
                    <input type="hidden" name="hemail" value="<?php echo $hemail; ?>">
                    <input type="hidden" id="horigin" name="horigin" value="<?php echo $horigin; ?>">
                    <input type="hidden" id="hdestination" name="hdestination" value="<?php echo $hdestination; ?>">
                    <input type="hidden" name="hdate" value="<?php echo $hdate; ?>">
                    <input type="hidden" name="htime" value="<?php echo $htime; ?>">
                    <button type="submit" class="btn btn-primary">View Map</button><img src="/images/map.png" alt="Map" style="width:10%">

                    <p></p>
                </form>
                <br>
                <button type="button" class="btn btn-success"><a href="/payment.php" title="Click here to pay and book the ride" class="nav-link">Accept</a></button>
                <?php



                echo "<a href='/deletehostedride.php?id=" . $value['id'] . "' class='btn btn-danger'> Delete</a>";

                ?>
                <?php


                ?>

            </li>

        </ul>

    </div>
</article>

<!--<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACv_02IJei64-SGTwF-AAPoj2_lnaPRc8&callback=initMap">
</script>-->

