<!DOCTYPE html>
@include("components.watermark")
<html>
<head>
    <meta charset="UTF-8">
    <title>Webdvelopment & Appdevelopment made in Hamburg</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="title-hover-container">
      <h2></h2>
    </div>

    <div class="main">

        <div class="top-content">

          <div class="case-overview-wrap">
            @foreach ($cases as $case)
              @include('components.masonry-item', $case)
            @endforeach
          </div>
        </div>

        @include('components.footer')
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/blurry.load.js') }}"></script>

    <script type="text/javascript">
if ('scrollRestoration' in history) {
history.scrollRestoration = 'manual';
}

$( document ).ready(function() {

  var $grid = $('.case-overview-wrap').masonry({
      columnWidth: 184,
      isInitLayout: true,
      transitionDuration: 0,
  });

  $('figure').delay(500).animate({
      opacity:1},
      1000);

  // Scroll Down only on first load
  var lastPage = localStorage.getItem("lastpage");
  localStorage.removeItem("lastpage");

  if(lastPage === null) {
    window.scroll(0, 20000);
  }




  fadeInFooter(300);


  $('.case-overview-wrap .image-blur').each(function( index, value ) {
    $(value).blurryLoad();
  })

  addCaseTitleListeners();

  $('.bottom-content ul.main a.cases').on('click', function(e) {

    $('html, body').animate({
      scrollTop:0
    },'slow');
  })
});



function addCaseTitleListeners() {
  $('.case-overview-wrap a').on('mouseenter', function(e) {
    let title = $(e.currentTarget).data('title');
    $('.title-hover-container h2').stop().animate({'opacity': 1});
    $('.title-hover-container h2').html(title);

    $('.case-overview-wrap figure').not($(e.currentTarget).parent()).each(function( index, value ) {
        $(value).stop().animate({'opacity': 0.1});
    })
  })


  $('.case-overview-wrap a').on('mouseleave', function(e) {
    $('.title-hover-container h2').stop().animate({'opacity': 0});

    $('.case-overview-wrap figure').not($(e.currentTarget).parent()).each(function( index, value ) {
        $(value).stop().animate({'opacity': 1});
    })
  })
}


function fadeInFooter(startDelay) {
  $('.bottom-content').delay(startDelay + 0).animate({
      opacity:1},
      1000);

  $('.bottom-content h2').delay(startDelay + 300).animate({
      opacity:1},
      1000);

  $('.bottom-content h3').delay(startDelay + 450).animate({
      opacity:1},
      1000);

  $('.bottom-content ul.main').delay(startDelay + 550).animate({
      opacity:1},
      1000);

  $('.bottom-content ul.sub').delay(startDelay + 650).animate({
      opacity:1},
      1000);
}
</script>

</body>
</html>
