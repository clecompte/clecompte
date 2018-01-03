@extends('layouts.app')

@section('content')
  <article class="post_full">
    <header>
      <h1 class="post_full-title">Page not found</h1>
    </header>
    <div class="post_full-content" style="text-align:center;">
      Sorry. We were unable to find this page.
    </div>
  </article>

  <div class="blog-pagination">
    <?php posts_nav_link(' ','<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous Posts','Next Posts <i class="fa fa-long-arrow-right" aria-hidden="true"></i>'); ?>
  </div>
@endsection