{{--
  Template Name: Contact SaferKidsPH Template
--}}

@extends('layouts.app')

@section('content')
  @if(App\empty_content($post->post_content))
    contact static content
  @else
    @include('partials.content-container')
  @endif
@endsection
