// google-maps.js

(function ($) {
  createMaps();

  function createMaps () {
    $('.map-item').each(function () {
      map = newMap($(this));
    });
  }

  function newMap ($el) {
    const $markers = $el.find('.marker');
    // See document:
    // https://developers.google.com/maps/documentation/javascript/styling
    // https://mapstyle.withgoogle.com/
    const styles = [];
    const args = {
      zoom: 16,
      scrollwheel: false,
      disableDefaultUI: false,
      center: new google.maps.LatLng(0, 0),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: styles
    };
    const map = new google.maps.Map($el[0], args);

    map.markers = [];
    $markers.each(function () {
      addMapMarker($(this), map);
    });

    setMapCenter(map);
    return map;
  }

  function addMapMarker ($marker, map) {
    const latlng = new google.maps.LatLng(
      $marker.attr('data-lat'),
      $marker.attr('data-lng')
    );
    const markerConfig = {
      position: latlng,
      map: map
    };
    if ($marker.attr('data-icon')) {
      markerConfig.icon = $marker.attr('data-icon');
    }
    const marker = new google.maps.Marker(markerConfig);

    map.markers.push(marker);
    if ($marker.html()) {
      const infowindow = new google.maps.InfoWindow({
        content: $marker.html()
      });
      google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
      });
    }
  }

  function setMapCenter (map) {
    const bounds = new google.maps.LatLngBounds();
    $.each(map.markers, function (i, marker) {
      const latlng = new google.maps.LatLng(
        marker.position.lat(),
        marker.position.lng()
      );
      bounds.extend(latlng);
    });

    if (map.markers.length === 1) {
      map.setCenter(bounds.getCenter());
      map.setZoom(16);
    } else {
      map.fitBounds(bounds);
    }
  }
})(jQuery);
