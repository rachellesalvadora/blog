<?php
/*
Template Name: Page Of Posts
*/

get_header(); ?>

<!-- begin #main -->
        <div id="main">
        	<!-- Main Menu -->
			<?php site5_main_nav('content clearfix');?>
			<section id="content">
				<article>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<div class="entry-content clearfix">
						<?php the_content(); ?>
					</div>
					<?php endwhile; endif;?>
				</article>
			</section>

        </div>
        <!-- end #main -->

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
        <?php 
        /* The loop: the_post retrieves the content
         * of the new Page you created to list the posts,
         * e.g., an intro describing the posts shown listed on this Page..
         */
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();

              // Display content of page
              get_template_part( 'content', get_post_format() ); 
              wp_reset_postdata();
  
            endwhile;
        endif;

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            // Change these category SLUGS to suit your use.
            'category_name' => 'music, videos', 
            'paged' => $paged
        );

        $list_of_posts = new WP_Query( $args );
        ?>
        <?php if ( $list_of_posts->have_posts() ) : ?>
			<?php /* The loop */ ?>

			<?php while ( $list_of_posts->have_posts() ) : $list_of_posts->the_post(); ?>
				<?php // Display content of posts ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>