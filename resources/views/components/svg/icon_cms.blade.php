<script>
function svgAniCMS() {
  var speed = 1000;
  var ease = mina.easeinout;

  var svg=Snap(".gfx-cms");
  playAnimationsCMS();
  setInterval(playAnimationsCMS, 9000);

  function playAnimationsCMS() {
    setTimeout(function() {
      cmsAni1(svg,speed,ease);
    }, 1000)

    setTimeout(function() {
      cmsAni2(svg,speed,ease);
    }, 3000)

    setTimeout(function() {
      cmsAni3(svg,speed,ease);
    }, 5000)

    setTimeout(function() {
      cmsAni4(svg,speed,ease);
    }, 8000)
  }

  function cmsAni1(elem, speed, ease) {
    elem.selectAll("rect[class='headline']").animate({width: 82}, speed, ease);
    elem.selectAll("rect[class='copy1']").animate({width: 60}, speed, ease);
  }

  function cmsAni2(elem, speed, ease) {
  elem.selectAll("rect[class='copy1']").animate({width: 120}, speed, ease);
    elem.selectAll("rect[class='copy2']").animate({width: 120}, speed, ease);
    elem.selectAll("rect[class='image1']").animate({width: 30, height:30}, speed, ease);
  }

  function cmsAni3(elem, speed, ease) {
    elem.selectAll("rect[class='image2']").animate({width: 30, height:30}, speed, ease);
    elem.selectAll("rect[class='image3']").animate({width: 30, height:30}, speed, ease);
    elem.selectAll("rect[class='copy3']").animate({width: 70}, speed, ease);
    elem.selectAll("rect[class='copy4']").animate({width: 70}, speed, ease);
  }

  function cmsAni4(elem, speed, ease) {
    elem.selectAll("rect[class='headline']").animate({width: 82}, speed, ease);
    elem.selectAll("rect[class='copy1']").animate({width: 0}, speed, ease);
    elem.selectAll("rect[class='copy2']").animate({width: 0}, speed, ease);
    elem.selectAll("rect[class='image1']").animate({width: 0, height:0}, speed, ease);
    elem.selectAll("rect[class='image2']").animate({width: 0, height:0}, speed, ease);
    elem.selectAll("rect[class='image3']").animate({width: 0, height:0}, speed, ease);
    elem.selectAll("rect[class='copy3']").animate({width: 0}, speed, ease);
    elem.selectAll("rect[class='copy4']").animate({width: 0}, speed, ease);
  }
}
</script>
<svg class="gfx-cms" width="100%"   viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <g class="Icon-CMS">
    <rect class="bg" fill="#ffffff" x="0" y="0" width="200" height="200"></rect>
    <rect class="sidebar" fill="#DADADA" x="0" y="0" width="48" height="200"></rect>
    <rect class="sections" fill="#969696" x="0" y="19" width="48" height="10"></rect>
    <rect class="input_cpy" fill="#DADADA" x="58" y="76" width="130" height="107"></rect>
    <rect class="input_hl" fill="#DADADA" x="58" y="39" width="130" height="24"></rect>
    <rect class="image3" fill="#FF1654" x="142" y="114" width="0" height="0"></rect>
    <rect class="image2" fill="#FF1654" x="102" y="114" width="0" height="0"></rect>
    <rect class="image1" fill="#FF1654" x="62" y="114" width="0" height="0"></rect>
    <rect class="headline" fill="#3B3B3B" x="62" y="46" width="0" height="10"></rect>
    <rect class="copy1" fill="#3B3B3B" x="62" y="83" width="0" height="10"></rect>
    <rect class="copy2" fill="#3B3B3B" x="62" y="99" width="0" height="10"></rect>
    <rect class="copy3" fill="#3B3B3B" x="62" y="149" width="0" height="10"></rect>
    <rect class="copy4" fill="#3B3B3B" x="62" y="164" width="0" height="10"></rect>
  </g>
</svg>
