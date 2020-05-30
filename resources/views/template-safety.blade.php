{{--
  Template Name: Stay Safe Online SaferKidsPH Template
--}}

@extends('layouts.app')

@section('content')
  @if(App\empty_content($post->post_content))
    @include('static.safe')
  @else
    @include('partials.content-container')
  @endif
@endsection
