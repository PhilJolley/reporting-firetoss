<?php
$args = ft_get_options(['google_maps_api_key'])
?>

<div id="map"></div>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 40.6461, lng: -111.4980},
            zoom: 8
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?=$args->google_maps_api_key?>&callback=initMap" async defer></script>