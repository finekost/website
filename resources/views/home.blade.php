<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fkst mock</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="main">

        <div class="top-content">
            SEAT AR - App - 2016 - Für UDG haben wir das neue HUAWEI Telefon in Szene gesetzt. - Die komplette Umsetzung der Microsite sowie ein bisschen technische Beratung. Das Ergebnis steht hier.<br><br>
            JimBlock - App - 2014 - Sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br><br>
            HUAWEI NOVA - Microsite - 2016 - Für UDG haben wir das neue HUAWEI Telefon in Szene gesetzt. - Die komplette Umsetzung der Microsite sowie ein bisschen technische Beratung. Das Ergebnis steht hier.<br><br>
            SEAT AR - App - 2016 - Für UDG haben wir das neue HUAWEI Telefon in Szene gesetzt. - Die komplette Umsetzung der Microsite sowie ein bisschen technische Beratung. Das Ergebnis steht hier.<br><br>
            JimBlock - App - 2014 - Sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br><br>
            HUAWEI NOVA - Microsite - 2016 - Für UDG haben wir das neue HUAWEI Telefon in Szene gesetzt. - Die komplette Umsetzung der Microsite sowie ein bisschen technische Beratung. Das Ergebnis steht hier.<br><br>

        </div>

        <div class="bottom-content">
            <div class="" style="float: left;">
                <h2 class="headline">Wir bringen auch deine Katze ganz groß raus.</h2>
                <h3 class="subheadline">Oder deine Website. Es soll doch eine App werden? Auch kein Problem. Als fullstack digital – Dienstleister finden wir eine Lösung. Versprochen.</h3>
                <div class="buttons-wrap">
                    <a class="works-button" href="javascript:void(0)">Arbeiten</a>
                    <a class="contact-button" href="javascript:void(0)">Kontakt</a>
                </div>
            </div>
            <img class="cat-img" src="img/sarah-dorweiler-128578.jpg" style="float: left;width: 57%; height; auto; margin-top: 100px;">
            <div class="clearfix"></div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript">
    $( document ).ready(function() {
        window.scroll(0, 2000);
        //$('img').fadeOut();
        //$('.bottom-content').delay(800).fadeIn();


        $('.cat-img').each(function() {
            $(this).delay(500).animate({
                opacity:1},
                1000);
        });

        $('.headline').each(function() {
            $(this).delay(1000).animate({
                opacity:1},
                1000);
        });

        $('.subheadline').each(function() {
            $(this).delay(1500).animate({
                opacity:1},
                1000);
        });

        $('.buttons-wrap').each(function() {
            $(this).delay(2000).animate({
                opacity:1},
                1000);
        });

        $('.buttons-wrap').each(function() {
            $(this).delay(2000).animate({
                opacity:1},
                1000);
        });

        $('.top-content').each(function() {
            $(this).delay(2000).animate({
                opacity:1},
                1000);
        });

        $(".works-button").click(function() {
            console.log('klk');
            $('html,body').animate({
                scrollTop: $("body").offset().top},
                'slow');
            });
        });

        </script>

    </body>
    </html>
