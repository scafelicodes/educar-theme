<?php /* Template Name: Blog Template */ ?>

<?php get_header(); ?>

<section class="header-blog">
	<div class="container">
		<h3><?php the_title() ?></h3>
	</div>	
</section>


<section class="menu-blog">

<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

    	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php bloginfo( 'url' ); ?>/gestao-escolar">Gestão Escolar</a>
          <a class="dropdown-item" href="<?php bloginfo( 'url' ); ?>/marketing-educacional">Marketing Educacional</a>
          <a class="dropdown-item" href="<?php bloginfo( 'url' ); ?>/tecnologias-educacionais">Tecnologias Educacionais</a>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/materiais-educativos">Materiais Educativos</a>
      </li>


    </ul>
  </div>
</nav>
</div>

</section>


<div class="blog-area pt-50 pb-100">

<div class="container">
	
	<div class="row">
		<div class="col-md-9">
			<!-- <h1 class="ultimas">últimas</h1> -->
                <?php
                    $wp_query = new WP_Query();
                    query_posts( array( 'post_type' => 'post', 'showposts' => 5, 'paged'=>$paged ));
                    if(have_posts()):
                    while ($wp_query -> have_posts()) : $wp_query -> the_post();
                ?>

                <div class="post-preview">
                  

                  <div class="row">
                    
                    <div class="col-md-4">
                      <?php the_post_thumbnail('singlelist'); ?>
                    </div>

                    <div class="col-md-8">
                      <h3 class="post-title">
                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                    </h3>

                    <p class="post-meta">Por <?php the_author_posts_link(); ?> em <?php the_time('j \d\e F \d\e Y') ?></p>
                                
                    <h3 class="post-subtitle"><?php the_excerpt(); ?></h3>
                    </div>
                  
                  </div>
                        
                    
                            
                    
                </div>
                <?php endwhile; endif; ?>
                
                <!-- <ul class="pager">
                    <li class="previous"><?php next_posts_link('<span>Mais publicações</span>') ?></li>
                    <li class="next"><?php previous_posts_link('<span>Anteriores</span>') ?></li>
                </ul> -->

<div class="text-center">

                <?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
?>

</div>

		</div>

		
			<?php get_sidebar();?>
		
	</div>
</div>

</div>



<?php get_footer(); ?>