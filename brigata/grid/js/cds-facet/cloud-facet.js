
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
    
  var cloud = require('d3.layout.cloud'),
      entries = {},
      facetGroup = crossFilterDimension.group(function(textLabel) { 
         return textLabel 
      }),
      activeFilterList = {};

  //go through every entry in the spreadsheet
  facetGroup.all().forEach(function (facet) {

     //split entries by comma, put into hashtable where
     //key is the new word, value is a list of original entries that contain
     //that word
      var temp = facet.key.split(',').map(function(x) {
          return x.replace(/^\s+|\s+$/g, '');
      });
      temp.forEach(function (key) {
        if (!entries[key]) {
            entries[key] = [facet.key];
        } else {
            entries[key].push(facet.key);
        }
      });
  });

  function applyFilterList() {

      // Convert activeFilterList hash into an array
      var filterArray = [];
      
      for (f in activeFilterList) { 
        //put every entry that contains that word in the filterArray
        $.each(entries[f], function(f, k) {
          filterArray.push(k);
        });
      }

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
      $('#cloud').empty();
 
      var data = [];
      var facetData = {};
      facetGroup.all().forEach(function (facet) {

        if ((facet.value > 0 ) && (facet.key != "")) {
                          
            
          temp = facet.key.split(',').map(function(x) {
              return x.replace(/^\s+|\s+$/g, '');
          });
          temp.forEach(function (key) {
            if (!facetData[key]) 
                facetData[key] = facet.value;
            else 
                facetData[key] = facetData[key]+1;
            
          });
        }
      });
      $.each(facetData, function(k, v) {
         var element = {"text": k, "size": v};
         data.push(element); 
      });

      addFilter = function (key) {
        activeFilterList[key] = 1;
        applyFilterList();
      };

      removeFilter = function (key) {
        delete(activeFilterList[key]);
        applyFilterList();
      };

      calculateCloud(data);
        
      function calculateCloud(data) {

        cloud()
        .size([580, 400])
        .words(data)
        .rotate(0) 
        .fontSize(function(d) { 
            return d.size; })
        .on('end', drawCloud(data))
        .start();
      }
        
      function compareStrings(a, b) {
          a = a.toLowerCase();
          b = b.toLowerCase();

          return (a < b) ? -1 : (a > b) ? 1 : 0;
      }
      
      function drawCloud(words) {
          d3.select('#cloud').append('div')
          .attr('width', 580).attr('height', 400)
          .attr('id', 'cloud_container')
          .append('p')
          .selectAll('text')
          .data(words.sort(function(a, b) {
              return compareStrings(a.text, b.text);
          }))
          .enter().append('a')
          .classed("theme", true)
          .style('font-size', function(d) { return d.size+12 + 'px'; })
          .style('font-family', 'Arial')
          .on('click', function(d) {
              var a = d3.select(this);
              var entry = entries[d.text];
              if (activeFilterList[d.text] !== undefined) 
                removeFilter(d.text);
              
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
  


