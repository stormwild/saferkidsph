{{--
  Template Name: Stay Safe Online SaferKidsPH Template
--}}

@extends('layouts.app')

@section('content')
  @if(App\empty_content($post->post_content))
    safe static content
  @else
    @include('partials.content-container')
  @endif
@endsection
