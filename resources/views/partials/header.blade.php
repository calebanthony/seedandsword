<header>
  <nav class="columns is-multiline" role="navigation">
    <a class="column is-8 is-offset-2 has-text-centered" href="{{ home_url('/') }}">
      <img src="{{ get_stylesheet_directory_uri() }}/assets/images/logo.png" alt="{!! get_bloginfo('name') !!}">
    </a>
    <div id="header-profiles" class="buttons is-2 is-hidden-mobile">
      <a href="https://www.instagram.com/itsbrittanystuart/" class="has-text-grey-dark"><span class="fab fa-instagram fa-fw fa-2x"></span></a>
      <a href="https://www.instagram.com/itsjustinstuart/" class="has-text-grey-dark"><span class="fab fa-instagram fa-fw fa-2x"></span></a>
    </div>
    <div id="header-menu" class="column is-6 is-offset-3" role="navigation">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu([
        'theme_location' => 'primary_navigation',
        'items_wrap' => '%3$s',
      ]) !!}
      @endif
    </div>
  </div>
  </nav>
</header>
