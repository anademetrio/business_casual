<?php /* Template Name: Products */ get_header(); ?>
<?php query_posts( 'post_type=products' ); if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ml-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper"><?php the_field('subtitle'); ?></span>
                        <span class="section-heading-lower"><?php the_title(); ?></span>
                    </h2>
                </div>
            </div>
            <a href="<?php the_permalink(); ?>">
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php echo get_the_post_thumbnail_url()?>"
                alt="">
            </a>
            <div class="product-item-description d-flex mr-auto">
                <div class="bg-faded p-5 rounded">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; wp_reset_query();?>

<?php else: ?>

<?php endif; ?>

<?php get_footer(); ?>