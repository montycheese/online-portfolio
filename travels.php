<?php include("includes/header.php");?>

<!-- One -->
<section id="one" class="wrapper special" style="padding-top: .5em;">
    <div class="inner">
        <header class="major" style="margin-bottom: 0em;">
            <h2>Travels</h2>
        </header>
        <h5><a href="includes/travelMap.php">Click for Full Screen</a></h5>
        <div class="google-maps"id="theMap">
            <iframe width="700" height="500" frameborder="3"
                    scrolling="no" marginheight="0" marginwidth="0"
                    src="includes/travelMap.php">
            </iframe>
        </div>
    </div>
    <p>Last Destination <a href="https://en.wikipedia.org/wiki/Columbus,_Ohio">Columbus, OH</a></p>

    <!--
    <br />
    <h3>Learn how I made this!</h3>
    <pre>
        <code>
Google Maps API
src="https://maps.googleapis.com/maps/api/js?v=3.exp">
function initialize() {
    var trips = [
        //Europe
        [64.133333, -21.933333, 'Reykjavik, Iceland'],
        [64.175000, -51.738889, 'Nuuk, Greenland'],
        [63.620000, -19.600000, 'Eyjafjallajökull'],
        //S. America
        [-0.180653, -78.467838, 'Quito, Ecuador'],
        ...
        //Antarctica
        [-64.825067, -63.494239, 'Port Lockroy, Antarctica'],
        //N. America
        [33.748995, -84.387982, 'Atlanta, GA, USA'],
        [34.221868, -83.969135, 'Lake Lanier, GA, USA'],
        Add the rest of the latitude/longitude/city name 5 tuples here......
    ];
    //Center the map
    var latlng = new google.maps.LatLng(33.7550, -84.3900);
    var mapOptions = {
        zoom: 2,
        center: latlng,
        mapTypeId: 'roadmap'
    };
    //create the google maps object
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    //add markers to the map for each city you've visited
    for(var i = 0; i < trips.length; i++ ){
        var latlng = new google.maps.LatLng(trips[i][0], trips[i][1]);
        //var latlng_dropoff = new google.maps.LatLng(trips[i][2], trips[i][3]);
        var marker = new google.maps.Marker({
            position: latlng,
            title: trips[i][2],
            map: map
        });
        attachMarkerInfo(marker, trips[i][2]);
    }
    //attach data to markers
    function attachMarkerInfo(marker, msg){
        var infowindow = new google.maps.InfoWindow({
            content: msg
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(marker.get('map'), marker);
        });
    }
}
google.maps.event.addDomListener(window, 'load', initialize);
        </code>
    </pre>
    -->
</section>

<?php include("includes/footer.php");?>
</body>
</html>