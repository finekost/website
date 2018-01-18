<!DOCTYPE html>
<html lang="de">
<head>
  <title>finekost: Webdevelopment &amp; Appdevelopment aus Hamburg</title>
  <meta name="viewport" content="width=device-width">
</head>

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

<body>
  <div id="hideAll">&nbsp;</div>
  <div class="container-outer">
    @yield('content')
  </div>


  <script async src="{{asset('js/snap.svg-min.js')}}"></script>

  <script async>
      var WebFontConfig = {
          google: {
            families: [ 'Bree+Serif',
            'Raleway:300,400,700']
          },
          timeout: 3000
      };

      (function(d) {
          var wf = d.createElement('script'), s = d.scripts[0];;
          wf.src = '{{asset('js/webfont.js')}}';
          wf.async = 'true';
          s.parentNode.insertBefore(wf, s);
      })(document);
  </script>

  <noscript id="deferred-styles">
      <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
    </noscript>
    <script async>
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


    <script async>
      window.onload = function () {
        svgAniCMS();
        svgAniResponsive();
        svgAniApps();
        svgAniBackend();
      }
    </script>
</body>



</html>
