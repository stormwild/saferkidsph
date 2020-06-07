{{--
  Template Name: Contact SaferKidsPH Template
--}}

@extends('layouts.app')

@section('content')
  @if(App\empty_content($post->post_content))
    @include('static.contact')
  @else
    @include('partials.content-contact')
  @endif
@endsection
