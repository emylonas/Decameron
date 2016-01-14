//initialize map
var map;
var mapBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(22.18472031, -25.51538958),
    new google.maps.LatLng(67.92833924, 46.24766462));
    var mapMinZoom = 5;
    var mapMaxZoom = 12;
    var opts = {
    streetViewControl: false,
    tilt: 0,
    mapTypeId: google.maps.MapTypeId.HYBRID,
    center: {lat: 43.78, lng: 11.25},
    zoom: mapMinZoom,
    minZoom: mapMinZoom
}
map = new google.maps.Map(document.getElementById("map"), opts);

// initialize historical overlay by tiles
var imageMapType = new google.maps.ImageMapType({
    getTileUrl: function(coord, zoom) {
      var proj = map.getProjection();
      var z2 = Math.pow(2, zoom);
      var tileXSize = 256 / z2;
      var tileYSize = 256 / z2;
      var tileBounds = new google.maps.LatLngBounds(
        proj.fromPointToLatLng(new google.maps.Point(coord.x * tileXSize, (coord.y + 1) * tileYSize)),
        proj.fromPointToLatLng(new google.maps.Point((coord.x + 1) * tileXSize, coord.y * tileYSize))
      );
      if (!mapBounds.intersects(tileBounds) || zoom < mapMinZoom || zoom > mapMaxZoom) return null;
      return "{z}/{x}/{y}.png".replace('{z}',zoom).replace('{x}',coord.x).replace('{y}',coord.y);
    },
    tileSize: new google.maps.Size(256, 256),
    minZoom: mapMinZoom,
    maxZoom: mapMaxZoom,
    name: 'Tiles'
});

map.overlayMapTypes.push(imageMapType);
// map.fitBounds(mapBounds);

//initialize two arrays to store markers for user to turn markers on and off by
//narrator and day
var markers = [[],[],[],[],[],[],[],[],[],[]];
var days = [[],[],[],[],[],[],[],[],[],[]];

//add old-fashioned historical road map style
var styles = [
{"featureType":"administrative","stylers":[{"visibility":"simplified"}]},
{"featureType":"poi","stylers":[{"visibility":"on"}]},
{"featureType":"road","stylers":[{"visibility":"simplified"}]},
{"featureType":"water","stylers":[{"visibility":"simplified"}]},
{"featureType":"transit","stylers":[{"visibility":"simplified"}]},
{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},
{"featureType":"road.highway","stylers":[{"visibility":"off"}]},
{"featureType":"road.local","stylers":[{"visibility":"on"}]},
{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},
{"featureType":"water","stylers":[{"color":"#84afa3"},{"lightness":52}]},
{"stylers":[{"saturation":-77}]},{"featureType":"road"}];

var styledMap = new google.maps.StyledMapType(styles, {name: "Decameron Map"});
map.mapTypes.set('map_style', styledMap);
map.setMapTypeId('map_style');



//spidering markers
var gm = google.maps;
var oms = new OverlappingMarkerSpiderfier(map,
  {markersWontMove: true, markersWontHide: true});
var iw = new gm.InfoWindow();
oms.addListener('click', function(marker) {
iw.setContent(marker.desc);
iw.open(map, marker);
});
oms.addListener('spiderfy', function(markers) {
iw.close();
});
oms.addListener('unspiderfy', function(markers) {
iw.close();
});

map.controls[google.maps.ControlPosition.RIGHT_TOP].push(document.getElementById('legend'));

//funtion to change narrator name to array index in array of markers
function getNum(narr) {
    if (narr=="Dioneo")
      return 0;
    else if (narr=="Elissa")
      return 1;
    else if (narr=="Emilia")
      return 2;
    else if (narr=="Fiammetta")
      return 3;
    else if (narr=="Filomena")
      return 4;
    else if (narr=="Filostrato")
      return 5;
    else if (narr=="Lauretta")
      return 6;
    else if (narr=="Neifile")
      return 7;
    else if (narr=="Pampinea")
      return 8;
    else
      return 9;
}

// create a marker
function createMarker(latitude, longitude, city, text, color, label, narrator, day) {
  //move the location slightly by a random amount, for ease of visualization in clusters
  var baseJitter = .1;
  var rnd = Math.random;
  var pin1 = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld="+label+"|" + color,
      new google.maps.Size(21, 34),
      new google.maps.Point(0,0),
      new google.maps.Point(10, 34));
  var marker = new google.maps.Marker({
      position: {lat:latitude-baseJitter/2 + baseJitter*rnd(), lng: longitude-baseJitter/2 + baseJitter*rnd()},
      map: map,
      icon: pin1,
      title: city,
  });
  marker.desc = text;
  var n = getNum(narrator);
  markers[getNum(narrator)].push(marker);
  days[day-1].push(marker);
  oms.addMarker(marker);
}
  

//turn historical map on and off
function handleclick(cb) {
  if (!cb.checked) {
    map.overlayMapTypes.clear();     
  }
  else{
    map.overlayMapTypes.push(imageMapType);
  }
}

