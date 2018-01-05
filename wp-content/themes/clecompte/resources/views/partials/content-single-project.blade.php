<article class="post_full">
  <header>
    <h1 class="post_full-title">{{ get_the_title() }}</h1>
    <div class="post_full-meta">
    </div>
  </header>
  <div class="post_full-content">
    @php(the_content())
  </div>

  @if(is_single())
    <a class="post_full-more" href="/projects/">
      See more projects <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </a>
  @endif
  @php(comments_template('/partials/comments.blade.php'))
</article>
