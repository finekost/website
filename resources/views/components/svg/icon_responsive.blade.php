<script type="text/javascript">
function svgAniResponsive() {
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
}
</script>

<svg id="gfx-responsive" width="100%"  viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <g id="Icon-Responsive-Web">
    <rect id="bg" fill="#DADADA" x="0" y="0" width="200" height="200"></rect>
    <rect id="image3" fill="#969696" x="134" y="150" width="54" height="50"></rect>
    <rect id="image2" fill="#FF1654" x="73" y="150" width="54" height="50"></rect>
    <rect id="image1" fill="#FF1654" x="12" y="150" width="54" height="50"></rect>
    <rect id="copy2" fill="#3B3B3B" x="106" y="114" width="82" height="24"></rect>
    <rect id="copy1" fill="#3B3B3B" x="12" y="114" width="82" height="24"></rect>
    <rect id="headline" fill="#3B3B3B" x="12" y="92" width="48" height="10"></rect>
    <rect id="header" fill="#969696" x="0" y="0" width="200" height="80"></rect>
    <rect id="logo" fill="#3B3B3B" x="152" y="0" width="36" height="24"></rect>
  </g>
</svg>
