//initialize map and historical overlay
var map;
var historicalOverlay;

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


map = new google.maps.Map(document.getElementById('map'), {
  center: {lat: 43.76956, lng: 11.25581},
  zoom: 5,
  minZoom: 4,
});

map.mapTypes.set('map_style', styledMap);
map.setMapTypeId('map_style');


var imageBounds = {
  north: 56.45310,
  south: 31.03405,
  east: 57.47392,
  west: -29.40672
};
historicalOverlay = new google.maps.GroundOverlay("catalan map image.png",
    imageBounds);
historicalOverlay.setMap(map);

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

// create a marker of a random color
function createMarker(latitude, longitude, city, text, color, label) {
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
  oms.addMarker(marker);
}
  

//turn historical map on and off
function handleclick(cb) {
  if (!cb.checked) {
    historicalOverlay.setMap(null);     
  }
  else{
    historicalOverlay.setMap(map);
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
      var locationtype = data.feed.entry[i].gsx$setting.$t;
      var characters = data.feed.entry[i].gsx$characters.$t;
      var themes = data.feed.entry[i].gsx$themesmotifs.$t;
      var keywords = data.feed.entry[i].gsx$keywords.$t;
      var rubric = data.feed.entry[i].gsx$rubric.$t;
      var narr = data.feed.entry[i].gsx$narrator.$t;
      var mlabel = data.feed.entry[i].gsx$markerlabel.$t;
      var image = data.feed.entry[i].gsx$image.$t;
      var quote = '"';
      image = quote.concat(image);
      image = image.concat(quote);
      console.log(image);
      var caption = data.feed.entry[i].gsx$caption.$t;

      var contentString = '<h2>'+label+'</h2>'+'<div><p><strong>Location(s): </strong>'+locations+'</p><p><strong>Theme of the Day: </strong>'+
      theme+'</p><p><strong>Summary: </strong>'+rubric+'</p><p><strong>Story Type: </strong>'+type+'</p><p><strong>Setting: </strong>'+
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
        console.log(narr);
      }

      var coordinates = data.feed.entry[i].gsx$coordinates.$t.split(";");
      for (var j=0; j < coordinates.length; j++) {
        var latlng = coordinates[j].split(",");
        var lat = Number(latlng[0]);
        var lng = Number(latlng[1]);
        createMarker(lat, lng, location, contentString, color, mlabel);
      }

    } 
});

