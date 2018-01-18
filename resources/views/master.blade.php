<!DOCTYPE html>
<html lang="de">
<head>
  <title>finekost: Webdevelopment &amp; Appdevelopment aus Hamburg</title>

  <script async src="{{asset('js/webfont.js')}}"></script>
  <script async src="{{asset('js/snap.svg-min.js')}}"></script>
  <script>
    window.onload = function () {

      WebFont.load({
        google: {
          families: [ 'Bree+Serif',
          'Raleway:300,400,700']
        }
      });

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

  <noscript id="deferred-styles">
      <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
    </noscript>
    <script>
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
          window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
      else window.addEventListener('load', loadDeferredStyles);
    </script>
</body>



</html>
