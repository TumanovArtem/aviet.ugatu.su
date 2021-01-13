<?php
/*
Template Name: Study
*/
?>

<?php get_header("second"); ?>
<a data-name="news-anchor"></a>
<div class="news-back">
	<div class="news container">
		<h1>НОВОСТИ</h1>
		<div class="news-wrapper container" data-cat="4">
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
<div class="docs-back" style="display: none;">
	<div class="docs container">
		<h2>ДОКУМЕНТЫ</h2>
		<div class="doc">
			<p>Положение о студенческом общежитии государственного образовательного учреждения высшего профессионального образования "Уфимский государственный авиационный технический университет"</p>
			<a href="http://ugatu.su/assets/files/documents/zakon/polozhenie%20%281%29.pdf" target="_blank">СКАЧАТЬ</a>
		</div>
		<div class="doc">
			<p>Договор найма жилого помещения в общежитии между Уфимским государственным авиационным техническим университетом и студентом</p>
			<a href="http://ugatu.su/assets/files/documents/zakon/dogovor-najma-zhilogo-pomeshheniya.docx" target="_blank">СКАЧАТЬ</a>
		</div>
		<div class="doc">
			<p>Заявление для студентов, поступивших на 1 курс обучения с полным возмещением затрат</p>
			<a href="http://ugatu.su/assets/files/documents/zakon/zayavlenie-dlya-obshhezhitiya-%28kommercziya%29.doc" target="_blank">СКАЧАТЬ</a>
		</div>
		<div class="doc">
			<p>Документы, регламентирующие оплату проживания</p>
			<a href="http://ugatu.su/stoimost-prozhivaniya-v-obshhezhitiyah.html" target="_blank">СКАЧАТЬ</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<script>
	jQuery('<link rel="stylesheet" href="http://aviet.ugatu.su/wp-content/themes/aviet/css/all.min.css"><link rel="stylesheet" href="http://aviet.ugatu.su/wp-content/themes/aviet/css/study.min.css">').appendTo(jQuery("head"));
	var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
</script>
</body>
</html>