//get the data from spreadsheet and create markers
$.getJSON('https://spreadsheets.google.com/feeds/list/14MHHM3EX9xITi-DNaf4j6nG9yBaXksddgtc0B6Xqd74/default/public/values?alt=json&callback=?', function(data) {
    var narrators = {};
    narrators['Pampinea'] = '662D91';
    narrators['Panfilo'] = '005B7F';
    narrators['Neifile'] = 'FFF568';
    narrators['Filomena'] = '84CDEF';
    narrators['Dioneo'] = '9E0B0F';
    narrators['Fiammetta'] = 'F26522';
    narrators['Emilia'] = 'FFFFFF';
    narrators['Filostrato'] = '707070';
    narrators['Lauretta'] = '7CC576';
    narrators['Elissa'] = '005826';

    for (var i = 0; i < data.feed.entry.length; i++) {

      var locations = data.feed.entry[i].gsx$locations.$t;
      var label = data.feed.entry[i].gsx$label.$t;
      var theme = data.feed.entry[i].gsx$themeoftheday.$t;
      var type = data.feed.entry[i].gsx$storytype.$t;
      var timeperiod = data.feed.entry[i].gsx$timeperiod.$t;
      var locationtype = data.feed.entry[i].gsx$setting.$t;
      var characters = data.feed.entry[i].gsx$characters.$t;
      var themes = data.feed.entry[i].gsx$themesmotifs.$t;
      var keywords = data.feed.entry[i].gsx$keywords.$t;
      var rubric = data.feed.entry[i].gsx$summary.$t;
      var narr = data.feed.entry[i].gsx$narrator.$t;
      var mlabel = data.feed.entry[i].gsx$markerlabel.$t;
      var image = data.feed.entry[i].gsx$image.$t;
      var quote = '"';
      image = quote.concat(image);
      image = image.concat(quote);
      var caption = data.feed.entry[i].gsx$caption.$t;

      var contentString = '<h2>'+label+'</h2>'+'<div><p><strong>Location(s): </strong>'+locations+'</p><p><strong>Theme of the Day: </strong>'+
      theme+'</p><p><strong>Summary: </strong>'+rubric+'</p><p><strong>Story Type: </strong>'+type+'</p><p><strong>Time Period: </strong>'+timeperiod+'</p><p><strong>Setting: </strong>'+
      locationtype+'</p><p><strong>Characters: </strong>'+characters+'</p><p><strong>Themes: </strong>'+
      themes+'</p><p><strong>Keywords: </strong>'+keywords+'</p><figure><img class="box-image" src='+image+'/><figcaption>'+caption+'</figcaption></figure></div>';                 
      var color;

      if (narr in narrators) {
        color = narrators[narr]; 
      }
      else {
        color = Math.floor(Math.random() * 16777216).toString(16);
        color = '000000'.slice(0, -color.length) + color;
        narrators[narr] = color;
      }

      var coordinates = data.feed.entry[i].gsx$coordinates.$t.split(";");
      for (var j=0; j < coordinates.length; j++) {
        var latlng = coordinates[j].split(",");
        var lat = Number(latlng[0]);
        var lng = Number(latlng[1]);
        createMarker(lat, lng, location, contentString, color, mlabel, narr, mlabel);
      }

    } 
});

//functions for user to click on narrator and day boxes to turn markers on and off
var narrboxes = document.getElementsByClassName('narr');
var set = 0;
var nswitch = {};
var dfilter = [];
var nfilter = [];

for (i = 0; i < narrboxes.length; i++) {
  narrboxes[i].onclick = function() {
    clickAllBoxes(markers, this, nswitch, nfilter, dfilter);
  };
}

var dayboxes = document.getElementsByClassName('day');
var dswitch = {};

for (i=0;i < dayboxes.length;i++) {
  dayboxes[i].onclick = function() {
    clickAllBoxes(days, this, dswitch, dfilter, nfilter);
  }
}

function clickAllBoxes(array, e, xswitch, filter1, filter2) {
  if (!xswitch[e.id] || xswitch[e.id] == 0) {
      xswitch[e.id] = 1;
      e.style.backgroundColor = "white";
      e.style.fontWeight = "bold";
      e.style.border = "1px solid gray";
      e.style.borderRadius = "5px";
      filter1.push.apply(filter1, array[e.id]);
      set += 1;
      showMarkers(array[e.id], filter2);
      set += 1;
      showMarkers(filter2, filter1);
      set -= 1;
      }
  else {
      xswitch[e.id] = 0;
      e.style.backgroundColor = "#C7B68A";
      e.style.fontWeight = "normal";
      e.style.border = "none";
      if (filter1 == nfilter) {
        nfilter = nfilter.filter( function(el) {
        return array[e.id].indexOf(el) < 0;
      });
        showMarkers(filter2, nfilter);
      }
      else {
        dfilter = dfilter.filter( function(el) {
        return array[e.id].indexOf(el) < 0;
      });
        showMarkers(filter2, dfilter);
      }
      set -=1;
      hideMarkers(array[e.id], filter2);
      
  }
      
};


function setAllMarkers(m) {
  for (var i=0; i<10; i++) {
    for (var j=0; j<markers[i].length; j++) {
        markers[i][j].setMap(m);
    }
  }
}

function showMarkers(arr, filter) {
  if (set==1) {
    setAllMarkers(null);
  }
  if (filter.length > 0) {
    for (var k=0; k<arr.length;k++) {
      if ($.inArray(arr[k], filter) != -1) {
        arr[k].setMap(map);
      }
      else {
        arr[k].setMap(null);
      }
    }
  }
  else {
    for (var k=0; k<arr.length; k++) {
        arr[k].setMap(map);
      }
  }
}

function hideMarkers(arr, filter) {

  for (var k=0; k<arr.length;k++) {
      arr[k].setMap(null);
  }
  if (set==0)
    setAllMarkers(map);
}