<?php
  $type = get_field('project_type') ? get_field('project_type') : '';
  $color = get_field('color_scheme') ? get_field('color_scheme') : '#fff';
  $opening = get_field('opening') ? get_field('opening') : '';
  $projectMainImage = get_field('project_main_image') ? get_field('project_main_image') : '';
  $projectMainImageFlush = get_field('project_main_image_flush') ? get_field('project_main_image_flush') : '';
  $results = get_field('results') ? get_field('results') : '';

  $galleryOne = get_field('gallery_one') ? get_field('gallery_one') : '';
  $galleryTwo = get_field('gallery_two') ? get_field('gallery_two') : '';
  $galleryThree = get_field('gallery_three') ? get_field('gallery_three') : '';
  $galleryFour = get_field('gallery_four') ? get_field('gallery_four') : '';
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
    <span>Project Type</span>
    <?php echo $type; ?>
  </h2>
  <div class="project_post-image<?php if ($projectMainImageFlush) { echo ' m_flush'; } ?>">
    <img src="<?php echo $projectMainImage['url']; ?>" alt="<?php echo $projectMainImage['alt']; ?>" />
  </div>

  <div class="c_project_content" style="background-color:<?php echo $color; ?>">
    <div class="project_post-content m_opening">
      <div class="project_post-content-container">
        <h3 class="project_post-content-title">Overview</h3>
        <?php the_content(); ?>
      </div>
    </div>
  </div>

  <?php
    $galleryCount = [];

    if (!empty($galleryOne)) {
      array_push($galleryCount, '1');
    }

    if (!empty($galleryTwo)) {
      array_push($galleryCount, '2');
    }

    if (!empty($galleryThree)) {
      array_push($galleryCount, '3');
    }

    if (!empty($galleryFour)) {
      array_push($galleryCount, '4');
    }

    if (count($galleryCount) > 0) {
      $galleryPercentage = 100 / count($galleryCount);
    }
  ?>

  <?php if (count($galleryCount) > 0) : ?>
    <div class="project_post-content m_gallery">
      <div class="project_post-content-container">
        <h3 class="project_post-content-title">Additional Screens</h3>

        <div class="project_gallery">
          <?php if (!empty($galleryOne)) : ?>
            <div class="project_gallery-item" style="width: <?php echo $galleryPercentage; ?>%">
              <img src="<?php echo $galleryOne['url']; ?>" alt="" />
            </div>
          <?php endif; ?>

          <?php if (!empty($galleryTwo)) : ?>
            <div class="project_gallery-item" style="width: <?php echo $galleryPercentage; ?>%">
              <img src="<?php echo $galleryTwo['url']; ?>" alt="" />
            </div>
          <?php endif; ?>

          <?php if (!empty($galleryThree)) : ?>
            <div class="project_gallery-item" style="width: <?php echo $galleryPercentage; ?>%">
              <img src="<?php echo $galleryThree['url']; ?>" alt="" />
            </div>
          <?php endif; ?>

          <?php if (!empty($galleryFour)) : ?>
            <div class="project_gallery-item" style="width: <?php echo $galleryPercentage; ?>%">
              <img src="<?php echo $galleryFour['url']; ?>" alt="" />
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($results)) : ?>
    <div class="project_post-content m_results">
      <div class="project_post-content-container">
        <h3 class="project_post-content-title">Results</h3>
        <?php echo $results; ?>
      </div>
    </div>
  <?php endif; ?>

  @if(is_single())
    <a class="post_project-more" href="/projects/">
      See more projects <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </a>
  @endif
  @php(comments_template('/partials/comments.blade.php'))
</article>
