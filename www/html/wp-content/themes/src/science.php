<?php
/*
Template Name: Science
*/
?>

<?php get_header("second"); ?>
<a data-name="news-anchor"></a>
<div class="news-back">
	<div class="news container">
		<h1>НОВОСТИ</h1>
		<div class="news-wrapper container" data-cat="6">
			<?php
				global $post;

				$args = array(
					"cat" => "6"
				);

				$q = new WP_Query($args);
				$posts = $q -> query($args);
				foreach( $posts as $post ){
					 setup_postdata($post);
				?>

				<div class="post colm-lg-4 colm-sm-6 col-xs-12" data-modal-button="<?php the_permalink();?>">
					<h2><?php the_title();?></h2>
					<?php the_excerpt();?>
					<span class="date"><?php echo get_the_date();?></span>
					<a class="tag"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></a>
				</div>

				<?php	 
				}

				?>
				<?php if (  $q->max_num_pages > 1 ) { ?>
					<a class="load-more" data-page="1" data-max-page="<?php echo $q->max_num_pages; ?>">ЗАГРУЗИТЬ БОЛЬШЕ</a>
				<?php
				}
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://aviet.ugatu.su/wp-content/themes/aviet/js/menu.js"></script>
<script src="http://aviet.ugatu.su/wp-content/themes/aviet/js/modal-window.js"></script>
<script src="http://aviet.ugatu.su/wp-content/themes/aviet/js/load-posts.js"></script>
<script src="http://aviet.ugatu.su/wp-content/themes/aviet/js/scrolls.js"></script>
<script src="http://aviet.ugatu.su/wp-content/themes/aviet/js/media-posts.js"></script>
<script src="http://aviet.ugatu.su/wp-content/themes/aviet/js/jquery.smoothscroll.js"></script>
<script>
	$('<link rel="stylesheet" href="http://aviet.ugatu.su/wp-content/themes/aviet/css/all.css"><link rel="stylesheet" href="http://aviet.ugatu.su/wp-content/themes/aviet/css/science.css">').appendTo($("head"));
</script>
</body>
</html>