{{--
  Template Name: Take Action OSEAC SaferKidsPH Template
--}}

@extends('layouts.app')

@section('content')
  @if(App\empty_content($post->post_content))
    action static content
  @else
    @while(have_posts()) @php the_post() @endphp
      @include('partials.page-header')
      @include('partials.content-page')
    @endwhile
  @endif
@endsection
