function changeBG(opacity) {
  $('.bg').stop().animate({
    'opacity' : opacity
  }, 300);
}

function changeCasesExcept(caseClass, opacity) {
  $('.case').not(caseClass).stop().animate({
    'opacity' : opacity
  }, 300);
}

function alterVideoUrl(url) {
  if ($('video').attr("src") != url) {
    $('video').attr("src", url);
  }
}
function changeVideo(opacity) {
  $('video').stop().animate({
    'opacity' : opacity
  }, 500);
}

$( document ).ready(function() {

  $( "a.logo" ).click(function( event ) {
    $(".contact").toggleClass('on')
  })

  var bgOpacity = 0.75;

  $( ".case-1" ).mouseover(function( event ) {
    changeBG(0);
    changeCasesExcept('.case-1', 0);
    var url = "videos/huawei.mp4";
    alterVideoUrl(url);
    changeVideo(1)
  });

  $( ".case-1" ).mouseout(function( event ) {
    changeBG(bgOpacity);
    changeCasesExcept('.case-1', 1);
    changeVideo(0)
  })

  $( ".case-2" ).mouseover(function( event ) {
    changeBG(0);
    changeCasesExcept('.case-2', 0);
    var url = "videos/asphaltgold.mp4";
    alterVideoUrl(url);
    changeVideo(1)
  });

  $( ".case-2" ).mouseout(function( event ) {
    changeBG(bgOpacity);
    changeCasesExcept('.case-2', 1);
    changeVideo(0)
  })

  $( ".case-3" ).mouseover(function( event ) {
    changeBG(0);
    changeCasesExcept('.case-3', 0);
    var url = "videos/seatar.mp4";
    alterVideoUrl(url);
    changeVideo(1)
  });

  $( ".case-3" ).mouseout(function( event ) {
    changeBG(bgOpacity);
    changeCasesExcept('.case-3', 1);
    changeVideo(0)
  })

  $( ".case-4" ).mouseover(function( event ) {
    changeBG(0);
    changeCasesExcept('.case-4', 0);
    var url = "videos/flaschenkino.mp4";
    alterVideoUrl(url);
    changeVideo(1)
  });

  $( ".case-4" ).mouseout(function( event ) {
    changeBG(bgOpacity);
    changeCasesExcept('.case-4', 1);
    changeVideo(0)
  })

  $( ".case" ).click(function( event ) {
    var url = $(event.currentTarget).data('url');
    var win = window.open(url, '_blank');
    win.focus();
  })


  $( ".bg" ).mousemove(function( event ) {
    var w = $(".bg").width();
    var h = $(".bg").height();
    var x = event.pageX;
    var y = event.pageY;
    var deltaX = (w/2) - x;
    var deltaY = (h/2) - y;

    var offsetX = deltaX * -0.01;
    var offsetY = deltaY * -0.01;
    var paralaxFact = 5;

    $('.case-wrapper').css({
      'margin-top': 0 + (offsetY * paralaxFact),
      'margin-left': 0 + (offsetX * paralaxFact)
    });

    $('.bg').css({
      'margin-left': offsetX,
      'margin-top': offsetY
    });
  });
});
