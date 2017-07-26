<!doctype html>
@include("components.watermark")
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <title>Team</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>

      <div class="content content-detail">
        <!--
        <div class="case-title">
          <h2 class="left">Über Uns</h2><h2 class="right">.</h2>
        </div>
        -->

        <div class="row">
          <div class="col col-3">
            <h3>Profil</h3>
            <p>
              finekost wurde im Januar 2010 in Hamburg gegründet. Wir verstehen
              uns als digitaler Dienstleister mit hohem Anspruch an User Experience,
              Design und Funktionalität. Wir arbeiten Projektbasiert und betreuen
              in der Regel die komplette Abwicklung. Ziel unserer Arbeitsabläufe
              ist es, das beste Ergebnis zu produzieren.
            </p>
            <p>
              Von Beratung und Projektmanagement über das Prototyping bis hin
              zur Umsetzung inklusive Testing.  Dabei passen wir uns immer dem
              gewünschten Workflow an.
            </p>
          </div>
          <div class="col col-3">
            <h3>Arbeitsweise</h3>
            <p>
              Teamwork und Eigenverantwortung sind uns sehr wichtig. Da jeder bei
              finekost für spezifische Projekte hauptverantwortlich ist gibt es
              keine langen Wege. Wir sind somit sehr flexibel und können schnell
              auf alle Eventualitäten reagieren.
            </p>
            <h3>Auszeichnungen</h3>
            <p>
              Cannes Cyber Grand Prix, ADC – Hybrid Cube, Eurobest Gold,
              One Show Pencil Gold, Montreux Gold uvm.
            </p>
          </div>
          <div class="col col-3 col-last"></div>
        </div>

        <div class="case-title">
          <h2 class="left">Das Team</h2><h2 class="right">.</h2>
        </div>

        <div class="row">
          <div class="col col-3">
            <img width="100%" src="{{asset('img/team/finekost-alex-420x631.jpg')}}">
            <h3>Alex</h3>
            <p>
              Finekost wurde Januar 2010 von mir gemeinsam mit Melanie Bott
              gegründet. Ziel war es eine neue Art von digitaler Produktion zu
              gründen. Details dazu gibt’s im Bereich Über uns. Wenn Ich nicht
              gerade an eigenen Ideen arbeite spiele ich Volleyball beim
              SC Hamburg Mitte, oder gehe Skaten. Bei schlechtem Wetter findet
              man mich im Battlenet.
            </p>
          </div>
          <div class="col col-3">
            <img width="100%" src="{{asset('img/team/finekost-roman-420x631.jpg')}}">
            <h3>Roman</h3>
            <p>
              Ich bin seit 2011 mit von der Partie. Ich bin ausgebildeter
              Mediengestalter und habe direkt nach der Ausbildung bei Finekost
              angefangen. Neben den Beruf spiele ich Fußball (nicht nur FIFA)
              und schaue gern Serien. Außerdem liebe ich es interessante Gerichte
              wie denn Baconumwickelten Burger zu “kochen”.
            </p>
          </div>
          <div class="col col-3 col-last">
            <img width="100%" src="{{asset('img/team/finekost_suham.jpg')}}">
            <h3>Suham</h3>
            <p>
              Im Herbst 2012 habe ich ein Praktikum bei finekost begonnen,
              inzwischen bin ich hier Webdeveloper. In meiner Freizeit gehe
              ich gerne mal eine Runde Fußball spielen oder beschäftige mich mit
              Filmen. Ansonsten bin ich zu viel auf Reddit (natürlich nur zu Hause!).
            </p>
          </div>
        </div>

        <div class="case-title">
          <h2 class="left">Leistungen</h2><h2 class="right">.</h2>
        </div>

        <div class="row">
          <div class="col col-3">
            <h3>Frontend Development</h3>
            <ul>
              <li>Responsive Webdevelopment</li>
              <li>Legacy Browser support (IE 8)</li>
              <li>LESS / SASS CSS</li>
              <li>OOP Javascript</li>
            </ul>
          </div>
          <div class="col col-3">
            <h3>App Development</h3>
            <ul>
              <li>Native iOS (Swift)</li>
              <li>Android Development (Vendor)</li>
              <li>Webapps (React-Native)</li>
              <li>OSX Apps (Swift)</li>
            </ul>
          </div>
          <div class="col col-3 col-last">
            <h3>Backend Development</h3>
            <ul>
              <li>Laravel</li>
              <li>Wordpress</li>
              <li>Typo3</li>
              <li>Datenbanklösungen</li>
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="col col-3">
            <h3>Digitale Konzeption</h3>
            <ul>
              <li>Grobkonzeption</li>
              <li>Technische Konzeption</li>
              <li>UX / UI Konzeption</li>
            </ul>
          </div>
          <div class="col col-3">
            <h3>Ideen & Pitch</h3>
            <ul>
              <li>Awardideen</li>
              <li>Proof of Concepts</li>
              <li>Pitchdummies</li>
            </ul>
          </div>
          <div class="col col-3 col-last">
            <h3>Strategie & Beratung</h3>
            <ul>
              <li>Social Media</li>
              <li>Gewinnspiele</li>
              <li>Digital Campaigning</li>
            </ul>
          </div>
        </div>

        <div class="row">
          <img width="100%" src="{{asset('img/team/fkst-office.jpg')}}">
        </div>

        <div class="case-title">
          <h2 class="left">Marken & Agenturen</h2><h2 class="right">Disclaiming 'n Stuff</h2>
        </div>

        <div class="row">
          <div class="col">
            BMW,
            Volkswagen,
            Seat,
            Siemens,
            KTM,
            Telekom,
            CinemaxX,
            Deutsche Bahn,
            Ikea,
            O2 Telefonica,
            Kapacht GmbH,
            Grabarz & Partner,
            Heimat,
            Interone,
            Jung von Matt,
            Liquid Campaign,
            Scholz & Friends,
            Scholz & Volkmer,
            Swipe GmbH,
            Thjnk,
            Tribal DDB,
          </div>
          <div class="col col-last">
            Nichts liegt uns ferner als uns mit fremden Federn zu schmücken.
            Obwohl wir immer darauf bedacht sind uns an jegliche Vereinbarung zu
            halten die wir jemals unterschrieben haben, kommt es vor das wir
            etwas übersehen. Sollten Sie hier irgendetwas finden, das hier nicht
            stehen darf – melden sie sich einfach bei uns. Wir werden das sofort beheben.
          </div>
        </div>

        <div class="row">
          © finekost.com // If you keep following your dreams they're going to file a restraining order
        </div>
      </div>


      <script type="text/javascript">
        localStorage.setItem("lastpage", "team");
      </script>
    </body>
</html>
