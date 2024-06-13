<?php
/**
 * The template for displaying default pages.
 *
 * @package Genesis Block Theme
 */

get_header(); ?>
<div class="singular-featured-image-wrap portfolio-singular-featured-image-wrap">
    <div class="wrap portolfio-main-image">
        <?php the_post_thumbnail( 'genesis-block-theme-featured-image' ); ?>
    </div>
</div>

<div class="wrap">
    <div class="content-sidebar-wrap portfolio-content-sidebar-wrap">
        <main class="content" id="genesis-content">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> aria-label="<?php the_title_attribute(); ?>">
                <header class="entry-header">
                    <h1 class="entry-title" itemprop="headline">
                         <?php the_title(); ?>
                    </h1>
                </header>
                <div class="entry-content" itemprop="text">
                   <?php the_content(); ?>
                </div>
            </article>
        </main>
    </div>
</div>

<style type="text/css">
    .portfolio-singular-featured-image-wrap {
        margin-top: -120px; 
        max-height: 600px;   
    }
    .portolfio-main-image img{
        max-height: 600px !important;
        width: 100%;
        object-fit: cover;
    }
    .portfolio-content-sidebar-wrap {
        margin-top: -100px;    
        z-index: 99999;
    }
    
</style>

<?php get_footer(); ?>
