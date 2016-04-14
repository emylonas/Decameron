'use strict';
//
//requirejs(['jquery-2.1.4.min'], function() {
//    
//});

requirejs([ 'jquery-2.1.4.min', 'crossfilter.min', 'd3.min',
            'text-facet', 'grid-facet', 'cloud-facet', 'jquery.collapsible',
            'd3.layout.cloud'],
          
  function () {

    var gridFacet = arguments[4],
        cloudFacet = arguments[5],
        cloudFunction = arguments[7],
        textFacet = arguments[3];
    

        var grid = [[{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},
                    {narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1}],
                    [{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},
                    {narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1}],
                    [{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},
                    {narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1}],
                    [{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},
                    {narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1}],
                    [{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},
                    {narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1}],
                    [{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},
                    {narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1}],
                    [{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},
                    {narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1}],
                    [{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},
                    {narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1}],
                    [{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},
                    {narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1}],
                    [{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},
                    {narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1},{narr: " ", id: -1}]];
        var narrators = ["Pm", "Pn", "Ne", "Fla", "Di", "Fi", "Em", "Fls", "La", "El"];
        var table = d3.select("table");

        function getColor(narr) {
          switch(narr) {
            case "Pm":
              return "662D91";
            case 'Pn':
              return '005B7F';
            case 'Ne':
              return 'FFF568';
            case 'Fla':
              return '84CDEF';
            case 'Di':
              return '9E0B0F';
            case 'Fi': 
              return 'F26522';
            case 'Em':
              return 'FFFFFF';
            case 'Fls': 
              return '707070';
            case 'La':
              return '7CC576';
            case 'El': 
              return '005826';
            default:
              return 'FFFFFF';
          }
        }

        var narr_facet = [];
        var loc_facet = [];
        var set_facet = [];
        var type_facet = [];
        var time_facet = [];

        $(function () {
        $.getJSON('https://spreadsheets.google.com/feeds/list/14MHHM3EX9xITi-DNaf4j6nG9yBaXksddgtc0B6Xqd74/default/public/values?alt=json&callback=?', function(data) {
           
            var narr, narrator, day, order, location, label, theme, summary, stype, setting, characters, themes, keywords, image, caption, time;
            for (var i = 0; i < data.feed.entry.length; i++) {
              
              //get each variable in a string
              narr = data.feed.entry[i].gsx$narr.$t;
              narrator = data.feed.entry[i].gsx$narrator.$t;
              day = data.feed.entry[i].gsx$storyday.$t;
              order = data.feed.entry[i].gsx$storyorder.$t;
              location = data.feed.entry[i].gsx$locations.$t;
              setting = data.feed.entry[i].gsx$setting.$t;
              stype = data.feed.entry[i].gsx$storytype.$t;
              time = data.feed.entry[i].gsx$timeperiod.$t;
            
              if ((/\S/.test(narr)) && (/\S/.test(narrator)) && (/\S/.test(day)) && (/\S/.test(order))) {
              //put into grid array so grid knows what to paint later
                  if (day=='I')
                      day = 1;
              grid[day-1][order-1].narr = narr;
              grid[day-1][order-1].id = i;
              if ($.inArray(narrator, narr_facet) == -1) {
                  $("#narrator").append("<p class="+'"facet_x"'+"><a href="+'"'+"#"+'"'+'>'+narrator+"</a></p>");
                  narr_facet.push(narrator);
              }
              if ($.inArray(location, loc_facet) == -1) {
                  $("#location").append("<p class="+'"facet_x"'+"><a href="+'"'+"#"+'"'+'>'+location+"</a></p>");
                  loc_facet.push(location);
              }
              if ($.inArray(setting, set_facet) == -1) {
                  $("#setting").append("<p class="+'"facet_x"'+"><a href="+'"'+"#"+'"'+'>'+setting+"</a></p>");
                  set_facet.push(setting);
              }
              if ($.inArray(stype, type_facet) == -1) {
                  $("#story_type").append("<p class="+'"facet_x"'+"><a href="+'"'+"#"+'"'+'>'+stype+"</a></p>");
                  type_facet.push(stype);
              }
              if ($.inArray(time, time_facet) == -1) {
                  $("#time_period").append("<p class="+'"facet_x"'+"><a href="+'"'+"#"+'"'+'>'+time+"</a></p>");
                  time_facet.push(time);
              }
            } 
            } 
            //create a blank table with rows and column labels
            for (var j=1; j < 11; j++) {
              var tr = table.append("tr")
              tr.append("th").text("Day "+j);
              tr.selectAll("td")
              .data(grid[j-1])
              .enter()
              .append("td")
              .text(function (d) { return (d.narr); })
              .attr("class", function(d) { return d.narr; })
              .attr("id", function(d) { return d.id;})
              .attr("align", "center")
              .style("font-size", "1.5em");
            }
            for (var k=0; k<10; k++) {
              var color = '#' + getColor(narrators[k]);
              table.selectAll("."+narrators[k])
              .style("background-color", color);
            }
            $("td").on("click", function() {
             if (parseInt(this.id) != -1) {
              d3.selectAll("td")
                .classed("clicked", false);
              $(this).addClass("clicked");
              location = data.feed.entry[this.id].gsx$locations.$t;
              setting = data.feed.entry[this.id].gsx$setting.$t;
              label = data.feed.entry[this.id].gsx$label.$t;
              theme = data.feed.entry[this.id].gsx$themeoftheday.$t;
              summary = data.feed.entry[this.id].gsx$summary.$t;
              stype = data.feed.entry[this.id].gsx$storytype.$t;
              characters = data.feed.entry[this.id].gsx$characters.$t;
              themes = data.feed.entry[this.id].gsx$themesmotifs.$t;
              keywords = data.feed.entry[this.id].gsx$keywords.$t;
              image = data.feed.entry[this.id].gsx$image.$t;
              console.log(image);
              caption = data.feed.entry[this.id].gsx$caption.$t;
              var content = "<div><p><strong>"+label+"</strong><p><strong>Theme of the Day: </strong>"+theme+"</p><p><strong>Summary: </strong>"+summary+
                "</p><p><strong>Story Type: </strong>"+stype+"</p><p><strong>Location: </strong>"+location+"</p><p><strong>Setting: </strong>"+setting+
                "</p><p><strong>Characters: </strong>"+characters+"</p><p><strong>Themes: </strong>"+themes+"</p><p><strong>Keywords: </strong>"+keywords;
              if (image.length != 0) {
                content.concat("</p><figure><img src="+'"'+image+'"'+"/><figcaption>"+caption+"</figcaption></figure></div>");
              }
              $("#content").html(content);
              $("#content").css("padding-bottom","20px");
                $("#content").css("padding-top", "20px");
              }
        });
            
        
//to replace every entry with an array of comma-separated values
//            data.feed.entry.forEach(function (i) {
//                i.gsx$narrator.$t = replaceWithCSV(i.gsx$narrator);
//                i.gsx$locations.$t = replaceWithCSV(i.gsx$locations);
//                i.gsx$setting.$t = replaceWithCSV(i.gsx$setting);
//                i.gsx$storytype.$t = replaceWithCSV(i.gsx$storytype);
//                i.gsx$timeperiod.$t = replaceWithCSV(i.gsx$timeperiod);
//                i.gsx$themesmotifs.$t = replaceWithCSV(i.gsx$themesmotifs);
//
//
//            });
//            
//            function replaceWithCSV(entry) {
//                return entry.$t.split(',').map(function(x) {
//                return x.replace(/^\s+|\s+$/g, '')
//                });
//            }
            
                       
            var resources = crossfilter(data.feed.entry);

            
            var narratorDimension = resources.dimension(function(d) {return d.gsx$narrator.$t}),
            locationDimension = resources.dimension(function(d) {return d.gsx$locations.$t}),
            settingDimension = resources.dimension(function(d) {return d.gsx$setting.$t}),
            storyTypeDimension = resources.dimension(function(d) {return d.gsx$storytype.$t}),
            timePeriodDimension = resources.dimension(function(d) {return d.gsx$timeperiod.$t}),
            gridDimension = resources.dimension(function(d) {return d}),
            themeDimension = resources.dimension(function(d) {return d.gsx$themesmotifs.$t}),
            facetList = [];

            $('.facet').each(function(i, node) {
                facetList.push( makeFacet(node,
                                node.getAttribute('data-dimension')));
            })
            facetList.push( makeFacet($('#t1'), 'grid'));
            facetList.push( makeFacet($('#cloud'), 'cloud'));
            

            function updateAll() {
                facetList.forEach(function (facet) {
                    facet.update();
                });
            }

            function clearAll() {
                facetList.forEach(function (facet) {
                    facet.clearFilter();
                });
                updateAll();
            }

            function makeFacet(domNode, dimension) {
                if (dimension === 'narrator') {
                    var returnObject = textFacet(domNode, narratorDimension, updateAll);
        
                    return returnObject;
                }
                else if (dimension === 'locations')
                    return textFacet(domNode, locationDimension, updateAll);
                else if (dimension === 'setting')
                    return textFacet(domNode, settingDimension, updateAll);
                else if (dimension === 'storytype')
                    return textFacet(domNode, storyTypeDimension, updateAll);
                else if (dimension === 'timeperiod')
                    return textFacet(domNode, timePeriodDimension, updateAll);
                else if (dimension === 'grid')
                    return gridFacet(domNode, gridDimension, updateAll);
                else if (dimension == 'cloud') 
                    return cloudFacet(domNode, themeDimension, cloudFunction, updateAll);
                else
                    return { update: function() {return true}};
            

            }

            $('#clear-filters-button').click(clearAll);
            //   updateAll(group, dimension);
            });
            
            $('#collapsible').collapsible({
              arrowRclass: 'arrow-r',
              arrowDclass: 'arrow-d'
            });
            
            $("#toggle1").children(':first-child').toggleClass('arrow-r arrow-d');
            $("#toggle1").next().slideToggle(500);
            $("#toggle2").children(':first-child').toggleClass('arrow-r arrow-d');
            $("#toggle2").next().slideToggle(500);
            $("#toggle3").children(':first-child').toggleClass('arrow-r arrow-d');
            $("#toggle3").next().slideToggle(500);
            $("#toggle4").children(':first-child').toggleClass('arrow-r arrow-d');
            $("#toggle4").next().slideToggle(500);
            

        });

    });
    