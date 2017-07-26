@php
$style = '';
if(!empty($showInstant))
  $style = 'opacity:1';
@endphp

<div class="bottom-content" style="{{$style}}">
  <h2>{{trans('home.headline')}}</h2>
  <h3>{{trans('home.copy')}}</h3>

  <ul class="main">
      <li><a class="cases" href="#">{{trans('navi.cases')}}</a></li>
      <li> | </li>
      <li><a href="{!! url('/team'); !!}">{{trans('navi.team')}}</a></li>
  </ul>

  <ul class="sub" style="{{$style}}">
    <li><a href="mailto:alex@finekost.com">{{trans('navi.mail')}}</a></li>
    <li> – </li>
    <li><a href="tel:+491789263669">{{trans('navi.phone')}}</a></li>
    <li> – </li>
    <li><a href="https://www.google.de/maps/place/finekost/@53.5502516,9.9995629,17z/data=!3m1!4b1!4m5!3m4!1s0x47b18ee242543b51:0x522f02110a961762!8m2!3d53.5502516!4d10.0017516">{{trans('navi.maps')}}</a></li>
    <li class="sub">Ust-ID: 268126828</li>
  </ul>

</div>
