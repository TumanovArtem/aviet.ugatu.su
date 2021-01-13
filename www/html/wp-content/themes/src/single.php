	<?php while ( have_posts() ) : the_post();?>
		<?php get_header("single"); ?>
		<div class="container modal-window single">
			<div id="content">
				<h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
				<?php the_content();?>
				<span class="date"><?php echo get_the_date(); ?></span>
				<a class="tag"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></a>
			</div>
		</div>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>
<script src="http://aviet.ugatu.su/wp-content/themes/aviet/js/jquery-2.1.4.min.js"></script>
<script src="http://aviet.ugatu.su/wp-content/themes/aviet/js/menu.js"></script>
<script src="http://aviet.ugatu.su/wp-content/themes/aviet/js/scrolls.js"></script>
<script>
	$('<link rel="stylesheet" href="http://aviet.ugatu.su/wp-content/themes/aviet/css/all.css">').appendTo($("head"));
	if($(".foogallery-container").length === 0) {
		$('<link rel="stylesheet" href="http://aviet.ugatu.su/wp-content/themes/aviet/css/castom-single.css">').appendTo($("head"));
	}
	else {
		$('<link rel="stylesheet" href="http://aviet.ugatu.su/wp-content/themes/aviet/css/castom-single-galery.css"> ').appendTo($("head"));
	}
</script>
</body>
</html>