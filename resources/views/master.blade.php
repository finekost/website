<!DOCTYPE html>
<html lang="de">
<head>
  <title>finekost: Webdevelopment &amp; Appdevelopment aus Hamburg</title>
  <meta name="viewport" content="width=device-width">

  <style>

    #hideAll
     {
       position: fixed;
       left: 0px;
       right: 0px;
       top: 0px;
       bottom: 0px;
       background-color: white;
       z-index: 99; /* Higher than anything else in the document */

     }
  </style>

</head>

<body>
  <div id="hideAll">&nbsp;</div>
  <div class="container-outer">
    @yield('content')
  </div>

  <script async src="{{asset('js/snap.svg-min.js')}}"></script>
  <script>
    window.onload = function () {
      svgAniCMS();
      svgAniResponsive();
      svgAniApps();
      svgAniBackend();
    }
  </script>

  <style type="text/css">
  @font-face {
    font-family: "Bree Serif";
    src: url({{asset('fonts/Bree_Serif/BreeSerif-Regular.ttf')}});
  }
  @font-face {
    font-family: "Raleway";
    src: url({{asset('fonts/Raleway/Raleway-Regular.ttf')}});
  }
  </style>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</body>



</html>
