@extends('master')

@section('title', 'Page Title')

@section('content')
  @include('components.masterheader', [ 'hl' => trans('home.intro_headline'),
                                        'copy' => trans('home.intro_copy')])

  @include('components.expertise')

  {{--
  @include('components.projects')
  @include('components.reviews')
  @include('components.features')
  @include('components.contact')

--}}
  @include('components.footer')

@endsection
