@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials/content-single-'.get_post_type())
  @endwhile

  <div class="blog-pagination">
    <?php posts_nav_link(' ','<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous Posts','Next Posts <i class="fa fa-long-arrow-right" aria-hidden="true"></i>'); ?>
  </div>
@endsection