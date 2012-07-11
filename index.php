<?php get_header(); ?>

<?php

	/* Om det inte finns några inlägg */
	if(!have_posts()) : ?>
		<h1>Det fanns inga inlägg!</h1>
		<p>Ojsan hoppsan, det finns visst inga inlägg för tillfället! Men jag är säker på att det dyker upp några - så småningom.</p>
	
	<?php endif; ?>
	<div id="posts-wrapper" class="grid_5 suffix_1">
	<?php while(have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><a href="<?php the_permalink(); ?>" 
		title="Permalänk till inlägget '<?php the_title(); ?>'">
		<?php the_title(); ?>
		</a></h1>
		<?php edit_post_link('Editera inlägget', '<p>','</p>'); ?>
		
		<?php the_content('Fortsätt läsa..'); ?>
		
	</article>
<?php endwhile; ?>
	</div><!-- #posts-wrapper -->

<?php get_footer(); ?>