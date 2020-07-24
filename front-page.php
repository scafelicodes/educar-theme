<?php get_header(); ?>


<section class="hero-home d-flex align-items-center">
<div class="bg-overlay"></div>

    <div class="container">
        <div class="row justify-content-md-center">

            <div class="col-xl-6 col-lg-7">

            
                <div class="content text-center">

                    <h1>Educar é o caminho para um futuro melhor</h1>

                    <p>Mussum Ipsum, cacilds vidis litro abertis. Vehicula non. Ut sed ex eros. Vivamus sit amet nibh non tellus tristique interdum. </p>


                    <button type="button" class="btn btn-outline-light btn-lg">Começar agora</button>

                </div>
            </div>

        </div>
    </div>

</section>


<section>
    <div class="container">

        <div class="row">
            <div class="col-md-4">

                <div class="card-home">
                    <img class="icons-educar" src="<?php bloginfo('template_url') ?>/img/ferramentas.svg" alt="">
                    <h4>Ferramentas</h4>
                    <p>Mussum Ipsum, cacilds vidis litro abertis. Vehicula non. Ut sed ex eros.</p>
                </div>


            </div>
            <div class="col-md-4">
                <div class="card-home">
                    <img class="icons-educar" src="<?php bloginfo('template_url') ?>/img/questoes.svg" alt="">
                    <h4>Banco de Questões</h4>
                    <p>Mussum Ipsum, cacilds vidis litro abertis. Vehicula non. Ut sed ex eros.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-home">
                    <img class="icons-educar" src="<?php bloginfo('template_url') ?>/img/materiais.svg" alt="">
                    <h4>Materiais</h4>
                    <p>Mussum Ipsum, cacilds vidis litro abertis. Vehicula non. Ut sed ex eros.</p>
                </div>
            </div>
        </div>


    </div>
</section>


         
<section>
    <div class="container">
        <div class="title-section">
            <p>Materiais Gratuitos sobre</p>
            <h2>Tecnologias Educacionais</h2>
        </div>

        <div class="row">

                        <?php
            $wp_query = new WP_Query();
            query_posts( array( 'post_type' => 'post', 'showposts' => 3, 'paged'=>$paged ));
            if(have_posts()):
            while ($wp_query -> have_posts()) : $wp_query -> the_post();
        ?>


        
        


                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                        <span class="tag-blog">
                                            <?php
                                                $category = get_the_category(); ?>
                                            <a href="#"><?php echo $category[0]->cat_name; ?></a>
                                        </span>
                                        <h4>
                                            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                        </h4>
                                        <p><?php the_excerpt(); ?></p>
                                        <div class="blog-meta">
                                            <span class="f-left"><?php the_time('j \d\e F \d\e Y') ?></span>
                                            <span class="f-right blog-more-btn">
                                                <a href="<?php the_permalink();?>">
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                    <span class="blog-more">Leia mais</span>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <?php endwhile; endif; ?>

                    </div>  
        
    </div>
</section>



<?php get_footer(); ?>