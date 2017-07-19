<figure class="item item-{{$size}}">
  <a href="case" data-title="{{$title}}">

    @if(isset($video_path))
      <video width="100%" height="100%" style="object-fit: cover;" autoplay muted loop><source src="{{$video_path}}" type="video/mp4" /></video>
    @else
      <img class="image-blur" src="{{ asset('img/cases/'.$case.'/thumb-low.jpg') }}" data-large="{{ asset('img/cases/'.$case.'/thumb-high.jpg') }}"></img>
    @endif
  </a>
</figure>
