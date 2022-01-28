$(document).ready(function(){
    (function( $ ) {

    /**
     * initMap
     *
     * Renders a Google Map onto the selected jQuery element
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   jQuery $el The jQuery element.
     * @return  object The map instance.
     */
    function initMap( $el ) {

        // Find marker elements within map.
        var $markers = $el.find('.marker');

        // Create gerenic map.
        var mapArgs = {
            zoom        : $el.data('zoom') || 14,
            mapTypeId   : google.maps.MapTypeId.TERRAIN
        };
        var map = new google.maps.Map( $el[0], mapArgs );

        // Add markers.
        map.markers = [];
        $markers.each(function(){
            initMarker( $(this), map );
        });

        // Center map based on markers.
        centerMap( map );

        // Return map instance.
        return map;
    }

    /**
     * initMarker
     *
     * Creates a marker for the given jQuery element and map.
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   jQuery $el The jQuery element.
     * @param   object The map instance.
     * @return  object The marker instance.
     */
    function initMarker( $marker, map ) {

        // Get position from marker.
        var lat = $marker.data('lat');
        var lng = $marker.data('lng');
        var latLng = {
            lat: parseFloat( lat ),
            lng: parseFloat( lng )
        };

        // Create marker instance.
        var marker = new google.maps.Marker({
            position : latLng,
            map: map
        });

        // Append to reference for later use.
        map.markers.push( marker );

        // If marker contains HTML, add it to an infoWindow.
        if( $marker.html() ){

            // Create info window.
            var infowindow = new google.maps.InfoWindow({
                content: $marker.html()
            });

            // Show info window when marker is clicked.
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open( map, marker );
            });
        }
    }

    /**
     * centerMap
     *
     * Centers the map showing all markers in view.
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   object The map instance.
     * @return  void
     */
    function centerMap( map ) {

        // Create map boundaries from all map markers.
        var bounds = new google.maps.LatLngBounds();
        map.markers.forEach(function( marker ){
            bounds.extend({
                lat: marker.position.lat(),
                lng: marker.position.lng()
            });
        });

        // Case: Single marker.
        if( map.markers.length == 1 ){
            map.setCenter( bounds.getCenter() );

        // Case: Multiple markers.
        } else{
            map.fitBounds( bounds );
        }
    }

    // Render maps on page load.
    $(document).ready(function(){
        $('#kuligMap').each(function(){
            var map = initMap( $(this) );
        });
    });

    })(jQuery);
});


/**
 * Mapa naszych kuligów
 */

 $(document).ready(function(){
    (function( $ ) {

    /**
     * initMap
     *
     * Renders a Google Map onto the selected jQuery element
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   jQuery $el The jQuery element.
     * @return  object The map instance.
     */
    function initMap( $el ) {

        // Find marker elements within map.
        var $markers = $el.find('.marker');

        // Create gerenic map.
        var mapArgs = {
            center      : { lat: 49.7961472, lng: 19.186736 },
            zoom        : $el.data('zoom') || 11,
            mapTypeId   : google.maps.MapTypeId.TERRAIN
        };
        var map = new google.maps.Map( $el[0], mapArgs );

        // Add markers.
        map.markers = [];
        $markers.each(function(){
            initMarker( $(this), map );
        });

        // Center map based on markers.
        // centerMap( map );

        const iconBase =
            "https://developers.google.com/maps/documentation/javascript/examples/full/images/";
        const icons = {
            slaski: {
                icon: iconBase + "parking_lot_maps.png",
            },
            maly: {
                icon: iconBase + "library_maps.png",
            },
            zywiecki: {
                icon: iconBase + "info-i_maps.png",
            },
        };

        // Return map instance.
        return map;
    }

    /**
     * initMarker
     *
     * Creates a marker for the given jQuery element and map.
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   jQuery $el The jQuery element.
     * @param   object The map instance.
     * @return  object The marker instance.
     */
    function initMarker( $marker, map ) {

        // Get position from marker.
        var lat = $marker.data('lat');
        var lng = $marker.data('lng');
        var type = $marker.data('type');
        var id = $marker.data('id');
        var icon = '';
        var latLng = {
            lat: parseFloat( lat ),
            lng: parseFloat( lng )
        };

        const iconBase = "/wp-content/themes/kuligi/images/";

        if(type == 'slaski'){
            icon = iconBase + "marker_red.svg";
        }else if(type == 'maly'){
            icon = iconBase + "marker_blue.svg";
        }else{
            icon = iconBase + "marker_green.svg";
        }

        // Create marker instance.
        var marker = new google.maps.Marker({
            id: id,
            position: latLng,
            map: map,
            icon: icon
        });

        // Append to reference for later use.
        map.markers.push( marker );

        google.maps.event.addListener(marker, 'click', function() {
            map.setCenter(marker.getPosition());

            var postID = marker.id;
            var data = {
                action: 'kuligiMapa',
                postID: postID,
            }
            $.ajax({
                url: PBAjax.ajaxurl,
                type: 'POST',
                data: data,
                dataType: "json",
                success: function(response){
                    var image = response.image;
                    var title = response.title;
                    var desc = response.desc;
                    var url = response.url;

                    $('.kwbMap__sidebar').find('.kuligImage').attr('src', image);
                    $('.kwbMap__sidebar').find('.kuligLink').attr('href', url);
                    $('.kwbMap__sidebar').find('.kuligName').text(title);
                    $('.kwbMap__sidebar').find('.kuligTitle').find('span').text(title);
                    $('.kwbMap__sidebar').find('.kuligDesc').text(desc);

                    $('.kwbMap__sidebar').addClass('kwbMap__sidebar--active');
                },
            });
        });

        var back = $('.kwbMap__sidebar').find('.back');
        $(back).on('click', function(){
            $(this).parents('.kwbMap__sidebar').removeClass('kwbMap__sidebar--active');
        });
    }

    /**
     * centerMap
     *
     * Centers the map showing all markers in view.
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   object The map instance.
     * @return  void
     */
    function centerMap( map ) {

        // Create map boundaries from all map markers.
        var bounds = new google.maps.LatLngBounds();
        map.markers.forEach(function( marker ){
            bounds.extend({
                lat: 49.7961472,
                lng: 19.186736
            });
        });

        // Case: Single marker.
        if( map.markers.length == 1 ){
            map.setCenter( bounds.getCenter() );

        // Case: Multiple markers.
        } else{
            map.fitBounds( bounds );
        }
    }

    // Render maps on page load.
    $(document).ready(function(){
        $('#kuligiMap').each(function(){
            var map = initMap( $(this) );
        });
    });

    })(jQuery);
});