<?php get_header(); ?>

<?php
  while (have_posts()) {
  the_post();
?>

<section class="header-blog">
  <div class="container">
    <h3>Blog de Marketing Educacional</h3>
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
                        <div class="col-xl-9 col-lg-9 pr-45 blog-space">
                            <span class="cat"><?php
                  $category = get_the_category(); 
                  echo $category[0]->cat_name;
                  ?></span>


<h1 class="title-post"><?php the_title() ?></h1>


<span class="meta-post">Por <?php the_author_posts_link(); ?> em <?php the_time('j \d\e F \d\e Y') ?></span>


<?php the_content(); ?>

                        </div>
                        

                        <?php get_sidebar(); ?>


                    </div>
                    
                </div>
            </div>

<?php } ?>

<?php get_footer(); ?>