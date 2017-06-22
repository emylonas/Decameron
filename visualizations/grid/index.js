'use strict';

requirejs(['d3.v3.min'],
          
  function () {
    alert("hey");
//    $('#first').collapsible({
//  animate:false
});

    
});


//
//
//var grid = [[{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},
//            {narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10}],
//            [{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},
//            {narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10}],
//            [{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},
//            {narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10}],
//            [{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},
//            {narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10}],
//            [{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},
//            {narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10}],
//            [{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},
//            {narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10}],
//            [{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},
//            {narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10}],
//            [{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},
//            {narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10}],
//            [{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},
//            {narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10}],
//            [{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},
//            {narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10},{narr: " ", id: 10}]];
//var narrators = ["Pm", "Pn", "Ne", "Fla", "Di", "Fi", "Em", "Fls", "La", "El"];
//var table = d3.select("table");
//
//function getColor(narr) {
//  switch(narr) {
//    case "Pm":
//      return "662D91";
//    case 'Pn':
//      return '005B7F';
//    case 'Ne':
//      return 'FFF568';
//    case 'Fla':
//      return '84CDEF';
//    case 'Di':
//      return '9E0B0F';
//    case 'Fi': 
//      return 'F26522';
//    case 'Em':
//      return 'FFFFFF';
//    case 'Fls': 
//      return '707070';
//    case 'La':
//      return '7CC576';
//    case 'El': 
//      return '005826';
//    default:
//      return 'FFFFFF';
//  }
//}
//
//var narr_facet = [];
//var loc_facet = [];
//var set_facet = [];
//var type_facet = [];
//var time_facet = [];
//
//$.getJSON('https://spreadsheets.google.com/feeds/list/14MHHM3EX9xITi-DNaf4j6nG9yBaXksddgtc0B6Xqd74/default/public/values?alt=json&callback=?', function(data) {
//    var narr, narrator, day, order, location, label, theme, summary, stype, setting, characters, themes, keywords, image, caption, time;
//    for (var i = 0; i < data.feed.entry.length; i++) {
//      narr = data.feed.entry[i].gsx$narr.$t;
//      narrator = data.feed.entry[i].gsx$narrator.$t;
//      day = data.feed.entry[i].gsx$storyday.$t;
//      order = data.feed.entry[i].gsx$storyorder.$t;
//      location = data.feed.entry[i].gsx$locations.$t;
//      setting = data.feed.entry[i].gsx$setting.$t;
//      stype = data.feed.entry[i].gsx$storytype.$t;
//      time = data.feed.entry[i].gsx$timeperiod.$t;
//      grid[day-1][order-1].narr = narr;
//      grid[day-1][order-1].id = i;
//      if ($.inArray(narrator, narr_facet) == -1) {
//          $("#narrator").append("<p class="+'"facet_x"'+"><a href="+'"'+"#"+'"'+'>'+narrator+"</a></p>");
//          narr_facet.push(narrator);
//      }
//      if ($.inArray(location, loc_facet) == -1) {
//          $("#location").append("<p class="+'"facet_x"'+"><a href="+'"'+"#"+'"'+'>'+location+"</a></p>");
//          loc_facet.push(location);
//      }
//      if ($.inArray(setting, set_facet) == -1) {
//          $("#setting").append("<p class="+'"facet_x"'+"><a href="+'"'+"#"+'"'+'>'+setting+"</a></p>");
//          set_facet.push(setting);
//      }
//      if ($.inArray(stype, type_facet) == -1) {
//          $("#story_type").append("<p class="+'"facet_x"'+"><a href="+'"'+"#"+'"'+'>'+stype+"</a></p>");
//          type_facet.push(stype);
//      }
//      if ($.inArray(time, time_facet) == -1) {
//          $("#time_period").append("<p class="+'"facet_x"'+"><a href="+'"'+"#"+'"'+'>'+time+"</a></p>");
//          time_facet.push(time);
//      }
//      
//    } 
//    for (var j=1; j < 11; j++) {
//      var tr = table.append("tr")
//      tr.append("th").text("Day "+j);
//      tr.selectAll("td")
//      .data(grid[j-1])
//      .enter()
//      .append("td")
//      .text(function (d) { return (d.narr); })
//      .attr("class", function(d) { return d.narr;})
//      .attr("id", function(d) { return d.id;})
//      .attr("align", "center")
//      .style("font-size", "1.5em");
//    }
//    for (var k=0; k<10; k++) {
//      color = '#' + getColor(narrators[k]);
//      table.selectAll("."+narrators[k])
//      .style("background-color", color);
//    }
//    $("td").on("click", function() {
//      location = data.feed.entry[this.id].gsx$locations.$t;
//      setting = data.feed.entry[this.id].gsx$locations.$t;
//      label = data.feed.entry[this.id].gsx$label.$t;
//      theme = data.feed.entry[this.id].gsx$themeoftheday.$t;
//      summary = data.feed.entry[this.id].gsx$summary.$t;
//      stype = data.feed.entry[this.id].gsx$storytype.$t;
//      characters = data.feed.entry[this.id].gsx$characters.$t;
//      themes = data.feed.entry[this.id].gsx$themesmotifs.$t;
//      keywords = data.feed.entry[this.id].gsx$keywords.$t;
//      image = data.feed.entry[this.id].gsx$image.$t;
//      console.log(image);
//      caption = data.feed.entry[this.id].gsx$caption.$t;
//      $("#content").html("<div><p><strong>"+label+"</strong><p><strong>Theme of the Day: </strong>"+theme+"</p><p><strong>Summary: </strong>"+summary+
//        "</p><p><strong>Story Type: </strong>"+stype+"</p><p><strong>Location: </strong>"+location+"</p><p><strong>Setting: </strong>"+setting+
//        "</p><p><strong>Characters: </strong>"+characters+"</p><p><strong>Themes: </strong>"+themes+"</p><p><strong>Keywords: </strong>"+keywords+
//        "</p><figure><img src="+'"'+image+'"'+"/><figcaption>"+caption+"</figcaption></figure></div>");
//      $("#content").css("padding-bottom","20px");
//    });
//});
//
//var fill = d3.scale.category20();
//
//  d3.layout.cloud().size([500, 200])
//      .words(["This", "is", "some", "sample","Text"].map(function(d) {
//        return {text: d, size: 10 + Math.random() * 90};
//      }))
//      .padding(5)
//      .rotate(0)
//      .font("Impact")
//      .fontSize(function(d) { return d.size; })
//      .on("end", draw)
//      .start();
//
//  function draw(words) {
//    d3.select("#cloud").append("svg")
//        .attr("width", 500)
//        .attr("height", 200)
//      .append("g")
//        .attr("transform", "translate(150,150)")
//      .selectAll("text")
//        .data(words)
//      .enter().append("text")
//        .style("font-size", function(d) { return d.size + "px"; })
//        .style("font-family", "Impact")
//        .style("fill", function(d, i) { return fill(i); })
//        .attr("float", "left")
//        .attr("text-anchor", "middle")
//        .attr("transform", function(d) {
//          return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
//        })
//        .text(function(d) { return d.text; });
//  }
