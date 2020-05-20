<header class="banner">
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
      <a class="navbar-brand brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
      @endif
    </div>
  </nav>
</header>
