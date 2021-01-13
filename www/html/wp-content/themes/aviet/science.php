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
<script>
	jQuery('<link rel="stylesheet" href="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/css/all.min.css"><link rel="stylesheet" href="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/css/science.min.css">').appendTo(jQuery("head"));
	var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
</script>
</body>
</html>