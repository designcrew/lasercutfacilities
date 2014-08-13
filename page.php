<?php get_header(); ?>

<?php if(is_front_page()) { echo do_shortcode('[metaslider id=15]'); } else {} ?>

<div class="clearfix"></div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="container">
            
	<section class="entry-content clearfix" itemprop="articleBody">
		<?php if(is_front_page()) { } else { ?><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1> <?php } ?>
		<?php the_content(); ?>
	</section>   

</div><!--/.container-->

</article>

<?php endwhile; else : ?>
<?php endif; ?> 

<?php get_footer(); ?>