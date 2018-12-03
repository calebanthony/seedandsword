<article class="column is-6" @php post_class() @endphp>
  <a href="{{ get_permalink() }}" class="featured">
    {!! get_the_post_thumbnail() !!}
    <h2 class="title is-flex is-vcentered">
      {{ strtolower(get_the_title()) }}
      @if (in_category('seed'))
      <img src="{{ get_stylesheet_directory_uri() }}/assets/images/white_seed.png" alt="Seed">
      @elseif (in_category('sword'))
      <img src="{{ get_stylesheet_directory_uri() }}/assets/images/white_sword.png" alt="Sword">
      @endif
    </h2>
  </a>
</article>
