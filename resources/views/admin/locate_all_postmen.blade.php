@extends('layouts.master')

@section('pageTitle', 'Login')

@section('content')

    <style>
        #map-canvas {
            width: 500px;
            height: 500px;
        }
    </style>

    <div id="map-canvas"></div>
    <select id="type" onchange="filterMarkers(this.value);">
        <option value="">Please select category</option>
        <option value="second">second</option>
        <option value="car">car</option>
        <option value="third">third</option>
    </select>

    <script>
        var gmarkers1 = [];
        var markers1 = [];
        var infowindow = new google.maps.InfoWindow({
            content: ''
        });

        // Our markers
        markers1 = [
            ['0', 'Title 0', 52.4357808, 4.991315699999973, 'car'],
            ['1', 'Title 1', 52.4357808, 4.981315699999973, 'third'],
            ['2', 'Title 2', 52.4555687, 5.039231599999994, 'car'],
            ['3', 'Title 3', 52.4555687, 5.029231599999994, 'second'],
            ['1', 'Title 4', 52.4357808, 4.981315699999973, 'third']
        ];

        /**
         * Function to init map
         */

        function initialize() {
            var center = new google.maps.LatLng(52.4357808, 4.991315699999973);
            var mapOptions = {
                zoom: 12,
                center: center,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            };

            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            for (i = 0; i < markers1.length; i++) {
                addMarker(markers1[i]);
            }
        }

        /**
         * Function to add marker to map
         */

        function addMarker(marker) {
            var category = marker[4];
            var title = marker[1];
            var pos = new google.maps.LatLng(marker[2], marker[3]);
            var content = marker[1];

            marker1 = new google.maps.Marker({
                title: title,
                position: pos,
                category: category,
                map: map
            });

            gmarkers1.push(marker1);

            // Marker click listener
            google.maps.event.addListener(marker1, 'click', (function (marker1, content) {
                return function () {
                    console.log('Gmarker 1 gets pushed');
                    infowindow.setContent(content);
                    infowindow.open(map, marker1);
                    map.panTo(this.getPosition());
                    map.setZoom(15);
                }
            })(marker1, content));
        }

        /**
         * Function to filter markers by category
         */

        filterMarkers = function (category) {
            for (i = 0; i < markers1.length; i++) {
                marker = gmarkers1[i];
                // If is same category or category not picked
                if (marker.category == category || category.length === 0) {
                    marker.setVisible(true);
                }
                // Categories don't match
                else {
                    marker.setVisible(false);
                }
            }
        }

        // Init map
        initialize();
    </script>

@endsection
