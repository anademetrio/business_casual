<?php /* Template Name: Home */ get_header(); ?>
<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="<?php the_field('imagem'); ?>" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper"><?php the_field('subtitulo2'); ?></span>
                    <span class="section-heading-lower"><?php the_field('titulo2'); ?></span>
                </h2>
                <p class="mb-3">
                    <?php the_field('conteudo'); ?>
                </p>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="#">Visit Us Today!</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper"><?php the_field('subtitulo'); ?></span>
                        <span class="section-heading-lower"><?php the_field('titulo'); ?></span>
                    </h2>
                    <p class="mb-0"><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile?>

<?php else: ?>

<?php endif; ?>

<?php get_footer(); ?>