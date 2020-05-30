<footer class="content-info py-3 py-md-5 section-orange-gradient">
  <div class="container">
    <div class="row mb-3">
      <div class="col-md-7 mb-3">
        @php dynamic_sidebar('sidebar-footer') @endphp
        @if (! is_active_sidebar('sidebar-footer'))
          @include('static.footer-about')
        @endif
      </div>
      <div class="col-md-3 offset-md-1 mb-3">
        @if (has_nav_menu('footer_navigation'))
          {!! wp_nav_menu($footer_menu) !!}
        @endif
      </div>
      <div class="col-md-1 mb-3">
        <ul class="list-unstyled social-media-icons">
          <li class="media">
            <img class="facebook-icon" src="@asset('images/icons/social_media/facebook.svg')" alt="Facebook icon">
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">&copy; {{ $site_name }}</div>
    </div>
  </div>
</footer>
