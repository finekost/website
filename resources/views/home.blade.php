@extends('master')

@section('title', 'Page Title')

@section('content')
  @include('components.masterheader', [ 'hl' => trans('home.intro_headline'),
                                        'copy' => trans('home.intro_copy')])
@endsection
