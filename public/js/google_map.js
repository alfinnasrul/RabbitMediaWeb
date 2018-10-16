var google;

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    // var myLatlng = new google.maps.LatLng(40.71751, -73.990922);
    var myLatlng = new google.maps.LatLng(-7.2900502,112.7201519);
    // 39.399872
    // -8.224454

    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 16,

        // The latitude and longitude to center the map (always required)
        center: myLatlng,

        // How you would like to style the map.
        scrollwheel: true,
        styles: [{
            "featureType": "administrative.land_parcel",
            "elementType": "all",
            "stylers": [{"visibility": "on"}]
        }, {
            "featureType": "landscape.man_made",
            "elementType": "all",
            "stylers": [{"visibility": "on"}]
        }, {"featureType": "poi", "elementType": "labels", "stylers": [{"visibility": "on"}]}, {
            "featureType": "road",
            "elementType": "labels",
            "stylers": [{"visibility": "simplified"}, {"lightness": 20}]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [{"hue": "#f49935"}]
        }, {
            "featureType": "road.highway",
            "elementType": "labels",
            "stylers": [{"visibility": "simplified"}]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{"hue": "#fad959"}]
        }, {
            "featureType": "road.arterial",
            "elementType": "labels",
            "stylers": [{"visibility": "on"}]
        }, {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{"visibility": "simplified"}]
        }, {
            "featureType": "road.local",
            "elementType": "labels",
            "stylers": [{"visibility": "simplified"}]
        }, {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [{"visibility": "on"}]
        }, {
            "featureType": "water",
            "elementType": "all",
            "stylers": [{"hue": "#a1cdfc"}, {"saturation": 30}, {"lightness": 49}]
        }]
    };


    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using out element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    var contentString = '<div id="content">' +
        '<div id="siteNotice">' +
        '</div>' +
        '<h2 id="firstHeading" class="firstHeading">RABBIT MEDIA</h2>' +
        '<div id="bodyContent">' +
        '<p align="justify"><b>JTIF</b> (Jurusan Teknik Informatika), merupakan sebuah Jurusan baru yang sangat bergengsi di Fakultas Teknik Universitas Negeri Surabaya. Diresmikan pada tahun 2014 dan menjadi jurusan kelima FT Unesa merupakan suatu pencapaian yang ditempuh dengan perjuangan yang amat sangat panjang. Di tahun 2000 antusiasme pemuda bangsa untuk mengikuti perkembangan teknologi sangatlah tinggi, serta dengan adanya industri yang menunggu lulusan diploma yang kompeten di bidang teknologi informasi menjadikan Unesa tergertak untuk membuat program studi berbasis teknologi informasi dengan harapan kedepannya akan terbentuk generasi hebat di bidang teknologi. Diawali dengan pembukaan program studi D3 Manajemen Informatika tahun 2009 sebagai pioner dan S1 Pendidikan Teknologi Informasi tahun 2012 yang saat itu masih menjadi prodi di Jurusan Teknik Elektro. Karena sudah tidak relevan lagi dengan bidang keilmuan dengan jurusan teknik elektro akhirya Universitas Negeri Surabaya membuka jurusan baru yaitu jurusan teknik informatika. Kemudian di tahun 2015 menjadi tahun pertama bagi prodi S1 Teknik Informatika dan S1 Sistem Informasi. Hingga akhirnya kini JTIf memiliki 4 prodi yaitu D3 Manajemen Informatika, S1 Pendidikan Teknologi Informasi, S1 Teknik Informatika, S1 Sistem Informasi.</p>' +
        '</div>' +
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: 500
    });

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        icon: 'images/rm_loc.png',
        animation: google.maps.Animation.BOUNCE
    });
    marker.addListener('click', function () {
        infowindow.open(map, marker);
    });
}

google.maps.event.addDomListener(window, 'load', init);