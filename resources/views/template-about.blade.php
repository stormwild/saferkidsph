{{--
  Template Name: About SaferKidsPH Template
--}}

@extends('layouts.app')

@section('content')
  @if(App\empty_content($post->post_content))
    @include('static.about')
  @else
    @include('partials.content-container')
  @endif
@endsection
