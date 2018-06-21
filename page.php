<?php get_header(); ?>


<?php
  while (have_posts()) {
  the_post();
?>


<div class="pt-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="container">
                <div class="page-title">
                    <h2><?php the_title() ?></h2>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-area pt-50 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 pr-45 blog-space">
            


<?php the_content(); ?>

                        </div>
                        
                        <?php get_sidebar(); ?>

                    </div>
                    
                </div>
            </div>

<?php } ?>


<?php get_footer(); ?>