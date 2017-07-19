<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fkst mock</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="title-hover-container">
      <h2></h2>
    </div>

    <div class="main">

        <div class="top-content">

          <div class="case-overview-wrap">
            @include('components.masonry-item', ['case' => 'wochenmarkt', 'size' => 'half', 'title' => 'Öko Wochenmarkt'])
            @include('components.masonry-item', ['case' => 'luzern', 'size' => 'half', 'title' => 'Raststätte Luzern'])
            @include('components.masonry-item', ['case' => 'huawei', 'size' => 'half', 'title' => 'Huawei Nova', 'video_path' => 'http://www.finekost.com/wp-content/uploads/2017/02/HUA_nova_loop_header_10sec_02.mp4'])
            @include('components.masonry-item', ['case' => 'vw', 'size' => 'half', 'title' => 'VW Service'])
            @include('components.masonry-item', ['case' => 'flaschenkino', 'size' => 'full', 'title' => 'Flaschenkino App', 'video_path' => 'http://www.finekost.com/wp-content/uploads/2016/04/Flaschenkino.mp4'])
            @include('components.masonry-item', ['case' => 'hkr', 'size' => 'half', 'title' => 'Hahnenkamm Rennen'])
            @include('components.masonry-item', ['case' => 'ontego', 'size' => 'half', 'title' => 'Ontego Commsult'])
            @include('components.masonry-item', ['case' => 'flaschenkino', 'size' => 'full', 'title' => 'Seat Ar App', 'video_path' => 'http://www.finekost.com/wp-content/uploads/2015/09/exp-noaudio-lowres.mp4'])
            @include('components.masonry-item', ['case' => 'hibb', 'size' => 'half', 'title' => 'Hibb Relaunch'])
            @include('components.masonry-item', ['case' => 'jim_block', 'size' => 'full', 'title' => 'Jim Block App'])
            @include('components.masonry-item', ['case' => 'omc', 'size' => 'half', 'title' => 'Oh my clutch'])
            @include('components.masonry-item', ['case' => 'kapacht', 'size' => 'half', 'title' => 'Kapacht Relaunch'])
            @include('components.masonry-item', ['case' => 'audioguideme', 'size' => 'half', 'title' => 'Audioguide.me App'])
            @include('components.masonry-item', ['case' => 'pickup', 'size' => 'half', 'title' => 'Pickup Game'])
            @include('components.masonry-item', ['case' => 'asphaltgold', 'size' => 'full', 'title' => 'Fittingroom App', 'video_path' => asset('img/cases/asphaltgold/video.mp4')])
            @include('components.masonry-item', ['case' => 'michelapp', 'size' => 'half', 'title' => 'St.Michaelis App'])
            @include('components.masonry-item', ['case' => 'nsn', 'size' => 'half', 'title' => 'NSN App'])
            @include('components.masonry-item', ['case' => 'urbanchef', 'size' => 'half', 'title' => 'Urbanchef App'])
            @include('components.masonry-item', ['case' => 'labelit', 'size' => 'half', 'title' => 'Label it'])
            @include('components.masonry-item', ['case' => 'hashtaggen', 'size' => 'half', 'title' => 'Hashtag Generator'])
            @include('components.masonry-item', ['case' => 'digitalcouture', 'size' => 'half', 'title' => 'Digital Couture'])
            @include('components.masonry-item', ['case' => 'bmw-2013', 'size' => 'half', 'title' => 'BMW 2013'])
            @include('components.masonry-item', ['case' => 'mikado', 'size' => 'half', 'title' => 'Mikado'])
            @include('components.masonry-item', ['case' => 'attagme', 'size' => 'half', 'title' => 'Attag.me'])
            @include('components.masonry-item', ['case' => 'michel', 'size' => 'half', 'title' => 'St. Michaelis Relaunch'])
            @include('components.masonry-item', ['case' => 'vivawest', 'size' => 'half', 'title' => 'Vivawest App'])
            @include('components.masonry-item', ['case' => 'quixit', 'size' => 'half', 'title' => 'Quixit App'])
            @include('components.masonry-item', ['case' => 'bmw-2012', 'size' => 'half', 'title' => 'BMW 2012'])
            @include('components.masonry-item', ['case' => 'ktm', 'size' => 'half', 'title' => 'KTM App'])
            @include('components.masonry-item', ['case' => 'threadwatch', 'size' => 'half', 'title' => 'Threadwatch'])
            @include('components.masonry-item', ['case' => 'tronjanisches-shirt', 'size' => 'half', 'title' => 'Trojanisches T-Shirt'])
            @include('components.masonry-item', ['case' => 'klexxi', 'size' => 'half', 'title' => 'Klexxi'])
            @include('components.masonry-item', ['case' => 'cinemaxx', 'size' => 'half', 'title' => 'CinemaxX App'])
            @include('components.masonry-item', ['case' => 'paywithatweet', 'size' => 'half', 'title' => 'Pay with a tweet'])
            @include('components.masonry-item', ['case' => 'mousetracker', 'size' => 'half', 'title' => 'Mousetracker'])
          </div>
        </div>

        <div class="bottom-content">
            <div class="" style="float: left;">
                <h2 class="headline">Wir bringen auch deine Katze ganz groß raus.</h2>
                <h3 class="subheadline">Oder deine Website. Es soll doch eine App werden? Auch kein Problem. Als fullstack digital – Dienstleister finden wir eine Lösung. Versprochen.</h3>
                <div class="buttons-wrap">
                    <a class="works-button" href="javascript:void(0)">Arbeiten</a>
                    <a class="contact-button" href="javascript:void(0)">Kontakt</a>
                </div>
            </div>
            <img class="cat-img" src="img/sarah-dorweiler-128578.jpg" style="float: left;width: 57%; height; auto; margin-top: 100px;">
            <div class="clearfix"></div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/blurry.load.js') }}"></script>

    <script type="text/javascript">
    $( document ).ready(function() {


    $('.case-overview-wrap').masonry({
      columnWidth: 184,
      itemSelector: '.item'
    });

    $('.case-overview-wrap .image-blur').each(function( index, value ) {
      $(value).blurryLoad();
    })

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

        //window.scroll(0, 2000);
        //$('img').fadeOut();
        //$('.bottom-content').delay(800).fadeIn();


        $('.cat-img').each(function() {
            $(this).delay(500).animate({
                opacity:1},
                1000);
        });

        $('.headline').each(function() {
            $(this).delay(1000).animate({
                opacity:1},
                1000);
        });

        $('.subheadline').each(function() {
            $(this).delay(1500).animate({
                opacity:1},
                1000);
        });

        $('.buttons-wrap').each(function() {
            $(this).delay(2000).animate({
                opacity:1},
                1000);
        });

        $('.buttons-wrap').each(function() {
            $(this).delay(2000).animate({
                opacity:1},
                1000);
        });

        $('.top-content').each(function() {
            $(this).delay(2000).animate({
                opacity:1},
                1000);
        });

        $(".works-button").click(function() {
            console.log('klk');
            $('html,body').animate({
                scrollTop: $("body").offset().top},
                'slow');
            });
        });

        </script>

    </body>
    </html>
