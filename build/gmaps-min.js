!function($){function e(e){var o=e.find(".marker"),r={zoom:16,center:new google.maps.LatLng(0,0),mapTypeId:google.maps.MapTypeId.ROADMAP,scrollwheel:!1,navigationControl:!1,mapTypeControl:!1,scaleControl:!1,draggable:!1,styles:[{elementType:"geometry",stylers:[{color:"#f5f5f5"}]},{elementType:"labels.icon",stylers:[{visibility:"off"}]},{elementType:"labels.text.fill",stylers:[{color:"#616161"}]},{elementType:"labels.text.stroke",stylers:[{color:"#f5f5f5"}]},{featureType:"administrative.land_parcel",elementType:"labels.text.fill",stylers:[{color:"#bdbdbd"}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#eeeeee"}]},{featureType:"poi",elementType:"labels.text.fill",stylers:[{color:"#757575"}]},{featureType:"poi.park",elementType:"geometry",stylers:[{color:"#e5e5e5"}]},{featureType:"poi.park",elementType:"labels.text.fill",stylers:[{color:"#9e9e9e"}]},{featureType:"road",elementType:"geometry",stylers:[{color:"#ffffff"}]},{featureType:"road.arterial",elementType:"labels.text.fill",stylers:[{color:"#757575"}]},{featureType:"road.highway",elementType:"geometry",stylers:[{color:"#dadada"}]},{featureType:"road.highway",elementType:"labels.text.fill",stylers:[{color:"#616161"}]},{featureType:"road.local",elementType:"labels.text.fill",stylers:[{color:"#9e9e9e"}]},{featureType:"transit.line",elementType:"geometry",stylers:[{color:"#e5e5e5"}]},{featureType:"transit.station",elementType:"geometry",stylers:[{color:"#eeeeee"}]},{featureType:"water",elementType:"geometry",stylers:[{color:"#c9c9c9"}]},{featureType:"water",elementType:"labels.text.fill",stylers:[{color:"#9e9e9e"}]}]},a=new google.maps.Map(e[0],r);return a.markers=[],o.each(function(){t($(this),a)}),l(a),a}function t(e,t){var l=new google.maps.LatLng(e.attr("data-lat"),e.attr("data-lng")),o=new google.maps.Marker({position:l,map:t});if(t.markers.push(o),e.html()){var r=new google.maps.InfoWindow({content:e.html()});google.maps.event.addListener(o,"click",function(){r.open(t,o)})}}function l(e){var t=new google.maps.LatLngBounds;$.each(e.markers,function(e,l){var o=new google.maps.LatLng(l.position.lat(),l.position.lng());t.extend(o)}),1==e.markers.length?(e.setCenter(t.getCenter()),e.setZoom(16)):e.fitBounds(t)}var o=null;$(document).ready(function(){$(".acf-map").each(function(){o=e($(this))})})}(jQuery);