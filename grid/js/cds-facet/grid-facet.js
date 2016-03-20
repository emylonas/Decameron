
/*

  Given a domNode (a container), a dimension (which provides the facet data), 
  and updateAll (a function that draws all the facets on the page)
  
  Creates a clear button within the container
  
  Creates a container within the container for the listing of facets
  
  Creates the listing 
  
  Returns an object with an update() method that draws the facet, using the dimension, 
  to the domNode
  
*/

function getId(narr, day) {
    var id;
    var narrators = {Dioneo: 0, Elissa: 10, Emilia: 20, Fiammetta: 30, Filomena: 40, Filostrato: 50,
                    Lauretta: 60, Neifile: 70, Pampinea: 80, Panfilo: 90};
    id = narrators[narr];
    id += day - 1;
    return id;
}

function getColor(narr) {
          switch(narr) {
            case "Pampinea":
              return "#662D91";
            case 'Panfilo':
              return '#005B7F';
            case 'Neifile':
              return '#FFF568';
            case 'Filomena':
              return '#84CDEF';
            case 'Dioneo':
              return '#9E0B0F';
            case 'Fiammetta': 
              return '#F26522';
            case 'Emilia':
              return '#FFFFFF';
            case 'Filostrato': 
              return '#707070';
            case 'Lauretta':
              return '#7CC576';
            case 'Elissa': 
              return '#005826';
            default:
              return 'FFFFFF';
          }
        }

define(function() { 

  // Return a constructor
  
  return function (domNode, crossFilterDimensions, updateAll) {

  

    // Some constants

    
    var crossFilterDimension = crossFilterDimensions,
        facetGroup = crossFilterDimension.group(),
        $domNode = $(domNode),
        $facetListingContainer = $domNode;
    
      
      
    function updateResultsListing(itemNumberStart) {

        var allItems = crossFilterDimension.top(Infinity);

    
            d3.selectAll("td")
              .classed("gray", true);
        
        allItems.forEach(function (item) {
            var gridId = getId(item.gsx$narrator.$t, item.gsx$storyday.$t);
            gridId = "#" + gridId;
            $(gridId).removeClass("gray");

        });
        
        if (allItems.length == 100) {
            d3.selectAll("td").style("font-weight", "normal");
        }

      }
    
    // Update facet listing -- this is the main draw routine
    //  Draw content straight to the DOM node

    function update() {

      // Clear what's there

//      $facetListingContainer.empty();

      updateResultsListing();

    }

    // Initialize

    function init() {
      // addClearButton();
      // addFacetListingContainer();
      update();
    }

    init();

    return {
      update: update,
      clearFilter: function () { return true; }
    };
  }
});


