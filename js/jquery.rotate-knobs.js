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
  var $open = '0deg';
  var $closed = '180deg';

  // Set up initial state: rotate up knobs:
  $('#knob-left, #knob-center, #knob-right').css({
    'transform': 'rotate('+$closed+')'
  })

  // collapse text divs
  $('.knob-copy').slideUp(0);

  // Finish init; the rest of this is active

  // $('.knob img').click(function() {
  //   $(this).animate({
  //     'transform' : 'rotate('+$open+')',  
  //     }, 600);
  // });

  $('.knob-left *').click(function() {
    $('img#knob-left').animate({
      'transform': 'rotate('+$open+')'
    }, 600);
    $('.knob-left .knob-copy').slideDown('5000');
  })
});