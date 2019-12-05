{{--
  Template Name: Projects
--}}

@extends('layouts.app')
@section('content')

<section class="projects u_container_padded">
  <div class="c_content">
    <div class="projects-content">
      <h2 class="projects-content-title">Project Journal</h2>
      <div class="projects-content-list">

        <?php
          $args = array('posts_per_page' => 99, 'post_type' => 'project', 'orderby' => 'date', 'order' => 'DESC');
          $projects = new WP_Query($args);
        ?>
        @while($projects->have_posts()) @php($projects->the_post())
          <?php $color = get_field('color_scheme') ? get_field('color_scheme') : '#fff'; ?>
          <a href="{{ get_permalink() }}" class="post">
            <div class="post-overlay" style="background-color:<?php echo $color; ?>"></div>
            <div class="post-image" style="background-image:url({{ the_post_thumbnail_url('full') }})"></div>
            <h3 class="post-title" style="background-color:<?php echo $color; ?>"><span>{{ the_title() }} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></h3>
          </a>
        @endwhile

      </div>
    </div>
  </div>
</section>

@endsection
