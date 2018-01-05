<article class="post_full">
  <header>
    <h1 class="post_full-title">
      <?php if(!is_single()): ?>
        <a href="<?php echo e(the_permalink()); ?>">
      <?php endif; ?>
      <?php echo e(get_the_title()); ?>

      <?php if(!is_single()): ?>
        </a>
      <?php endif; ?>
    </h1>
    <div class="post_full-meta">
      <?php echo $__env->make('partials/entry-meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </header>
  <?php (the_post_thumbnail('post')); ?>
  <div class="post_full-content">
    <?php (the_content()); ?>

    <?php if(is_single()) : ?>
      <div class="at-below-post"></div>
    <?php endif; ?>
  </div>

  <?php if(is_single()): ?>
    <a class="post_full-more" href="/blog/">
      See more posts <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </a>
  <?php endif; ?>
</article>
