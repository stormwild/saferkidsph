<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="navbar nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'walker' => new \App\wp_bootstrap4_navwalker()]) !!}
      @endif
    </nav>
  </div>
  {{-- @include('partials.navbar') --}}
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu($primarymenu) !!}
    @endif
  </nav>
</header>
