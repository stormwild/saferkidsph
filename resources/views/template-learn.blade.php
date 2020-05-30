{{--
  Template Name: Learn OSAEC SaferKidsPH Template
--}}

@extends('layouts.app')

@section('content')
  @if(App\empty_content($post->post_content))
  @include('static.learn')
  @else
    @include('partials.content-container')
  @endif
@endsection
