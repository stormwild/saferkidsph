{{--
  Template Name: Take Action OSEAC SaferKidsPH Template
--}}

@extends('layouts.app')

@section('content')
  @if(App\empty_content($post->post_content))
    action static content
  @else
    @include('partials.content-container')
  @endif
@endsection
