
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

  // Return a constructor
  
  return function (domNode, crossFilterDimension, updateAll) {

    var facetGroup = crossFilterDimension.group(function(textLabel) { 
          return textLabel 
        }),
        entries = {},
        $domNode = $(domNode),
        $facetListingContainer,
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
      console.log('applying');
      console.log(activeFilterList);
      // Convert activeFilterList hash into an array

      var filterArray = [];
      for (f in activeFilterList) { 
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

    // Add clear button

    function addClearButton() {
      $('<button>Clear</button>').click(function () { 
        clearFilter();
        updateAll();
      }).appendTo($domNode);
    };
      
    function addFilter(key) {
        console.log('add');
      activeFilterList[key] = 1;
      applyFilterList();
    };

    // removeFilter handler for when a previously-selected facet is clicked

    function removeFilter(key) {
        console.log('delete');
      delete(activeFilterList[key]);
      applyFilterList();
    };

    // Update facet listing -- this is the main draw routine
    //  Draw content straight to the DOM node

    function update() {

      // Clear what's there

      $domNode.empty();
      var facetData = {};
        
      facetGroup.all().forEach(function (facet) {
          
          if ((!facet.value==0) && (/\S/.test(facet.key))) {
              
              temp = facet.key.split(',').map(function(x) {
                  return x.replace(/^\s+|\s+$/g, '');
              });

              temp.forEach(function (key) {
                if (!facetData[key]) 
                    facetData[key] = facet.value;
                else 
                    facetData[key] = facetData[key]+facet.value;

              });


          }
      });
        
     console.log(facetData);
        
     for (var key in facetData) {
      if (facetData.hasOwnProperty(key)) {
                var newNode,
            newNodeStyle = 'margin-right: 0.1em; margin-bottom: 0.1em',

            // addFilter handler for when a facet is clicked

        newNode = $('<span class="btn btn-sm" id="'+key+'" style="' + newNodeStyle + '">' + 
                    key + 
                    ' <span class="badge">' + facetData[key] + '</span></span> ');

        if (activeFilterList[key] !== undefined)
          newNode.addClass('btn-primary');

          newNode.click(function(e) {
              console.log('hey');
              var key = $(this).attr('id');
              if (activeFilterList[key] !== undefined)
                  removeFilter(key);
              else
                addFilter(key);
          }); 

        $domNode.append(newNode);
          
      }
     }
        
    }

    function clearFilter() {
      crossFilterDimension.filterAll(); 
      activeFilterList = {};
    }

    // Initialize

    function init() {
      update();    
    }

    init();

    return {
      update: update,
      clearFilter: clearFilter
    };
  }
});


