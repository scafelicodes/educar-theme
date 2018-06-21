<?php get_header(); ?>

<?php
  while (have_posts()) {
  the_post();
?>

<div class="blog-area pt-50 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 pr-45 blog-space">
                            <span class="cat"><?php
                  $category = get_the_category(); 
                  echo $category[0]->cat_name;
                  ?></span>


<h1 class="title-post"><?php the_title() ?></h1>


<span class="meta-post"><?php the_author_posts_link(); ?> em <?php the_time('j \d\e F \d\e Y') ?></span>


<?php the_content(); ?>

                        </div>
                        

                        <?php get_sidebar(); ?>


                    </div>
                    
                </div>
            </div>

<?php } ?>

<?php get_footer(); ?>