<?php if( have_posts(  )): while( have_posts(  )): the_post(  ); ?>
<div class="card mb-3 shadow rounded">

  <div class="card-body d-flex justify-content-center align-items-center">
  <?php if(has_post_thumbnail()):?>

<img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">

<?php endif;?>
<div class="blog-content">
  <h5>
   <?php the_title(); ?>
   </h5>
    <p class="card-text">
    <?php the_excerpt(  );?>
    </p>
    <a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>
  </div>
  </div>
</div>

  
<?php endwhile; else: endif;?>