// Make the mosaic look good on both small screens
// and large!

$(document).ready(function() {
  // we set minItemWidth to be responsive;
  // when the viewport is 'xs' (<768px), 
  // drop the minItemWidth so we always have
  // at least two columns
  var whoGridItemWidth;
  var viewportWidth = $(window).width();
  
  var setupGrid = function() {
    viewportWidth = $(window).width();
    if ( viewportWidth < 768 ) {
      whoGridItemWidth = 125;
    } else {
      whoGridItemWidth = 180;
    }

    var mosaic = $('#who-mosaic').mosaicflow({
      minItemWidth: whoGridItemWidth,
      itemHeightCalculation: 'attribute'
    });

  };

  setupGrid();

  // reset on window size change
  $(window).resize(function() {
    setupGrid();
  });


});