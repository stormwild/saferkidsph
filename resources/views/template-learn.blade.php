{{--
  Template Name: Learn OSAEC SaferKidsPH Template
--}}

@extends('layouts.app')

@section('content')
  @if(App\empty_content($post->post_content))
    learn static content
  @else
    @include('partials.content-container')
  @endif
@endsection
