<?php
  $type = get_field('project_type') ? get_field('project_type') : '';
  $color = get_field('color_scheme') ? get_field('color_scheme') : '#fff';
  $opening = get_field('opening') ? get_field('opening') : '';
  $projectMainImage = get_field('project_main_image') ? get_field('project_main_image') : '';
  $results = get_field('results') ? get_field('results') : '';
?>

<article class="project_post">
  <div class="project_post-divider"></div>
  <header class="project_post-header">
    <div class="c_project_header">
      <h1 class="project_post-header-title" style="color:<?php echo $color; ?>">
        {{ get_the_title() }}
      </h1>
      <span class="project_post-header-description">
        <?php echo $opening; ?>
      </span>
    </div>
  </header>
  <h2 class="project_post-header-type">
    <span>Project Overview</span>
    <?php echo $type; ?>
  </h2>
  <div class="project_post-image">
    <img src="<?php echo $projectMainImage['url']; ?>" alt="<?php echo $projectMainImage['alt']; ?>" />
  </div>

  <div class="c_project_content" style="background-color:<?php echo $color; ?>">
    <div class="project_post-content m_opening">
      <div class="project_post-content-container">
        <?php the_content(); ?>
      </div>
    </div>

    <div class="project_post-content m_results">
      <div class="project_post-content-container">
        <h3 class="project_post-content-title">Results</h3>
        <?php echo $results; ?>
      </div>
    </div>
  </div>

  @if(is_single())
    <a class="post_project-more" href="/projects/">
      See more projects <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </a>
  @endif
  @php(comments_template('/partials/comments.blade.php'))
</article>
