<section class="section-contact py-3">
  <div class="container">
    <div class="row">
      <div class="col">
        @while(have_posts()) @php the_post() @endphp
        @include('partials.content-page')
        @endwhile
      </div>
    </div>
  </div>
</section>
