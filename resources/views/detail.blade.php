<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <title>{{$case['title']}}</title>        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>

      @if(isset($case['video_path']))
        <video autoplay muted loop><source src="{{$case['video_path']}}" type="video/mp4" /></video>
      @endif
      <div class="content content-detail">
        <div class="case-title">
          <h2 class="left">{{$case['title']}}</h2><h2 class="right">{{$case['detail']['year']}}</h2>
        </div>
        <img width="100%" src="http://www.finekost.com/wp-content/uploads/2016/04/app1.png"></img>
        <div class="row">
          <div class="col">
            <img width="100%" src="http://www.finekost.com/wp-content/uploads/2016/04/app2.png"></img>
            <h3>{{trans('case.about')}}</h3>
            <p>{!!$case['detail']['about']!!}</p>
          </div>
          <div class="col col-last">
            <img width="100%" src="http://www.finekost.com/wp-content/uploads/2016/04/app3.png"></img>
            <h3>{{trans('case.tech')}}</h3>
            <p>{!!$case['detail']['tech']!!}</p>
          </div>
        </div>
      </div>

      <div class="main" style="height:500px;">
        <div class="bottom-content">
            <div class="" style="float: left;">

            </div>
            <img class="cat-img" src="img/sarah-dorweiler-128578.jpg" style="float: left;width: 57%; height; auto; margin-top: 100px;">
            <div class="clearfix"></div>
        </div>
      </div>
    </body>
</html>
