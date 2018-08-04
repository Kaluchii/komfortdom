<script>
    function initMap() {
        var komfort = {lat: 43.202813, lng: 76.896979};
        var popupContent = '<div class="contact-popup">'+
                           '<div class="contact-popup__wrapper">'+
                               '<img class="contact-popup__logo" src="/img/logo_black.png">'+
                           '</div>'+
                        '</div>';
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            disableDefaultUI: true,
            center: {lat: 43.202813, lng: 76.896979}
        });
        var image = {
            url: '/img/map_icon.png',
            size: new google.maps.Size(1, 1),
            anchor: new google.maps.Point(1, 1)
        };
        var marker = new google.maps.Marker({
            position: komfort,
            icon: image,
            map: map
        });
        var infowindow = new google.maps.InfoWindow({
            content: popupContent
        });
        infowindow.open(map, marker);
    }
</script>