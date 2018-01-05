<article class="post_full">
  <header>
    <h1 class="post_full-title">
      @if(!is_single())
        <a href="{{ the_permalink() }}">
      @endif
      {{ get_the_title() }}
      @if(!is_single())
        </a>
      @endif
    </h1>
    <div class="post_full-meta">
      @include('partials/entry-meta')
    </div>
  </header>
  @php(the_post_thumbnail('post'))
  <div class="post_full-content">
    @php(the_content())

    <?php if(is_single()) : ?>
      <div class="at-below-post"></div>
    <?php endif; ?>
  </div>

  @if(is_single())
    <a class="post_full-more" href="/blog/">
      See more posts <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </a>
  @endif
</article>
