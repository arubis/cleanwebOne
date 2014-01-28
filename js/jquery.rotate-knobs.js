// on load, collapse knobs and rotate to their waiting state
// unless the viewport is narrow enough to trigger BS3's
// 'sm' (tablet) view
//
// (why on load? fails gracefully if no JS -- loads
// open!)
//
// on click of knob, rotate it to expanded position and
// display corresponding text
//
// highlight knob on mouseOver() to alert user to
// underlying content

// DEPENDS ON: Louis Remi's jQuery animation extension
// https://github.com/louisremi/jquery.transform.js

$(document).ready(function() {
  var open = '0deg';
  var closed = '180deg';

  var degs = {};
  degs['open'] = '0deg';
  degs['closed'] = '180deg';

  var state = {};
  state['left'] = 'closed';
  state['center'] = 'closed';
  state['right'] = 'closed';

  // Set up initial state: rotate up knobs:
  $('#knob-left, #knob-center, #knob-right').css({
    'transform': 'rotate('+ degs['closed'] +')'
  })

  // collapse text divs
  $('.knob-copy').slideUp(0);

  // finished setting up initial (closed) state.

  // minimal toggle logic for full columns
  var toggleColumn = function($column) { 
    if (state[$column] == 'open') {
      state[$column] = 'closed';
    } else{
      state[$column] = 'open';
    };
    $('img#knob-'+$column).animate({
      'transform': 'rotate('+degs[state[$column]]+')'}, 600);
    $('.knob-'+$column+' .knob-copy').slideToggle(600);
  }

  $('.knob-left').click(function() {
    toggleColumn('left');
  });

  $('.knob-center').click(function() {
    toggleColumn('center');
  });

  $('.knob-right').click(function() {
    toggleColumn('right');
  });
});