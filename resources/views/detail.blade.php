<!doctype html>
@include("components.watermark")
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <title>{{$case['title']}}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>


      @php
      $imageIndex = 0
      @endphp


      @if(isset($case['video_path']))
        <video autoplay muted loop><source src="{{$case['video_path']}}" type="video/mp4" /></video>
      @endif
      <div class="content content-detail">
        <div class="case-title">
          <h2 class="left">{{$case['title']}}</h2><h2 class="right">{{$case['detail']['year']}}</h2>
        </div>



        @foreach ($case['gridstyle'] as $key => $value)

          @if ($value == 1)
            @php $imageIndex += 1 @endphp
            @if (File::exists('img/cases/'.$case['case'].'/'.$imageIndex.$case['ext']))
            <img width="100%" src="{{asset('img/cases/'.$case['case'].'/'.$imageIndex.$case['ext'])}}"></img>
            @endif
          @elseif ($value == 2)
            <div class="row">
              <div class="col">
                @php $imageIndex += 1 @endphp
                @if (File::exists('img/cases/'.$case['case'].'/'.$imageIndex.$case['ext']))
                <img width="100%" src="{{asset('img/cases/'.$case['case'].'/'.$imageIndex.$case['ext'])}}"></img>
                @endif
              </div>

              <div class="col col-last">
                @php $imageIndex += 1 @endphp
                @if (File::exists('img/cases/'.$case['case'].'/'.$imageIndex.$case['ext']))
                <img width="100%" src="{{asset('img/cases/'.$case['case'].'/'.$imageIndex.$case['ext'])}}"></img>
                @endif
              </div>

            </div>
          @elseif ($value == 3)
            <div class="row">
              <div class="col col-3">
                @php $imageIndex += 1 @endphp
                @if (File::exists('img/cases/'.$case['case'].'/'.$imageIndex.$case['ext']))
                <img width="100%" src="{{asset('img/cases/'.$case['case'].'/'.$imageIndex.$case['ext'])}}"></img>
                @endif
              </div>
              <div class="col col-3">
                @php $imageIndex += 1 @endphp
                @if (File::exists('img/cases/'.$case['case'].'/'.$imageIndex.$case['ext']))
                <img width="100%" src="{{asset('img/cases/'.$case['case'].'/'.$imageIndex.$case['ext'])}}"></img>
                @endif
              </div>
              <div class="col col-3 col-last">
                @php $imageIndex += 1 @endphp
                @if (File::exists('img/cases/'.$case['case'].'/'.$imageIndex.$case['ext']))
                <img width="100%" src="{{asset('img/cases/'.$case['case'].'/'.$imageIndex.$case['ext'])}}"></img>
                @endif
              </div>
            </div>
          @endif

        @endforeach

        <div class="row">
          <div class="col">
            <h3>{{trans('case.about')}}</h3>
            <p>{!!$case['detail']['about']!!}</p>
          </div>
          <div class="col col-last">
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
