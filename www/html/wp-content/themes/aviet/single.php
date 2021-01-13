<?php get_header("single"); ?>
	<?php if( have_posts() ) :?>
		<?php while ( have_posts() ) : the_post();?>
			<div class="container modal-window single">
				<div id="content">
					<h1>
						<?php the_title();?>
					</h1>
					<?php the_content();?>
					<span class="date"><?php echo get_the_date(); ?></span>
					<a class="tag"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></a>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
<script>
	jQuery('<link rel="stylesheet" href="http://aviet.ugatu.su/wp-content/themes/aviet/css/all.min.css">').appendTo(jQuery("head"));
	if(jQuery(".foogallery-container").length === 0) {
		jQuery('<link rel="stylesheet" href="http://aviet.ugatu.su/wp-content/themes/aviet/css/castom-single.min.css">').appendTo(jQuery("head"));
	}
	else {
		jQuery('<link rel="stylesheet" href="http://aviet.ugatu.su/wp-content/themes/aviet/css/castom-single-galery.min.css"> ').appendTo(jQuery("head"));
	}
</script>
</body>
</html>