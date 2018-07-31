{{--
  Template Name: Home
--}}

@extends('layouts.app')
@section('content')

  <div class="header_floating m_full_header">
    <div class="header-content">
      <div class="header-content-logo">
        <img width="40" alt="Chris LeCompte" src="{{ get_template_directory_uri() . '/assets/images/logo.svg' }}" />
      </div>
      <nav class="header-content-nav">
        <a href="/blog/">Blog</a>
        <a href="/projects/">Projects</a>
      </nav>
    </div>
  </div>

  <section class="hero">
    <div class="logo">
      <img width="100" height="97" alt="Chris LeCompte" src="{{ get_template_directory_uri() . '/assets/images/logo.svg' }}" />
    </div>

    <div class="hero-content">
      <h1 class="hero-content-title"><em>Chris LeCompte</em> I design, develop &amp; create for the web</h1>
      <span class="hero-content-attribute"></span>
    </div>
  </section>

  <section class="writings u_container_padded">
    <div class="c_content">
      <div class="writings-content">
        <h2 class="writings-content-title">Stuff I <span>write</span> about</h2>
        <?php
          $args = array('posts_per_page' => 4);
          $posts = new WP_Query($args);
          $i = 0;
        ?>
        @while($posts->have_posts()) @php($posts->the_post())
          @if($i % 2 == 0)
            <div class="writings-content-posts">
          @endif
          <article class="post">
            <h3 class="post-title"><span><a href="{{ get_permalink() }}">{{ the_title() }}</a></span></h3>
            @php(the_post_thumbnail('home'))
            <div class="post-body">
              <span class="post-body-date">{{ the_date() }}</span>
              <div class="post-body-summary">{{ the_content() }}</div>
            </div>
          </article>
          @if($i % 2 != 0)
            </div>
          @endif

          <?php $i++; ?>
        @endwhile

        <a href="/blog/" class="writings-content-more">More Posts <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </section>

  <section class="projects u_container_padded">
    <div class="projects-content">
      <h2 class="projects-content-title">Project Journal: <span>Recent entries</span></h2>
      <div class="projects-content-list">

        <?php
          $args = array('posts_per_page' => 6, 'post_type' => 'project');
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
      <a href="/projects/" class="projects-content-more">More Projects <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
  </section>

  <section class="about u_container_padded">
    <div class="c_content">
      <div class="about-content_left">
        <h2 class="about-content_left-title">A brief bio</h2>
        <p class="about-content_left-text">Working from Northern Virginia, I’ve been designing, building, and managing websites for nearly a decade. I’ve been involved in both large and small projects in multiple industries and fields. Through these experiences, some good&mdash;and some bad&mdash;I’ve grown to appreciate just what is possible on the web. I’ve coupled my experiences with a degree in Management from George Mason University.</p>
      </div>
      <div class="about-content_right">
        <img width="300" alt="Chris LeCompte" src="{{ get_template_directory_uri() . '/assets/images/cl-profile.jpg' }}" class="about-content_right-image" />
      </div>
    </div>
  </section>

  <section class="experience u_container_padded">
    <div class="c_content">
      <div class="experience-content_left">
        <ul class="experience-content_left-list">
          <h3 class="experience-content_left-title"><strong>ID.me</strong> <span>2014&ndash;Present</span></h3>
          <p>Front-end development, design &amp; product creation in the digital identity arena.</p>
          <h3 class="experience-content_left-title"><strong>Freelancer</strong> <span>Forever&ndash;Present</span></h3>
          <p>Web development, design &amp; strategy for tons of awesome clients.</p>
          <h3 class="experience-content_left-title"><strong>CXO Advisory</strong> <span>2007&ndash;Present</span></h3>
          <p>Complete web and product management for an investing site I run with my father.</p>
          <h3 class="experience-content_left-title"><strong>ACS Creative</strong> <span>2013&ndash;2014</span></h3>
          <p>The front-end development guy for a small creative agency in Fairfax, Virginia.</p>
          <h3 class="experience-content_left-title"><strong>CAVENDO</strong> <span>2006&ndash;2013</span></h3>
          <p>Web development, design &amp; project management&mdash;taking care of all the clients at the small web agency I ran with a friend.</p>
        </ul>
      </div>
      <div class="experience-content_right">
        <h2 class="experience-content_right-title">Working on cool things</h2>
      </div>
    </div>
  </section>

@endsection
