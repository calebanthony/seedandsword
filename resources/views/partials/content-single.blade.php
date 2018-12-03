<article @php post_class() @endphp>
  <header class="has-text-centered">
    <h1 class="title is-size-1">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="section content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @if(file_exists('wp-content/plugins/wpdiscuz/templates/comment/comment-form.php'))
    @php comments_template('wp-content/plugins/wpdiscuz/templates/comment/comment-form.php') @endphp
  @else
    @php comments_template('/partials/comments.blade.php') @endphp
  @endif
</article>
