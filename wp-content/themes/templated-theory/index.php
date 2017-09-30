<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<!-- Banner -->
<section id="banner">
	<h1>{{ value.h1 }}</h1>
	<p>{{ value.p }}</p>
</section>
<!-- One -->
<section class="wrapper">
	<div class="inner">
		<div class="flex flex-3"  id="one">

		 		
			<article v-for="record in value">
		<header>
					<h3>{{ record.h3 }}</h3>
				</header>
				<div v-html="record.p">
				</div> 

			<footer>
				<a :href="record.href" class="button special">More</a>
			</footer>
		</article>
	
	<?php
	if ( have_posts() ) :

		/* Start the Loop */
		while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

				the_posts_pagination( array(
					'prev_text' => templatedtheory_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'templatedtheory' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'templatedtheory' ) . '</span>' . templatedtheory_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'templatedtheory' ) . ' </span>',
				) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

		</div>
	</div>
</section>

<?php get_footer();
