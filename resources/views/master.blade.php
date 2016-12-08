<html>
<head>
  <title>finekost</title>
  <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
  <script>
  WebFont.load({
    google: {
      families: [ 'Bree+Serif',
      'Raleway:300,400,700']
    }
  });
  </script>


  <script src="{{asset('js/snap.svg-min.js')}}"></script>
  <script>
  window.onload = function () {

    var speed = 1000;
    var ease = mina.easeinout;

    var svg=Snap("#gfx-responsive");
    var anis = [];
    anis[0] = anim1;
    anis[1] = anim2;
    anis[2] = anim3;

    playAnimations();
    setInterval(playAnimations, 6000);

    function playAnimations() {
      setTimeout(function() {
        anis[0](svg,speed,ease);
      }, 1000)

      setTimeout(function() {
        anis[1](svg,speed,ease);
      }, 3000)

      setTimeout(function() {
        anis[2](svg,speed,ease);
      }, 5000)
    }

    function anim1(elem, speed, ease) {
      elem.selectAll("rect[id='bg']").animate({width: 180, height: 160}, speed, ease);
      elem.selectAll("rect[id='header']").animate({width: 180, height: 60}, speed, ease);
      elem.selectAll("rect[id='logo']").animate({x: 148, width: 24, height: 12}, speed, ease);
      elem.selectAll("rect[id='headline']").animate({x: 8, y: 68, width: 48, height: 10}, speed, ease);
      elem.selectAll("rect[id='copy1']").animate({x: 8, y: 86, width: 164, height: 12}, speed, ease);
      elem.selectAll("rect[id='copy2']").animate({x: 8, y: 106, width: 164, height: 12}, speed, ease);
      elem.selectAll("rect[id='image1']").animate({x: 8, y: 126, width: 45, height: 34}, speed, ease);
      elem.selectAll("rect[id='image2']").animate({x: 61, y: 126, width: 45, height: 34}, speed, ease);
      elem.selectAll("rect[id='image3']").animate({x: 114, y: 126, width: 45, height: 34}, speed, ease);
    }

    function anim2(elem, speed, ease) {
      elem.selectAll("rect[id='bg']").animate({width: 100, height: 160}, speed, ease);
      elem.selectAll("rect[id='header']").animate({width: 100, height: 40}, speed, ease);
      elem.selectAll("rect[id='logo']").animate({x: 78, width: 18, height: 8}, speed, ease);
      elem.selectAll("rect[id='headline']").animate({x: 4, y: 44, width: 48, height: 10}, speed, ease);
      elem.selectAll("rect[id='copy1']").animate({x: 4, y: 58, width: 92, height: 24}, speed, ease);
      elem.selectAll("rect[id='copy2']").animate({x: 4, y: 86, width: 92, height: 24}, speed, ease);
      elem.selectAll("rect[id='image1']").animate({x: 4, y: 114, width: 44, height: 34}, speed, ease);
      elem.selectAll("rect[id='image2']").animate({x: 52, y: 114, width: 44, height: 34}, speed, ease);
      elem.selectAll("rect[id='image3']").animate({x: 4, y: 152, width: 92, height: 8}, speed, ease);
      elem.selectAll("rect[id='image4']").animate({x: 4, y: 190, width: 92, height: 0}, speed, ease);
    }

    function anim3(elem, speed, ease) {
      elem.selectAll("rect[id='bg']").animate({width: 200, height: 200}, speed, ease);
      elem.selectAll("rect[id='header']").animate({width: 200, height: 80}, speed, ease);
      elem.selectAll("rect[id='logo']").animate({x: 152, width: 36, height: 24}, speed, ease);
      elem.selectAll("rect[id='headline']").animate({x: 12, y: 92, width: 48, height: 10}, speed, ease);
      elem.selectAll("rect[id='copy1']").animate({x: 12, y: 114, width: 82, height: 24}, speed, ease);
      elem.selectAll("rect[id='copy2']").animate({x: 106, y: 114, width: 82, height: 24}, speed, ease);
      elem.selectAll("rect[id='image1']").animate({x: 12, y: 150, width: 54, height: 50}, speed, ease);
      elem.selectAll("rect[id='image2']").animate({x: 73, y: 150, width: 54, height: 50}, speed, ease);
      elem.selectAll("rect[id='image3']").animate({x: 134, y: 150, width: 54, height: 50}, speed, ease);
      elem.selectAll("rect[id='image4']").animate({x: 12, y: 212, width: 54, height: 50}, speed, ease);
    }




    var svg2=Snap("#gfx-cms");
    var anis2 = [];
    anis2[0] = anim12;
    anis2[1] = anim22;
    anis2[2] = anim32;
    anis2[3] = anim33;

    playAnimations2();
    setInterval(playAnimations2, 9000);

    function playAnimations2() {
      setTimeout(function() {
        anis2[0](svg2,speed,ease);
      }, 1000)

      setTimeout(function() {
        anis2[1](svg2,speed,ease);
      }, 3000)

      setTimeout(function() {
        anis2[2](svg2,speed,ease);
      }, 5000)

      setTimeout(function() {
        anis2[3](svg2,speed,ease);
      }, 8000)
    }

    function anim12(elem, speed, ease) {
      elem.selectAll("rect[id='headline']").animate({width: 82}, speed, ease);
      elem.selectAll("rect[id='copy1']").animate({width: 60}, speed, ease);
    }

    function anim22(elem, speed, ease) {
    elem.selectAll("rect[id='copy1']").animate({width: 120}, speed, ease);
      elem.selectAll("rect[id='copy2']").animate({width: 120}, speed, ease);
      elem.selectAll("rect[id='image1']").animate({width: 30, height:30}, speed, ease);
    }

    function anim32(elem, speed, ease) {
      elem.selectAll("rect[id='image2']").animate({width: 30, height:30}, speed, ease);
      elem.selectAll("rect[id='image3']").animate({width: 30, height:30}, speed, ease);
      elem.selectAll("rect[id='copy3']").animate({width: 70}, speed, ease);
      elem.selectAll("rect[id='copy4']").animate({width: 70}, speed, ease);
    }

    function anim33(elem, speed, ease) {
      elem.selectAll("rect[id='headline']").animate({width: 82}, speed, ease);
      elem.selectAll("rect[id='copy1']").animate({width: 0}, speed, ease);
      elem.selectAll("rect[id='copy2']").animate({width: 0}, speed, ease);
      elem.selectAll("rect[id='image1']").animate({width: 0, height:0}, speed, ease);
      elem.selectAll("rect[id='image2']").animate({width: 0, height:0}, speed, ease);
      elem.selectAll("rect[id='image3']").animate({width: 0, height:0}, speed, ease);
      elem.selectAll("rect[id='copy3']").animate({width: 0}, speed, ease);
      elem.selectAll("rect[id='copy4']").animate({width: 0}, speed, ease);
    }












  }
  </script>
</head>
<body>
  <div class="container-outer">
    @yield('content')
  </div>
</body>



</html>
