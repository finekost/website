<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
    <head>
    <meta charset="utf-8">
    <title>Büroplatz zwischen Mönckebergstraße und Chilehaus</title>

    <meta property="og:title" content="Büroplatz zwischen Mönckebergstraße und Chilehaus" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Wir sind ein kleines IT-Büro und haben einen Büroplatz zu vermieten. 50 Mbit Internet, Reinigung und Siebträger Kaffemaschine gibt es auch." />
    <meta property="og:image" content="{{asset('images/office/IMG_3837.JPG')}}" />
    <meta property="og:image" content="{{asset('images/office/IMG_3841.JPG')}}" />
    <meta property="og:image" content="{{asset('images/office/IMG_3833.JPG')}}" />

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- site css -->
    <link href="{{asset('css/css-office/site.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/css-office/jquery.fancybox.css')}}" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyAnPGcMEm3ppN1y4-PN1chFaXSI1RckPyw"></script>
    <script type="text/javascript" src="{{asset('js/js-office/jquery-2.0.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/js-office/jquery.fancybox.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/js-office/jquery.lazyload.js')}}"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();
			});

// https://www.google.de/maps/place/finekost/@53.5502548,9.9995629,17z/data=!3m1!4b1!4m5!3m4!1s0x47b18ee242543b51:0x522f02110a961762!8m2!3d53.5502516!4d10.0017516
        function init_map() {
            var var_location = new google.maps.LatLng(53.5502548,9.9995629);

            var var_mapoptions = {
                center: var_location,
                zoom: 15
            };

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title:"Büroplatz"});

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                    var_mapoptions);

            var_marker.setMap(var_map);

        }

        google.maps.event.addDomListener(window, 'load', init_map);

    </script>

	<style>
	.thmb
	{
		width:100%;
		height:250px;
		background-size:cover;
		margin-top:10px;
		margin-bottom:10px;
	}


    </style>


  </head>
  <body style="background-color: #f1f2f6;">
    <!--documents-->
    <div class="container documents">
        <div class="row">
            <div class="col-sm-12">
                <h2>Büroplatz zwischen Mönckebergstraße und Chilehaus</h2>
            </div>
            <div class="col-sm-6">
                <p>Wir sind ein kleines IT-Büro und haben einen Büroplatz zu vermieten. 50 Mbit Internet, Reinigung und Siebträger Kaffemaschine gibt es auch.</p>
            </div>
            <div class="col-sm-6">
                <p>Aktuell arbeiten dort Alex (aktuell 1x die Woche anwesend.) und Roman (3x die Woche). Daher hättest du wohl öfters mal sehr viel Ruhe. Melde dich gerne mit Nachfragen oder um uns zu Treffen und dir den Platz anzusehen.
                </p>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-6">
            <h4>Fakten:</h4>
            <table class="table">
                <tbody>
                <tr>
                    <td>Lage:</td>
                    <td>Jakobikirchhof 9, Hamburg</td>
                </tr>
                <tr>
                  <td>Platz:</td>
                  <td>Schreibtisch in 2er Raum</td>
                </tr>
                </tr>
                <tr>
                  <td>Büro:</td>
                  <td>ca 50 qm, 2.0 Zimmer</td>
                </tr>
                <tr>
                  <td>Zeitraum:</td>
                  <td>Ab sofort, monatlich kündbar</td>
                </tr>
                <tr>
                  <td>Preis:</td>
                  <td>200€ (zzgl. MwSt. inkl. Strom, Wasser, Heizung, DSL, Reinigung)</td>
                </tr>
                <tr>
                  <td>Kontakt:</td>
                  <td>Alex Milde | <a href="mailto:alex@finekost.com?subject=Wohnung">alex@finekost.com</a> | <a href="tel:+491789263669">0178 926 36 69</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-6">
            <h4>Lage:</h4>
            <div id="map-container" class="thmb"></div>
        </div>
        </div>
        <div class="row">
			<div class="col-sm-12">
			<a class="fancybox" href="{{asset('images/office/IMG_3837.JPG')}}" data-fancybox-group="gallery" title="" >
			<div class="thmb" style="background: url('{{asset('images/office/t-IMG_3837.JPG')}}') no-repeat center; background-size:cover;"></div>
			</a>
            </div>
        </div>
        <div class="row">
			<div class="col-sm-6">
			<a class="fancybox" href="{{asset('images/office/IMG_3841.JPG')}}" data-fancybox-group="gallery" title="" >
			<div class="thmb" style="background: url('{{asset('images/office/t-IMG_3841.JPG')}}') no-repeat center;background-size:cover;"></div>
			</a>
			</div>
			<div class="col-sm-6">
			<a class="fancybox" href="{{asset('images/office/IMG_3833.JPG')}}" data-fancybox-group="gallery" title="" >
			<div class="thmb" style="background: url('{{asset('images/office/t-IMG_3833.JPG')}}') no-repeat center;background-size:cover;"></div>
			</a>
			</div>
    	</div>
        <div class="row">
            <div class="col-sm-4">
                <a class="fancybox" href="{{asset('images/office/IMG_3826.JPG')}}" data-fancybox-group="gallery" title="" >
                    <div class="thmb" style="background: url('{{asset('images/office/t-IMG_3826.JPG')}}') no-repeat center;background-size:cover;"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a class="fancybox" href="{{asset('images/office/IMG_3829.JPG')}}" data-fancybox-group="gallery" title="" >
                    <div class="thmb" style="background: url('{{asset('images/office/t-IMG_3829.JPG')}}') no-repeat center;background-size:cover;"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a class="fancybox" href="{{asset('images/office/IMG_3839.JPG')}}" data-fancybox-group="gallery" title="" >
                    <div class="thmb" style="background: url('{{asset('images/office/t-IMG_3839.JPG')}}') no-repeat center;background-size:cover;"></div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <a class="fancybox" href="{{asset('images/office/IMG_3817.JPG')}}" data-fancybox-group="gallery" title="" >
                    <div class="thmb" style="background: url('{{asset('images/office/t-IMG_3817.JPG')}}') no-repeat center;background-size:cover;"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a class="fancybox" href="{{asset('images/office/IMG_3819.JPG')}}" data-fancybox-group="gallery" title="" >
                    <div class="thmb" style="background: url('{{asset('images/office/t-IMG_3819.JPG')}}') no-repeat center;background-size:cover;"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a class="fancybox" href="{{asset('images/office/IMG_3820.JPG')}}" data-fancybox-group="gallery" title="" >
                    <div class="thmb" style="background: url('{{asset('images/office/t-IMG_3820.JPG')}}') no-repeat center;background-size:cover;"></div>
                </a>
            </div>
        </div>

    <!--footer-->
    <div class="site-footer container" style="background-color: transparent; margin-top:20px;">
      <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Über das Büro</h4>
                <p>finekost wurde von mir (Alex) gemeinsam mit Melanie Bott 2010 gegründet. Seitdem machen wir digitale Projekte für Agenturen, Mittelstand und Startups.
                </p>
                <p>Roman und Suham helfen dabei fleißig mit.</p>
            </div>
            <div class="col-md-6">
                <a class="fancybox" href="{{asset('images/office/Me.png')}}" data-fancybox-group="gallery" title="" >
                    <div class="thmb" style="background: url('{{asset('images/office/Me.png')}}') no-repeat center;background-size:cover;"></div>
                </a>
            </div>
        </div>
<!--          <hr class="dashed" />-->
      </div>
    </div>
  </body>
</html>
