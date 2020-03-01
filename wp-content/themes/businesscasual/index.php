<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if(get_field('subtitulo3')):?>
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper"><?php the_field('subtitulo3'); ?></span>
                        <span class="section-heading-lower"><?php the_field('titulo3'); ?></span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Sunday
                            <span class="ml-auto"><?php the_field('sunday'); ?></span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Monday
                            <span class="ml-auto"><?php the_field('monday'); ?></span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Tuesday
                            <span class="ml-auto"><?php the_field('tuesday'); ?></span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Wednesday
                            <span class="ml-auto"><?php the_field('wednesday'); ?></span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Thursday
                            <span class="ml-auto"><?php the_field('thursday'); ?></span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Friday
                            <span class="ml-auto"><?php the_field('friday'); ?></span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Saturday
                            <span class="ml-auto"><?php the_field('saturday'); ?></span>
                        </li>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong><?php the_field('endereco'); ?></strong>
                            <br>
                            <?php the_field('cidade'); ?>
                        </em>
                    </p>
                    <p class="mb-0">
                        <small>
                            <em>Call Anytime</em>
                        </small>
                        <br>
                        <?php the_field('telefone'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo get_the_post_thumbnail_url()?>"
            alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper"><?php the_field('subtitle'); ?></span>
                            <span class="section-heading-lower"><?php the_title(); ?></span>
                        </h2>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile?>

<?php else: ?>

<?php endif; ?>


<?php get_footer(); ?>