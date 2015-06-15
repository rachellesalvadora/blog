<?php
/*
 Template Name: Page Home

*/
 ?>

 <?php get_header(); ?>

 <div id="content">

 	<div id="inner-content" class="wrap cf">

 		<div id="main" class="m-all t-2of3 d-7of7 cf rachelle-home" role="main">

 			<div class="quick-description">
 				<p>
 					<strong>I am learning Web Development, so I'm always in the hunt for new and relevant stuff around the web, here is where I'll post them.</strong><br/>
 					<em>I'll be very happy if people are able to learn off my posts!!</em><br/>
 				</p>
 				
 			</div>

 			<div class="m-all t-2of3 d-2of7 left-container">
 				<h1 class="column-title">
 					Personal posts
 				</h1>
 				<hr/>
 				<?php 
 				$args = array('category_name' => 'personal', 'posts_per_page' => '-1');
 				$category_posts = new WP_Query($args);

 				if($category_posts->have_posts()) : 
 					while($category_posts->have_posts()) : 
 						$category_posts->the_post();
 					?>
 					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<a href="<?php the_permalink(); ?>">
 						<h2 class="preview-title">
 						<?php the_title(); ?>
 						</h2>
						</a>
 						<span>
 							<?php the_date(); ?>
 						</span>
 						<p>
 							<?php the_excerpt(); ?>
 						</p>
 						<p>
 							<?php the_tags(); ?>
 						</p>
 					</article>
 					<?php
 					endwhile;
 					else: 
 						?>

 					Oops, there are no posts.

 					<?php
 					endif;
 					?>
 				</div> 
 				<div class="m-all t-2of3 d-3of7 middle-container">
 					<h1 class="column-title">
 						Programming posts
 					</h1>
 					<hr/>
 					<?php 
 					$args = array('category_name' => 'programming', 'posts_per_page' => '-1');
 					$category_posts = new WP_Query($args);

 					if($category_posts->have_posts()) : 
 						while($category_posts->have_posts()) : 
 							$category_posts->the_post();
 						?>
 						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
 							<a href="<?php echo get_permalink(); ?>"><h2 class="preview-title">
 								<?php the_title(); ?>
 							</h2></a>
 							<span>
 								<?php the_date(); ?>
 							</span>
 							<p>
 								<?php the_excerpt(); ?>
 							</p>
 							<p>
 								<?php the_tags(); ?>
 							</p>
 						</article>
 						<?php
 						endwhile;
 						else: 
 							?>

 						Oops, there are no posts.

 						<?php
 						endif;
 						?>
 					</div> 
 					<div class="m-all t-2of3 d-2of7 right-container">
 						<h1 class="column-title">
 							Wordpress posts
 						</h1>
 						<hr/>
 						<?php 
 						$args = array('category_name' => 'wordpress', 'posts_per_page' => '-1');
 						$category_posts = new WP_Query($args);

 						if($category_posts->have_posts()) : 
 							while($category_posts->have_posts()) : 
 								$category_posts->the_post();
 							?>
 							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
 								<a href="<?php echo get_permalink(); ?>"><h2 class="preview-title"><h2 class="preview-title">
 									<?php the_title(); ?>
 								</h2></a>
 								<span>
 									<?php the_date(); ?>
 								</span>
 								<p>
 									<?php the_excerpt(); ?>
 								</p>
 								<p>
 									<?php the_tags(); ?>
 								</p>
 							</article>
 							<?php
 							endwhile;
 							else: 
 								?>

 							Oops, there are no posts.

 							<?php
 							endif;
 							?>
 						</div> 
 					</div>

 				</div>

 			</div>


 			<?php get_footer(); ?>
