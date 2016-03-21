
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Scheduled Trips</title>
    <style>
html, body, #map-canvas {
            height: 100%;
            margin: 0px;
            padding: 0px
        }
        #panel {
            position: absolute;
            top: 5px;
            left: 50%;
            margin-left: -180px;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
        }
        /* adding css for google maps */
        .google-maps {
    position: relative;
    padding-bottom: 75%; // This is the aspect ratio
        height: 0;
            overflow: hidden;
        }
        .google-maps iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
}
    </style>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript">
        function initialize() {
            var trips = [
                //Europe
                [64.133333, -21.933333, 'Reykjavik, Iceland'],
                [64.175000, -51.738889, 'Nuuk, Greenland'],
                [63.620000, -19.600000, 'Eyjafjallajökull'],
                //S. America
                [-0.180653, -78.467838, 'Quito, Ecuador'],
                [-2.170998, -79.922359, 'Guayaqil, Ecuador'],
                [-0.829278, -90.982067, 'Galapagos Islands, Ecuador'],
                [-34.603723, -58.381593, 'Buenos Aires, Argentina'],
                [-54.801912, -68.302951, 'Ushuaia, Argentina'],
                //Antarctica
                [-64.825067, -63.494239, 'Port Lockroy, Antarctica'],
                //N. America
                [33.748995, -84.387982, 'Atlanta, GA, USA'],
                [34.221868, -83.969135, 'Lake Lanier, GA, USA'],
                [32.083541, -81.099834, 'Savannah, GA, USA'],
                [33.951935, -83.357567, 'Athens, GA, USA'],
                [33.473498, -82.010515, 'Augusta, GA, USA'],
                [31.159591, -81.388552, 'Saint Simons Island, GA, USA'],
                [32.460976, -84.987709, 'Columbus, GA, USA'],
                [30.832703, -83.278488, 'Valdosta, GA, USA'],
                [34.701484, -83.731567, 'Helen, GA, USA'],
                [36.216795, -81.674552, 'Boone, NC, USA'],
                [35.734454, -81.344457, 'Hickory, NC, USA'],
                [35.779590, -78.638179, 'Raleigh, NC, USA'],
                [35.227087, -80.843127, 'Charlotte, NC, USA'],
                [33.689060, -78.886696, 'Myrtle Beach, SC, USA'],
                [34.852619, -82.394012, 'Greenville, SC, USA'],
                [36.850769, -76.285873, 'Norfolk, VA, USA'],
                [39.802336, -74.422927, 'Blackwood, NJ, USA'],
                [39.364283, -74.4511, 'Atlantic City, NJ, USA'],
                [39.952584, -75.165222, 'Philadelphia, PA, USA'],
                [27.816415, -80.470608, 'Sebastian, Fl, USA'],
                [30.421309, -87.216915, 'Pensacola, FL, USA'],
                [28.538335, -81.379236, 'Orlando, Fl, USA'],
                [30.267153, -97.743061, 'Austin, TX, USA'],
                [29.424122, -98.493628, 'San Antonio, TX, USA'],
                [35.481743, -86.088599, 'Manchester, TN, USA'],
                [35.018991, -85.339336, 'Ruby Falls, TN, USA'],
                [32.609857, -85.480782, 'Auburn, AL, USA'],
                [36.169941, -115.139830, 'Las Vegas, NV, USA'],
                [34.012235, -117.688944, 'Chino, CA, USA'],
                [40.712784, -74.005941, 'NY, NY, USA'],
                [40.7500, -73.769417, 'Queens, NY, USA'],
                [43.096214, -79.037739, 'Niagara Falls, USA'],
                [21.306944, -157.858333, 'Honolulu, HI, USA'],
                [37.083389, -88.600048, 'Paducah, KY, USA'],
                [38.627003, -90.199404, 'St. Louis, MI, USA'],
                [32.473315, -93.802234, 'Shreveport, LS, USA'],
                [39.9833, -82.9833, 'Columbus, OH, USA'],
                [47.6097, -122.3331, 'Seattle, WA, USA'],
	[23.1333, -82.3833, 'Havana, Cuba'],
	[23.1394, -81.2861, 'Varadero, Cuba'],
	[43.7000, -79.4000, 'Toronto, Ontario, Canada'],
	[42.3314, -83.0458, 'Detriot, MI, USA'],
                //Africa
                [30.044420, 31.235712, 'Cairo, Egypt'],
                [25.687243, 32.639636, 'Luxor, Egypt'],
                [31.956578, 35.945695, 'Amman, Jordan'],
                [31.334507, 35.499586, 'Dead Sea'],
                [30.325173, 35.442581, 'Petra, Jordan'],
                [29.975899, 31.130727, 'Great Pyramid of Giza'],
                [24.088938, 32.899829, 'Aswan, Egypt'],
                //Asia
                [1.352083, 103.819836, 'Singapore'],
                [3.139003, 101.686855, 'Kuala Lumpur, Malaysia'],
                [13.756331, 100.501765, 'Bankok, Thailand'],
                [22.396428, 114.109497, 'Hong Kong'],
                [22.483182, 113.916509, 'Shekou, Shenzen, China'],
                [39.904211, 116.407395, 'Beijing, China'],
                [31.230416, 121.473701, 'Shanghai, China'],
                [37.485760, 103.456128, 'Great Wall of China']
            ];

            var latlng = new google.maps.LatLng(33.7550, -84.3900);
            var mapOptions = {
                zoom: 2,
                center: latlng,
                mapTypeId: 'roadmap'
            };

            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

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
    </script>
    <style>
#panel {
position: absolute;
            top: 5px;
            left: 50%;
            margin-left: -180px;
            width: 350px;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
        }
        #latlng {
            width: 225px;
        }
    </style>
</head>
<body>
<div id="map-canvas"></div>
</body>
</html>
