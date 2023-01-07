<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Trajet parcourir </title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
  <body>

    <div id="map"></div>

    <script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: 34.0928092, lng: -118.3286614}
        });
        directionsDisplay.setMap(map);

        calculateAndDisplayRoute(directionsService, directionsDisplay);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {

        var start = new google.maps.LatLng(<?php echo e($localisation_id_depart->latitude); ?>, <?php echo e($localisation_id_depart->longitude); ?>);
        var end = new google.maps.LatLng(<?php echo e($localisation_id_arrive->latitude); ?>, <?php echo e($localisation_id_arrive->longitude); ?>);

        directionsService.route({
          origin: start,
          destination: end,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C1gSTNNL7AwTBAJXxFDefJhWk-PtuNE&callback=initMap">
    </script>
  </body>
</html>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/direction.blade.php ENDPATH**/ ?>