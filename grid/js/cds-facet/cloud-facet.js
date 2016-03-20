
/*

  Given a domNode (a container), a dimension (which provides the facet data), 
  and updateAll (a function that draws all the facets on the page)
  
  Creates a clear button within the container
  
  Creates a container within the container for the listing of facets
  
  Creates the listing 
  
  Returns an object with an update() method that draws the facet, using the dimension, 
  to the domNode
  
*/

define(function() { 
  return function (domNode, crossFilterDimension, makeCloud, updateAll) {
    
  var cloud = require('d3.layout.cloud');
  
  var facetGroup = crossFilterDimension.group(function(textLabel) { 
    return textLabel 
  }),
  activeFilterList = {};

  function applyFilterList() {

      // Convert activeFilterList hash into an array
      var filterArray = [];
      for (f in activeFilterList) { filterArray.push(f); }

      // Apply filters to dimensions

      if (filterArray.length === 0) {
        crossFilterDimension.filterAll(); 
      } else {
        crossFilterDimension.filterFunction(function (d) {
          return ! (filterArray.indexOf(d) === -1);
        });  
      }

      updateAll(); 
  }

    // Update facet listing -- this is the main draw routine
    //  Draw content straight to the DOM node

  function update() {

      // Clear what's there
      console.log("UPDATE CLOUD");
      $('#cloud').empty();
 
      var data = [];

      facetGroup.all().forEach(function (facet) {
        if ((facet.value > 0 ) && (facet.key != "")) {
          var facetData = {"text": facet.key, "size": facet.value};
          data.push(facetData);
        }
      });
        
      addFilter = function (key) {
        activeFilterList[key] = 1;
        applyFilterList();
      };

      removeFilter = function (key) {
        console.log("click");
        delete(activeFilterList[key]);
        applyFilterList();
      };

      calculateCloud(data);
        
      function calculateCloud(data) {
        cloud()
        .size([580, 400])
        .words(data) // data from PubNub
        .rotate(0) // 0 or 90deg
        .fontSize(function(d) { return d.size; })
        .on('end', drawCloud)
        .start();
      }
        
      function drawCloud(words) {
          d3.select('#cloud').append('div')
          .attr('width', 580).attr('height', 400)
          .attr('id', 'cloud_container')
          .append('p')
          .selectAll('text')
          .data(words)
          .enter().append('a')
          .classed("theme", true)
          .style('font-size', function(d) { return d.size+12 + 'px'; })
          .style('font-family', 'Arial')
          .on('click', function(d) {
              var a = d3.select(this);
              console.log(a);
              console.log($(this).attr("class"));
              if (activeFilterList[d.text] !== undefined) {
                var e = d3.select(this);
                console.log(e);
                removeFilter(d.text);
              }
              else {
                $(this).addClass('selected');
                $(this).css("font-weight", "bold");
                addFilter(d.text);      
              }
          })
          .style('font-weight', function(d) {
              if (activeFilterList[d.text] !== undefined)
                  return 'bold';
              else
                  return 'normal';
          })
          .classed('chosen', function(d) {
              if (activeFilterList[d.text] !== undefined)
                  return 'true';
              else
                  return false;
          })
          .text(function(d) { return d.text+ ' '; });
      }
  }

  function clearFilter() {
      crossFilterDimension.filterAll(); 
      activeFilterList = {};
  }

  function init() {
    update();    
  }

  init();

  return {
      update: update,
      clearFilter: clearFilter
  };
};

});
  


