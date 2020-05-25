<div class="container">
  <div class="row">
    <div class="col py-3">
      @while(have_posts()) @php the_post() @endphp
        @include('partials.page-header')
        @include('partials.content-page')
      @endwhile
    </div>
  </div>
</div>
