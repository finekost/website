<script type="text/javascript">
function svgAniApps() {
  var speed = 1000;
  var ease = mina.easeinout;

  var svg=Snap("#gfx-apps");
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
    elem.selectAll("rect[id='tab-navi-1']").animate({fill: '#FF1654'}, speed, ease);
    elem.selectAll("rect[id='tab-navi-2']").animate({fill: '#969696'}, speed, ease);
    elem.selectAll("rect[id='tab-content']").animate({y:85, height: 24}, speed, ease);

    elem.selectAll("rect[id='phone-navi-5']").animate({fill: '#FF1654'}, speed, ease);
  }

  function anim2(elem, speed, ease) {
    elem.selectAll("rect[id='tab-navi-1']").animate({fill: '#969696'}, speed, ease);
    elem.selectAll("rect[id='tab-navi-2']").animate({fill: '#FF1654'}, speed, ease);
    elem.selectAll("rect[id='tab-content']").animate({y:158,height: 24}, speed, ease);

    elem.selectAll("rect[id='phone-navi-1']").animate({width: 0}, speed, ease);
    elem.selectAll("rect[id='phone-navi-2']").animate({width: 0}, speed, ease);
    elem.selectAll("rect[id='phone-navi-3']").animate({width: 0}, speed, ease);
    elem.selectAll("rect[id='phone-navi-4']").animate({width: 0}, speed, ease);
    elem.selectAll("rect[id='phone-navi-5']").animate({width: 0}, speed, ease);
    elem.selectAll("rect[id='phone-navi-6']").animate({width: 0}, speed, ease);
  }

  function anim3(elem, speed, ease) {
    elem.selectAll("rect[id='tab-navi-1']").animate({fill: '#969696'}, speed, ease);
    elem.selectAll("rect[id='tab-navi-2']").animate({fill: '#FF1654'}, speed, ease);
    elem.selectAll("rect[id='tab-content']").animate({y:158,height: 24}, speed, ease);

    elem.selectAll("rect[id='phone-navi-5']").animate({fill: '#DADADA'}, speed, ease);
    elem.selectAll("rect[id='phone-navi-1']").animate({width: 90}, speed, ease);
    elem.selectAll("rect[id='phone-navi-2']").animate({width: 90}, speed, ease);
    elem.selectAll("rect[id='phone-navi-3']").animate({width: 90}, speed, ease);
    elem.selectAll("rect[id='phone-navi-4']").animate({width: 90}, speed, ease);
    elem.selectAll("rect[id='phone-navi-5']").animate({width: 90}, speed, ease);
    elem.selectAll("rect[id='phone-navi-6']").animate({width: 90}, speed, ease);
  }
}
</script>

<svg id="gfx-apps" width="100%" viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <g id="Icons">
    <rect id="bg" fill="#FFFFFF" x="0" y="0" width="200" height="200"></rect>
    <rect id="sidebar" fill="#3B3B3B" x="0" y="51" width="200" height="149"></rect>
    <rect id="input_cpy" fill="#DADADA" x="20" y="61" width="171" height="127"></rect>
    <rect id="image3" fill="#969696" x="20" y="181" width="48" height="7"></rect>
    <rect id="image3" fill="#969696" x="20" y="133" width="48" height="24"></rect>
    <rect id="tab-content" fill="#FF1654" x="77" y="158" width="114" height="24"></rect>
    <rect id="image1" fill="#969696" x="20" y="61" width="48" height="24"></rect>
    <rect id="image1" fill="#969696" x="20" y="109" width="48" height="24"></rect>
    <rect id="tab-navi-2" fill="#FF1654" x="20" y="157" width="48" height="24"></rect>
    <rect id="tab-navi-1" fill="#969696" x="20" y="85" width="48" height="24"></rect>
    <circle id="Oval" fill="#DADADA" cx="10" cy="126" r="5"></circle>
    <rect id="headline" fill="#3B3B3B" x="86" y="0" width="100" height="160"></rect>
    <circle id="Oval" fill="#DADADA" cx="136" cy="150" r="5"></circle>
    <rect id="input_hl" fill="#FF1654" x="91" y="8" width="90" height="130"></rect>
    <rect id="input_hl" fill="#9B9B9B" x="91" y="8" width="90" height="10"></rect>
    <rect id="phone-navi-6" fill="#969696" x="91" y="128" width="90" height="10"></rect>
    <rect id="phone-navi-5" fill="#DADADA" x="91" y="104" width="90" height="24"></rect>
    <rect id="phone-navi-4" fill="#969696" x="91" y="80" width="90" height="24"></rect>
    <rect id="phone-navi-3" fill="#DADADA" x="91" y="56" width="90" height="24"></rect>
    <rect id="phone-navi-2" fill="#969696" x="91" y="32" width="90" height="24"></rect>
    <rect id="phone-navi-1" fill="#DADADA" x="91" y="8" width="90" height="24"></rect>
  </g>
</svg>
