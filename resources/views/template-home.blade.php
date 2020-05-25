{{--
  Template Name: Home SaferKidsPH Template
--}}

@extends('layouts.app')

@section('content')
  @if(App\empty_content($post->post_content))
    @include('static.home')
  @else
    @include('partials.content-container')
  @endif
@endsection
