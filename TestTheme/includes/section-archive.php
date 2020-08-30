<?php if( have_posts(  )): while( have_posts(  )): the_post(  ); ?>
<div class="card mb-3 shadow rounded">

  <div class="card-body">
  <h5>
   <?php the_title(); ?>
   </h5>
    <p class="card-text">
    <?php the_excerpt(  );?>
    </p>
   
  </div>
</div>

  
<?php endwhile; else: endif;?>