{{--
  Template Name: Contact SaferKidsPH Template
--}}

@extends('layouts.app')

@section('content')
  @if(App\empty_content($post->post_content))
    contact static content
  @else
    @while(have_posts()) @php the_post() @endphp
      @include('partials.page-header')
      @include('partials.content-page')
    @endwhile
  @endif
@endsection
