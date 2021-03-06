<?php

	define('THEMEROOT', get_stylesheet_directory_uri());

	function true_load_posts(){
		$args['paged'] = $_POST['page']; // следующая страница
		$args['post_status'] = 'publish';
		$args['cat'] = $_POST['cat'];
	
		if($args['cat'] == 1) {
			$args['cat'] = "2, 3, 4, 5, 6, 7";
		}
	
		if($args['cat'] !== "9" && $args['cat'] !== "10" && $args['cat'] !== "12") {
			$q = new WP_Query($args);
			if( $q->have_posts() ):
				while($q->have_posts()): $q->the_post();
					?>
					<div class="post colm-lg-4 colm-sm-6 col-xs-12 wow fadeIn" data-modal-button="<?php the_permalink();?>">
						<h2><?php the_title();?></h2>
						<?php the_excerpt();?>
						<span class="date"><?php the_date();?></span>
						<a class="tag"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></a>
					</div>
					<?php
				endwhile;
			endif;
		}
		if($args['cat'] == 9) {
			$q = new WP_Query($args);
			if( $q->have_posts() ):
				while($q->have_posts()): $q->the_post();
					?>
						<div class="post colm-lg-4 colm-sm-6 col-xs-12">
							<a href=<?php the_permalink(); ?> class="galery-href">
								<?php the_excerpt();?>
								<h2><?php the_title();?></h2>
								<span><?php echo get_the_date(); ?></span>
							</a>
						</div>
					<?php
				endwhile;
			endif;
		}
		if($args['cat'] == 10) {
			$args["posts_per_page"] = 3;
			$q = new WP_Query($args);
			if( $q->have_posts() ):
				while($q->have_posts()): $q->the_post();
					?>
					<div class="post colm-lg-4 colm-sm-6">
						<?php the_content();?>
					</div>
					<?php
				endwhile;
			endif;
		}
		if($args['cat'] == 12) {
			$args['order'] = "ASC";
			$q = new WP_Query($args);
			if( $q->have_posts() ):
				while($q->have_posts()): $q->the_post();
					?>
						<div class="post colm-lg-4 colm-sm-6 col-xs-12" data-modal-button="<?php the_permalink();?>">
							<h2><?php the_title();?></h2>
							<?php the_excerpt();?>
						</div>
					<?php
				endwhile;
			endif;
			}
		wp_reset_postdata();
		wp_die();
	}
 
 
	add_action('wp_ajax_loadmore', 'true_load_posts');
	add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');


	//LOAD SCRIPTS AND STYLESHEETS
	add_action('after_setup_theme','footer_enqueue_scripts');
	
	function footer_enqueue_scripts(){
		remove_action('wp_head','wp_print_scripts');
		remove_action('wp_head','wp_print_head_scripts',9);
		remove_action('wp_head','wp_enqueue_scripts',1);
		add_action('wp_footer','wp_print_scripts',5);
		add_action('wp_footer','wp_enqueue_scripts',5);
		add_action('wp_footer','wp_print_head_scripts',5);
	}

	add_action('wp_enqueue_scripts', 'load_custom_scripts');
	
	function load_custom_scripts() {
		wp_enqueue_script('custom_script', THEMEROOT.'/js/all.min.js', array('jquery'), null, true);
	}
?>