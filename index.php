<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>C A W</title>

<!-- load styles -->
<link rel="icon" type="image/png" href="favicon.png">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
<link rel="stylesheet" href="style.css">

<!-- load scripts -->
<script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
</head>
<body>

<div id="map"></div>

<!-- start scripts -->
<script>
// create map
var map;
function map(){
  map = L.map('map', {maxZoom:16});
  map.setMaxBounds([[-90, -180], [90, 180]]);
  map.setMinZoom(map.getBoundsZoom([[-85.0511, -180], [85.0511, 180]], true));
  map.setView([30, 0], 1);

  // base layers
  var streets = new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {noWrap:false}).addTo(map);
  var german = new L.TileLayer('https://{s}.tile.openstreetmap.de/{z}/{x}/{y}.png', {noWrap:false});
  var french = new L.TileLayer('http://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {noWrap:false});
  var toner = new L.TileLayer('http://{s}.tile.stamen.com/toner/{z}/{x}/{y}.png', {noWrap:false});
  var watercolor = new L.TileLayer('http://{s}.tile.stamen.com/watercolor/{z}/{x}/{y}.jpg', {noWrap:false});

  // switch layers
  var baseMaps = {"STREETS":streets, "GERMAN":german, "FRENCH":french, "TONER":toner, "WATERCOLOR":watercolor};
  L.control.layers(baseMaps, "").addTo(map);

};
window.onload = map();

// title
//var title = popup.setLatLng([0,0]).setContent('').openOn(map);
//setTimeout(function(){title.closeOn();}, 2000);
// captions
jQuery('.leaflet-bottom.leaflet-left').html('');
jQuery('.leaflet-bottom.leaflet-right').html('');

</script>
</body>
</html>

