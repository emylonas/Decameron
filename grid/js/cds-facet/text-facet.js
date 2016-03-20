
/*

  This is a text facet; it behaves similarly to a tagging system.
  
  It can handle an array of values rather than a single value.

  For handling of arrays of values in crossfilter, I used:
    http://stackoverflow.com/questions/17524627/is-there-a-way-to-tell-crossfilter-to-treat-elements-of-array-as-separate-record

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
  
  return function (domNode, crossFilterDimensions, updateAll) {

    var crossFilterDimension = crossFilterDimensions,
        facetGroup,
        $domNode = $(domNode),
        $facetListingContainer,
        activeFilterList = {},
        accessorFunction;
    
    // window.cf = crossFilterDimension;
    
    function applyFilterList() {

      var filterArray = Object.getOwnPropertyNames(activeFilterList);

      // Apply filters to dimensions -- this is where
      //  the actual facet trimming takes place

      if (filterArray.length === 0) {
        crossFilterDimension.filterAll(); 
      } else {
        crossFilterDimension.filterFunction(function (d) {
          return filterArray.some(function (filter) {
            return ! (d.indexOf(filter) === -1);
          });
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
    }

    function addFacetListingContainer() {
      $facetListingContainer = $('<div class="facet-container"></div>');
      $domNode.append($facetListingContainer);
    }

    // Update facet listing -- this is the main draw routine
    //  Draw content straight to the DOM node

    function update() {

      var uniqueFacetValues = {};
      
      // Clear what's there

      $facetListingContainer.empty();

      // Get unique values
      
      uniqueFacetValues = facetGroup.all();
      
      // Go through each facet value and create a tile
      
      uniqueFacetValues.filter(function (a) { return (a.value > 0) })
        .sort(function (a, b) { return b.value - a.value })
        .forEach(function (facet) {

        var newNode,
            newNodeStyle = 'margin-right: 0.1em; margin-bottom: 0.1em'; // THIS SHOULD BE PUT INTO CSS FILE

        // addFilter handler for when a facet is clicked

        function addFilter() {
          activeFilterList[facet.key] = 1;
          applyFilterList();
        };

        // removeFilter handler for when a previously-selected facet is clicked

        function removeFilter() {
          delete(activeFilterList[facet.key]);
          applyFilterList();
        };

        newNode = $('<span class="btn btn-sm" style="' + newNodeStyle + '">' + 
                    facet.key + 
                    ' <span class="badge">' + facet.value + '</span></span> ');

        if (activeFilterList[facet.key] !== undefined) {
          newNode.addClass('btn-primary').click(removeFilter);
        } else {
          newNode.click(addFilter); 
        }
        
        $facetListingContainer.append(newNode);
      });
    }

    function clearFilter() {
      crossFilterDimension.filterAll(); 
      activeFilterList = {};
    }
    
    // Reduce down to a single hash between tags and counts

    // HARD CODED '.who' HERE -- how to not??
    //  Maybe derive it from domNode@data-dimension ?
    
    function reduceAdd(p, v) {
      // v.who.forEach (function(val, _) {
        console.log(accessorFunction(v));
      accessorFunction(v).forEach (function(val, _) {
         p[val] = (p[val] || 0) + 1; //increment counts
      });
      return p;
    }

    function reduceRemove(p, v) {
      // v.who.forEach (function(val, _) {
      accessorFunction(v).forEach (function(val, _) {
         p[val] = (p[val] || 0) - 1; //decrement counts
      });
      return p;
    }

    function reduceInitial() {
      return {};  
    }
    
    // Initialize

    function init() {

      // Set up accessor function to get the dimension's data from the
      //   source data structure
      
      var dataKey = domNode.getAttributeNode('data-dimension').value;
      
      accessorFunction = eval( '(function() { ' + 
                               'return function(d) { return d.' + dataKey + ' }' + 
                               '})()' );

      // Set up crossfilter group to group by tag
      
      facetGroup = crossFilterDimension.groupAll()
                                       .reduce(reduceAdd, reduceRemove, reduceInitial)
                                       .value();
      
      facetGroup.all = function() {
        var newObject = [];
        for (var key in this) {
          if (this.hasOwnProperty(key) && key != 'all') {
            newObject.push({ key: key, value: this[key] });
          }
        }
        return newObject;
      }
      
      // Draw view to DOM
      
      addFacetListingContainer();
      update();    
    }

    init();

    return {
      update: update,
      clearFilter: clearFilter
    };
  }
});


