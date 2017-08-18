<!DOCTYPE html>
@include("components.watermark")
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Webdvelopment & Appdevelopment made in Hamburg</title>
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/detectmobilebrowser.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="wrap">
      <div class="bg"></div>
      <video muted autoplay loop></video>

      <div class="case-wrapper">

        <div class="case case-1" data-url="https://unerwartetmehr.de/">
          <h2>HUAWEI</h2>
          <h3>Nova Microsite</h3>
          <div class="line"></div>
        </div>

        <div class="case case-2" data-url="https://asphaltgold.de/fittingroom/index.php">
          <h2>ASPHALTGOLD</h2>
          <h3>Fittingroom App</h3>
          <div class="line"></div>
        </div>

        <div class="case case-3" data-url="http://www.seat.de">
          <h2>SEAT</h2>
          <h3>Augmented reality App</h3>
          <div class="line"></div>
        </div>

        <div class="case case-4" data-url="http://www.flaschenkino.org/">
          <h2>VIVA CON AGUA</h2>
          <h3>Flaschenkino App</h3>
          <div class="line"></div>
        </div>
      </div>


      <div class="contact">
        <div class="contact-center">
          <p><a href="https://www.google.de/maps/place/finekost/@53.5502516,9.9995629,17z/data=!3m1!4b1!4m5!3m4!1s0x47b18ee242543b51:0x522f02110a961762!8m2!3d53.5502516!4d10.0017516" target="_blank">finekost<br />
            Jakobikirchhof 9<br />
            20095 Hamburg<br /></a>
            <br />
            <a href="mailto:alex@finekost.com">alex@finekost.com</a><br />
            fon: <a href="tel:+494038650443">040 386 504 43</a><br />
            mobil: <a href="tel:+491789263669">0178 926 36 69</a><br />
            <br />
            UST-ID: 268126828
          </p>
        </div>
      </div>
      <a class="logo" href="#"><img src="img/finekost.svg" width="100%"></img></a>
    </div>

</body>
</html>
