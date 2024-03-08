<?php
get_header();
?>


<section class="posts-container">

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
    <?php the_excerpt(); ?>
    </p>
   
        <a class="see-more" href="<?php the_permalink() ?>">
        <span>See more...</span>
        </a>
  
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



?>

<div class="pagination-container">
    
    <?php

    if(get_previous_posts_link()){
        previous_posts_link();
    }else{
        echo '<span>No Previous Page</span>';
    };
    if(get_next_posts_link()){
        next_posts_link();
    }else{
        echo '<span>No Next Page</span>';
    };
    ?>
</div>

</section>


<!-- <article class="post-container">
<div class="post-content">
    <span class="author">Some thing</span>
    <h3>Post Title</h3>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis explicabo nisi, unde perspiciatis optio soluta enim ducimus harum ipsum quas vero quasi illo nam quia ratione qui hic est officia.</p>
    <div class="see-more"><span>See more</span> <i class="fa-solid fa-angle-right"></i></div>
</div>
<div class="post-image-container">
    <img class="post-image" src="https://placehold.co/600x600" alt="image">
</div>
</article> -->



<?php get_footer() ?>


