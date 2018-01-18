<!DOCTYPE html>
<html lang="de">
<head>
  <title>finekost: Webdevelopment &amp; Appdevelopment aus Hamburg</title>
  <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
  <script src="{{asset('js/webfont.js')}}"></script>



  <script src="{{asset('js/snap.svg-min.js')}}"></script>
  <script>
    window.onload = function () {
      svgAniCMS();
      svgAniResponsive();
      svgAniApps();
      svgAniBackend();
    }
  </script>
</head>
<body>
  <div class="container-outer">
    @yield('content')
  </div>

  <script>
  WebFont.load({
    google: {
      families: [ 'Bree+Serif',
      'Raleway:300,400,700']
    }
  });
  </script>
</body>



</html>
