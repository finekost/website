<!DOCTYPE html>
<html lang="de">
<head>
  <title>finekost: Webdevelopment &amp; Appdevelopment aus Hamburg</title>
  <meta name="viewport" content="width=device-width">
  <style type="text/css">
  html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}body{font-family:"Raleway";font-size:14px;line-height:24px}h1,h2,h3{font-family:"Bree Serif"}.left{float:left}.right{float:right}.container{width:80%;margin:0 auto}.btn{color:white;padding-top:16px;padding-left:32px;padding-right:32px;padding-bottom:16px;background-color:#ff1654}h1{font-size:72px}h4{text-transform:uppercase;font-size:11px;color:#ff1654;margin-bottom:16px}#hideAll{display:none}a{text-decoration:none}a.animated{position:relative;display:block;text-decoration:none;color:black}a.animated:before{content:"";display:block;position:absolute;bottom:0px;left:0px;width:0%;height:1px;background-color:black;z-index:-1}a.animated:hover::before{width:100%;-webkit-transition:width 0.3s;transition:width 0.3s}h2,h4{margin:0px;padding:0px}.container-outer{margin:0 auto;max-width:1280px}.masterheader{background-repeat:no-repeat;background-size:contain;background-position:right -132px center;padding:0px;margin-bottom:64px;background-size:0px 0px}@media (min-width: 768px){.masterheader{background-size:300px 300px;background-position:right -66px center;padding-top:64px;padding-bottom:64px}}@media (min-width: 1024px){.masterheader{background-size:400px 400px;background-position:right -33px center;padding-top:96px;padding-bottom:96px}}@media (min-width: 1280px){.masterheader{background-size:400px 400px;background-position:right 52.8px center;padding-top:96px;padding-bottom:96px;background-image:url(http://localhost:8888/finekost-website/public/images/ci/fk_minilogo.svg)}}.masterheader h1{margin:0;padding:0;padding-top:32px;font-size:46px;line-height:48px}@media (min-width: 768px){.masterheader h1{padding-right:30%;font-size:52px;line-height:54px}}@media (min-width: 1024px){.masterheader h1{padding-right:30%;font-size:64px;line-height:67px}}@media (min-width: 1280px){.masterheader h1{padding-right:30%;font-size:64px;line-height:67px}}.masterheader p{width:100%;margin-bottom:32px}@media (min-width: 768px){.masterheader p{font-size:16px;line-height:22px;width:60%;margin-bottom:64px}}@media (min-width: 1024px){.masterheader p{font-size:20px;line-height:26px;width:60%;margin-bottom:96px}}.footer{border-top:1px solid #000;margin-top:40px;padding-bottom:40px}.footer:after{content:"";clear:both;display:block}.footer ul{padding:0px;list-style-type:none}.footer ul li.hl{text-transform:uppercase;font-weight:bold;margin-bottom:0px}.footer-end{background-color:#ccc}.expertise p.maintext{width:100%;margin-bottom:64px}.expertise .container-expertise:after{display:block;content:" ";clear:both}.expertise .container-expertise .expertise-single{float:left;width:100%;margin-bottom:32px}@media (min-width: 1024px){.expertise .container-expertise .expertise-single{width:50%}}.expertise .container-expertise .expertise-single h5{margin:0;padding:0;font-size:18px}.expertise .container-expertise .expertise-single:after{display:block;content:" ";clear:both}.expertise .container-expertise .expertise-single .img{display:block;width:20%;margin-right:10%;float:left}.expertise .container-expertise .expertise-single .text{width:70%;margin-right:0%;display:block;float:left}@media (min-width: 1024px){.expertise .container-expertise .expertise-single .text{width:60%}}
  </style>

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

</head>

<body>
  <div id="hideAll">&nbsp;</div>
  <div class="container-outer">
    @yield('content')
  </div>


  <script async src="{{asset('js/snap.svg-min.js')}}"></script>

  <script type="text/javascript">
  var WebFontConfig = {
      google: {
        families: [ 'Bree+Serif',
        'Raleway:300,400,700']
      },
      timeout: 3000
  };
    (function() {
      var wf = document.createElement('script');
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })(); </script>

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
