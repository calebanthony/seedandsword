@extends('layouts.app')

@section('content')
  <div class="columns is-multiline">
    <div class="section column is-12">
      <div class="columns is-mobile">
        <div class="column is-3 has-text-right">
          <img src="{{ get_stylesheet_directory_uri() }}/assets/images/seed.png" alt="Seed">
        </div>
        <div class="column is-6 has-text-centered">
          <h1 class="title is-size-1 is-size-3-mobile">WELCOME</h1>
          <p>Here's a couple sentences that share what we believe.</p>
        </div>
        <div class="column is-3">
          <img src="{{ get_stylesheet_directory_uri() }}/assets/images/sword.png" alt="Sword">
        </div>
      </div>
    </div>

    <div class="section column is-6">
      <h2 class="subtitle is-size-3 has-text-weight-bold has-text-centered">Posts</h2>
      @php $stories = App\getBlogStories() @endphp
      @foreach ($stories as $story)
        <a href="{{ get_permalink($story['ID']) }}" class="featured featured-story">
          {!! get_the_post_thumbnail($story['ID'], 'large') !!}
          <h2 class="title is-flex is-vcentered">
            {{ strtolower($story['post_title']) }}
            @if (in_category('seed', $story['ID']))
              <img src="{{ get_stylesheet_directory_uri() }}/assets/images/white_seed.png" alt="Seed">
            @elseif (in_category('sword', $story['ID']))
              <img src="{{ get_stylesheet_directory_uri() }}/assets/images/white_sword.png" alt="Sword">
            @endif
          </h2>
        </a>
      @endforeach
    </div>
    <div class="section column is-6">
      <h2 class="subtitle is-size-3 has-text-weight-bold has-text-centered">Podcasts</h2>
      @php $podcasts = App\getFeaturedPodcasts() @endphp
      @foreach ($podcasts as $podcast)
        <a href="{{ get_permalink($podcast['ID']) }}" class="featured featured-podcast">
          {!! get_the_post_thumbnail($podcast['ID'], 'large') !!}
          <h2 class="title">
            {{ strtolower($podcast['post_title']) }}
            @if (in_category('seed', $podcast['ID']))
              <img src="{{ get_stylesheet_directory_uri() }}/assets/images/white_seed.png" alt="Seed">
            @elseif (in_category('sword', $podcast['ID']))
              <img src="{{ get_stylesheet_directory_uri() }}/assets/images/white_sword.png" alt="Sword">
            @endif
          </h2>
        </a>
      @endforeach
    </div>
  </div>
@endsection
