<?php
get_header();
?>


<main class="single-post-container">

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
    
        the_post();     ?>

    <article class="post-container">
<div class="post-content">
    <span class="author">
    <?php the_author_posts_link(); ?>
    </span>
    <h3>
       <a href="<?php the_permalink() ?>">
       <?php the_title(); ?>
       </a>
    </h3>
    <p>
    <?php the_content(); ?>
    </p>
   
      
    
  
</div>
<div class="post-image-container">
    <?php
    the_post_thumbnail('', ["class" => "post-image", "alt" => get_the_title() . "thumbnail"]); 
    ?>
</div>
</article>



        
        
    <?php
    }
    

}


comments_template();


?>

<div class="pagination-container">
    
    <?php

    if(get_previous_post_link()){
        previous_post_link();
    }else{
        echo '<span>No Previous Post</span>';
    };
    if(get_next_posts_link()){
        next_post_link();
    }else{
        echo '<span>No Next Post</span>';
    };
    ?>
</div>

</main>



<?php get_footer() ?>


