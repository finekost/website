<!DOCTYPE html>
<html lang="de">
<head>
  <title>finekost: Webdevelopment &amp; Appdevelopment aus Hamburg</title>
  <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
  <script async src="{{asset('js/webfont.js')}}"></script>

  <script async src="{{asset('js/snap.svg-min.js')}}"></script>
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

  <script async>
  WebFont.load({
    google: {
      families: [ 'Bree+Serif',
      'Raleway:300,400,700']
    }
  });
  </script>
</body>



</html>
