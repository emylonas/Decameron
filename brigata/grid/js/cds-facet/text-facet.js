
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
      
    //set narrators with associated colors for the badge display  
    var narrators = {};
    narrators['Pampinea'] = '#662D91';
    narrators['Panfilo'] = '#005B7F';
    narrators['Neifile'] = '#FFF568';
    narrators['Filomena'] = '#84CDEF';
    narrators['Dioneo'] = '#9E0B0F';
    narrators['Fiammetta'] = '#F26522';
    narrators['Emilia'] = '#bababa';
    narrators['Filostrato'] = '#707070';
    narrators['Lauretta'] = '#7CC576';
    narrators['Elissa'] = '#005826';
      
      
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
      activeFilterList[key] = 1;
      applyFilterList();
    };

    // removeFilter handler for when a previously-selected facet is clicked

    function removeFilter(key) {
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
        
        var key, keys = Object.keys(facetData);
        var n = keys.length;
        var result={}
        while (n--) {
          key = keys[n];
          result[key.charAt(0).toUpperCase() + key.slice(1)] = facetData[key];
        }
        var ordered = {};
        Object.keys(result).sort().forEach(function(key) {
            ordered[key] = result[key];
        });
        facetData = ordered;
//    .data(words.sort(function(a, b) {
//              return compareStrings(a.text, b.text);
//          }))
     for (var key in facetData) {
      if (key.trim().length > 0 && key != null) {
      if (facetData.hasOwnProperty(key)) {
                var newNode,
            newNodeStyle = 'margin-right: 0.1em; margin-bottom: 0.1em',

            // addFilter handler for when a facet is clicked
                    
        getColor = function(k) {
            if (narrators[k] != null)
                return narrators[k];
            return 'gray';
        };            

        newNode = $('<span class="btn btn-sm" id="'+key+'" style="' + newNodeStyle + '">' + 
                    key + 
                    ' <span class="badge" style="background-color:'+getColor(key)+'">' + facetData[key] + '</span></span> ');

        if (activeFilterList[key] !== undefined)
          newNode.addClass('btn-primary');

          newNode.click(function(e) {
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


