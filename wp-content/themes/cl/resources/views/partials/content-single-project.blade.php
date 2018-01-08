<?php
  $type = get_field('project_type') ? get_field('project_type') : '';
  $color = get_field('color_scheme') ? get_field('color_scheme') : '#fff';
  $opening = get_field('opening') ? get_field('opening') : '';
  $projectMainImage = get_field('project_main_image') ? get_field('project_main_image') : '';
  $accomplishments = get_field('accomplishments') ? get_field('accomplishments') : '';
  $results = get_field('results') ? get_field('results') : '';
?>

<article class="post_full m_project">
  <h2 class="post_full-type">
    <span>Project Summary</span>
    <?php echo $type; ?>
  </h2>
  <header>
    <h1 class="post_full-title">{{ get_the_title() }}</h1>
  </header>
  <div class="post_full-image">
    <img src="<?php echo $projectMainImage['url']; ?>" alt="<?php echo $projectMainImage['alt']; ?>" />
  </div>
  <div class="post_full-content" style="background-color:<?php echo $color; ?>">
    <div class="post_full-content-container">
      @php(the_content())
    </div>
  </div>

  @if(is_single())
    <a class="post_full-more" href="/projects/">
      See more projects <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </a>
  @endif
  @php(comments_template('/partials/comments.blade.php'))
</article>
