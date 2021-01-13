<?php
/*
Template Name: News
*/
?>

<?php get_header("second"); ?>
<div class="news-back">
	<div class="news container" data-slider="news">
		<h1>НОВОСТИ</h1>
		<div class="trigger-sm hidden-lg hidden-xs ">
			<span>ТЭГИ</span>
			<div>
				<img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/arrow-down.png" alt="" class="">
				<img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/arrow-up.png" alt="" class="hidden">
			</div>
		</div>
		<div class="trigger-xs trigger-xs-passive hidden-lg hidden-sm ">
			<div class="trigger-close-1"></div>
			<div class="trigger-close-2"></div>
			<div></div>
		</div>
		<div class="news-radio">
			<form action="#" method="POST" name="subjects">
				<input type="radio" id="news-0" name="news" value="0" checked><label for="news-0" class="news-label" data-label="news">ВСЕ</label>
				<input type="radio" id="news-1" name="news" value="1"><label for="news-1" class="news-label" data-label="news">ЖИЗНЬ ФАКУЛЬТЕТА</label>
				<input type="radio" id="news-2" name="news" value="2"><label for="news-2" class="news-label" data-label="news">АБИТУРИЕНТУ</label>
				<input type="radio" id="news-3" name="news" value="3"><label for="news-3" class="news-label" data-label="news">УЧЕБА</label>
				<input type="radio" id="news-4" name="news" value="4"><label for="news-4" class="news-label" data-label="news">СПОРТ</label>
				<input type="radio" id="news-5" name="news" value="5"><label for="news-5" class="news-label" data-label="news">НАУКА</label>
				<input type="radio" id="news-6" name="news" value="6"><label for="news-6" class="news-label" data-label="news">АНОНСЫ</label>
			</form>
		</div>

		<!--ALL NEWS-->
		<div class="news-wrapper container hidden" data-slider-info="news" data-slider-number="0" data-cat="1">
			<?php
				global $post;

				$args = array(
					"cat" => "2, 3, 4, 5, 6, 7"
				);

				$q = new WP_Query($args);
				$posts = $q -> query($args);
				foreach( $posts as $post ){
					 setup_postdata($post);
				?>

				<div class="post colm-lg-4 colm-sm-6 col-xs-12 wow fadeIn" data-modal-button="<?php the_permalink();?>">
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


		<!--FACULTY LIFE-->
		<div class="news-wrapper container hidden" data-slider-info="news" data-slider-number="1" data-cat="2">
			<?php
				global $post;

				$args = array(
					"cat" => "2"
				);

				$q = new WP_Query($args);
				$posts = $q -> query($args);
				foreach( $posts as $post ){
					 setup_postdata($post);
				?>

				<div class="post colm-lg-4 colm-sm-6 col-xs-12 wow fadeIn" data-modal-button="<?php the_permalink();?>">
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

		<!--ENROLLEE-->
		<div class="news-wrapper container hidden" data-slider-info="news" data-slider-number="2" data-cat="3">
			<?php
				global $post;

				$args = array(
					"cat" => "3"
				);

				$q = new WP_Query($args);
				$posts = $q -> query($args);
				foreach( $posts as $post ){
					 setup_postdata($post);
				?>

				<div class="post colm-lg-4 colm-sm-6 col-xs-12 wow fadeIn" data-modal-button="<?php the_permalink();?>">
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

		<!--STUDY-->
		<div class="news-wrapper container hidden" data-slider-info="news" data-slider-number="3" data-cat="4">
			<?php
				global $post;

				$args = array(
					"cat" => "4"
				);

				$q = new WP_Query($args);
				$posts = $q -> query($args);
				foreach( $posts as $post ){
					 setup_postdata($post);
				?>

				<div class="post colm-lg-4 colm-sm-6 col-xs-12 wow fadeIn" data-modal-button="<?php the_permalink();?>">
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

		<!--SPORT-->
		<div class="news-wrapper container hidden" data-slider-info="news" data-slider-number="4" data-cat="5">
			<?php
				global $post;

				$args = array(
					"cat" => "5"
				);

				$q = new WP_Query($args);
				$posts = $q -> query($args);
				foreach( $posts as $post ){
					 setup_postdata($post);
				?>

				<div class="post colm-lg-4 colm-sm-6 col-xs-12 wow fadeIn" data-modal-button="<?php the_permalink();?>">
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

		<!--SCIENCE-->
		<div class="news-wrapper container hidden" data-slider-info="news" data-slider-number="5" data-cat="6">
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

				<div class="post colm-lg-4 colm-sm-6 col-xs-12 wow fadeIn" data-modal-button="<?php the_permalink();?>">
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

		<!--PREVIEW-->
		<div class="news-wrapper container hidden" data-slider-info="news" data-slider-number="6" data-cat="7">
			<?php
				global $post;

				$args = array(
					"cat" => "7"
				);

				$q = new WP_Query($args);
				$posts = $q -> query($args);
				foreach( $posts as $post ){
					 setup_postdata($post);
				?>

				<div class="post colm-lg-4 colm-sm-6 col-xs-12 wow fadeIn" data-modal-button="<?php the_permalink();?>">
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
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/menu.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/slider.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/news-trigger.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/modal-window.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/load-posts.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/scrolls.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/media-posts.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/post-auto-delay.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/jquery.smoothscroll.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
	document.addEventListener("DOMContentLoaded", postAutoDelay(document.querySelectorAll(".news-wrapper")));
	$('<link rel="stylesheet" href="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/css/all.css"><link rel="stylesheet" href="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/css/news.css">').appendTo($("head"));
	var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
</script>
</body>
</html>