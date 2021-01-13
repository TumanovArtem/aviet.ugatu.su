<?php get_header("main"); ?>
<div class="news-back">
	<div class="news container" data-slider="news">
		<h1 class="wow fadeIn">НОВОСТИ</h1>
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
		<div class="news-radio wow fadeIn">
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
		<div class="news-wrapper container hidden" data-slider-info="news" data-slider-number="0">
			<?php
				global $post;
				$args = array(
					"category" => "2, 3, 4, 5, 6, 7",
					'numberposts' => '6'
				);
				$posts = get_posts($args);

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

				wp_reset_postdata();
			?>
		</div>


		<!--FACULTY LIFE-->
		<div class="news-wrapper container hidden" data-slider-info="news" data-slider-number="1">
			<?php
				global $post;
				$args = array(
					"category" => 2,
					'numberposts' => '6'
				);
				$posts = get_posts( $args );

				foreach( $posts as $post ){
					 setup_postdata($post);
				?>
				
				<div class="post colm-lg-4 colm-sm-6 col-xs-12 wow fadeIn" data-modal-button="<?php the_permalink();?>">
					<h2><?php the_title();?></h2>
					<?php the_excerpt();?>
					<span class="date"><?php echo get_the_date(); ?></span>
					<a class="tag"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></a>
				</div>

				<?php	 
				}

				wp_reset_postdata();
			?>
		</div>

		<!--ENROLLEE-->
		<div class="news-wrapper container hidden" data-slider-info="news" data-slider-number="2">
			<?php
				global $post;
				$args = array(
					"category" => 3,
					'numberposts' => '6'
				);
				$posts = get_posts( $args );

				foreach( $posts as $post ){
					 setup_postdata($post);
				?>
				
				<div class="post colm-lg-4 colm-sm-6 col-xs-12 wow fadeIn" data-modal-button="<?php the_permalink();?>">
					<h2><?php the_title();?></h2>
					<?php the_excerpt();?>
					<span class="date"><?php echo get_the_date(); ?></span>
					<a class="tag"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></a>
				</div>

				<?php	 
				}

				wp_reset_postdata();
			?>
		</div>

		<!--STUDY-->
		<div class="news-wrapper container hidden" data-slider-info="news" data-slider-number="3">
			<?php
				global $post;
				$args = array(
					"category" => 4,
					'numberposts' => '6'
				);
				$posts = get_posts( $args );

				foreach( $posts as $post ){
					 setup_postdata($post);
				?>
				
				<div class="post colm-lg-4 colm-sm-6 col-xs-12 wow fadeIn" data-modal-button="<?php the_permalink();?>">
					<h2><?php the_title();?></h2>
					<?php the_excerpt();?>
					<span class="date"><?php echo get_the_date(); ?></span>
					<a class="tag"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></a>
				</div>

				<?php	 
				}

				wp_reset_postdata();
			?>
		</div>

		<!--SPORT-->
		<div class="news-wrapper container hidden" data-slider-info="news" data-slider-number="4">
			<?php
				global $post;
				$args = array("category" => 5,
					'numberposts' => '6'
				);
				$posts = get_posts( $args );

				foreach( $posts as $post ){
					 setup_postdata($post);
				?>
				
				<div class="post colm-lg-4 colm-sm-6 col-xs-12 wow fadeIn" data-modal-button="<?php the_permalink();?>">
					<h2><?php the_title();?></h2>
					<?php the_excerpt();?>
					<span class="date"><?php echo get_the_date(); ?></span>
					<a class="tag"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></a>
				</div>

				<?php	 
				}

				wp_reset_postdata();
			?>
		</div>

		<!--SCIENCE-->
		<div class="news-wrapper container hidden" data-slider-info="news" data-slider-number="5">
			<?php
				global $post;
				$args = array(
					"category" => 6,
					'numberposts' => '6'
				);
				$posts = get_posts( $args );

				foreach( $posts as $post ){
					 setup_postdata($post);
				?>
				
				<div class="post colm-lg-4 colm-sm-6 col-xs-12 wow fadeIn" data-modal-button="<?php the_permalink();?>">
					<h2><?php the_title();?></h2>
					<?php the_excerpt();?>
					<span class="date"><?php echo get_the_date(); ?></span>
					<a class="tag"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></a>
				</div>

				<?php	 
				}

				wp_reset_postdata();
			?>
		</div>

		<!--PREVIEW-->
		<div class="news-wrapper container hidden" data-slider-info="news" data-slider-number="6">
			<?php
				global $post;
				$args = array(
					"category" => 7,
					'numberposts' => '6'
				);
				$posts = get_posts( $args );

				foreach( $posts as $post ){
					 setup_postdata($post);
				?>
				
				<div class="post colm-lg-4 colm-sm-6 col-xs-12 wow fadeIn" data-modal-button="<?php the_permalink();?>">
					<h2><?php the_title();?></h2>
					<?php the_excerpt();?>
					<span class="date"><?php echo get_the_date(); ?></span>
					<a class="tag"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></a>
				</div>

				<?php	 
				}

				wp_reset_postdata();
			?>
		</div>

		<a href="https://aviet-ugatu.herokuapp.com/news" class="button hidden-lg hidden-sm">БОЛЬШЕ НОВОСТЕЙ</a>
	</div>
</div>
<div class="faculty-back">
	<div class="faculty container">
		<h1 class="wow fadeIn" data-wow-delay="0">О ФАКУЛЬТЕТЕ</h1>
		<div class="col-lg-7 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay=".1s">
			<div class="player"></div>
		</div>
		<a href="" class="button hidden-lg wow fadeIn" data-wow-delay=".2s">УЗНАТЬ БОЛЬШЕ</a>
		<div class="col-lg-5 hidden-sm hidden-xs statistic wow fadeIn">
			<div class="col-lg-11 wow fadeIn" data-wow-delay=".25s">
				<div class="faculty-img"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/school.png" alt=""></div>
				<h2>5 КАФЕДР</h2>
			</div>
			<div class="col-lg-11 wow fadeIn" data-wow-delay=".3s">
				<div class="faculty-img"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/test_tube.png" alt=""></div>
				<h2>32 ЛАБОРАТОРИИ</h2>
			</div>
			<div class="col-lg-11 wow fadeIn" data-wow-delay=".35s">
				<div class="faculty-img"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/group.png" alt=""></div>
				<h2>2356 СТУДЕНТОВ</h2>
			</div>
			<a href="https://aviet-ugatu.herokuapp.com/about-faculty" class="button wow fadeIn" data-wow-delay=".4s">УЗНАТЬ БОЛЬШЕ</a>
		</div>
	</div>
</div>
<div class="enrollee-back">
	<div class="enrollee container ">
			<div class="enrollee-wrap colm-lg-5 colm-sm-6 colm-xs-12 all-not-m">
				<h1 class="wow fadeIn" data-wow-delay="0">АБИТУРИЕНТУ</h1>
				<p class="wow fadeIn" data-wow-delay=".1s">Абитуриент? Не знаешь как подать документы? Раздумываешь, какое все-таки выбрать направление? Хочешь посмотреть проходные баллы на интересующую специальность за предыдущие годы?</p>
				<p class="wow fadeIn" data-wow-delay=".2s">Скорее заходи в раздел нашего сайта под названием "Абитуриенту"</p>
				<a href="https://aviet-ugatu.herokuapp.com/enrollee" class="button hidden-xs wow fadeIn" data-wow-delay=".3s">УЗНАТЬ БОЛЬШЕ</a>
			</div>
			<div class="colm-lg-1 colm-sm-1 hidden-xs empty"></div>
			<div class="colm-lg-2 hidden-sm hidden-xs all-not-m wow fadeIn" data-wow-delay=".4s">
				<div class="preview" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=50"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/stairs.png" alt=""></div>
				<h2 class="hidden-sm hidden-xs" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=50">ПОСТУПЛЕНИЕ.<br>С ЧЕГО НАЧАТЬ?</h2>
			</div>
			<div class="colm-lg-2 hidden-sm hidden-xs sm-not-m wow fadeIn" data-wow-delay=".5s">
				<div class="preview wow fadeIn" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=54"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/purchase_order.png" alt=""></div>
				<h2 class="hidden-sm hidden-xs wow fadeIn" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=54">ПРОХОДНЫЕ БАЛЛЫ<br>ПРОШЛЫХ ЛЕТ</h2>
			</div>
			<div class="colm-lg-2 hidden-sm hidden-xs sm-not-m wow fadeIn" data-wow-delay=".6s">
				<a href="https://aviet-ugatu.herokuapp.com/enrollee#direction-anchor"><div class="preview wow fadeIn"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/student.png" alt=""></div></a>
				<h2 class="hidden-sm hidden-xs wow fadeIn"><a href="https://aviet-ugatu.herokuapp.com/enrollee#direction-anchor">НАПРАВЛЕНИЯ ПОДГОТОВКИ</a></h2>
			</div>
			<div class="hidden-lg colm-sm-2 hidden-xs wow fadeIn" data-wow-delay=".7s">
				<a data-modal-button="https://aviet-ugatu.herokuapp.com/?p=50"><div class="preview wow fadeIn"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/stairs.png" alt=""></div></a>
				<a data-modal-button="https://aviet-ugatu.herokuapp.com/?p=54"><div class="preview wow fadeIn"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/purchase_order.png" alt=""></div></a>
				<a href="https://aviet-ugatu.herokuapp.com/enrollee#direction-anchor"><div class="preview wow fadeIn"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/student.png" alt=""></div></a>
			</div>
			<a href="https://aviet-ugatu.herokuapp.com/enrollee" class="button hidden-lg hidden-md hidden-sm" data-wow-delay=".8s">УЗНАТЬ БОЛЬШЕ</a>
	</div>
</div>
<div class="galery-back">
	<div class="galery container ">
		<h1 class="hidden-lg wow fadeIn" data-wow-delay="0s">ГАЛЕРЕЯ</h1>
		<div class="colm-lg-3 hidden-sm hidden-xs lg-not-m wow fadeIn">
			<h1 class="wow fadeIn" data-wow-delay="0s">ГАЛЕРЕЯ</h1>
			<p class="wow fadeIn" data-wow-delay=".1s">Здесь вы сможете найти фотографии со всех наиболее ярких и запоминающихся событий и мероприятий факультета авионики, энергетики и инфокоммуникаций.</p>
			<a href="https://aviet-ugatu.herokuapp.com/faculty-life#galery-anchor" class="button wow fadeIn" data-wow-delay=".2s">В ГАЛЕРЕЮ</a>
		</div>
		<div class="colm-lg-3 colm-sm-4 photo sm-not-m xs-not-m wow fadeIn" id="photo-1" data-wow-delay=".3s">
			<img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/girl.jpg" alt="" class="hidden-lg hidden-sm">
		</div>
		<div class="colm-lg-3 colm-sm-4 photo wow fadeIn" id="photo-2" data-wow-delay=".4s">
			<img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/solder.jpg" alt="" class="hidden-lg hidden-sm">
		</div>
		<div class="colm-lg-3 colm-sm-4 col-xs-6 hiddex-xs photo wow fadeIn" id="photo-3" data-wow-delay=".5s">
		</div>
		<a href="https://aviet-ugatu.herokuapp.com/faculty-life#galery-anchor" class="button hidden-lg wow fadeIn">В ГАЛЕРЕЮ</a>
	</div>
</div>
<div class="citations-back" data-slider="citations-lg">
	<div class="grad-container hidden-lg hidden-xs left-grad"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/grad.png" alt=""></div>
	<div class="grad-container hidden-lg hidden-xs right-grad"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/grad.png" alt=""></div>
	<div class="citations container" data-slider="citations-xs">
		<div class="arrow hidden-lg hidden-sm" data-slider-controls="left" data-slider-controls-info="citations-xs"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/arrow-l.png" alt=""></div>
		<div class="citations-scroll col-xs-8">
			<div class="citations-lg-wrapper hidden-lg fadeIn" data-slider-info="citations-lg" data-slider-number="0">
				<div class="cit colm-lg-4 hidden-xs citations-xs-wrapper fadeIn wow" data-slider-info="citations-xs" data-slider-number="0">
					<div class="avatar"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/zhernakov.png" alt=""></div>
					<h2>ЖЕРНАКОВ СЕРГЕЙ ВЛАДИМИРОВИЧ</h2>
					<em>ДОКТОР ТЕХНИЧЕСКИХ НАУК</em>
					<blockquote>"Качественные знания в области современной электронной, компьютерной и микропроцессорной техники, умение работать с системами автоматизированного проектирования обеспечивают устойчивый спрос на специалистов."</blockquote>
				</div>
				<div class="cit colm-lg-4 hidden-xs citations-xs-wrapper fadeIn wow" data-slider-info="citations-xs" data-slider-number="1">
					<div class="avatar"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/lobanov2.png" alt=""></div>
					<h2>ЛОБАНОВ ЮРИЙ ВИКТОРОВИЧ</h2>
					<em>КАНДИДАТ ТЕХНИЧЕСКИХ НАУК</em>
					<blockquote>"Электроника  сама по себе очень интересная и востребованная наука, имеющая широкое практическое применение от компьютеров и сотовых телефонов до современных производственных энергетических комплексов."</blockquote>
				</div>
				<div class="cit colm-lg-4 hidden-xs citations-xs-wrapper fadeIn wow" data-slider-info="citations-xs" data-slider-number="2">
					<div class="avatar"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/urazbahtina.png" alt=""></div>
					<h2>УРАЗБАХТИНА ЮЛИЯ ОЛЕГОВНА</h2>
					<em>ДЕКАН ФАКУЛЬТЕТА АВИЭТ</em>
					<blockquote>"Основная образовательная программа «Биотехнические системы и технологии» реализует подготовку бакалавров способных эффективно работать в сфере биотехнических систем и технологий."</blockquote>
				</div>
			</div>
			<div class="citations-lg-wrapper hidden-lg fadeIn" data-slider-info="citations-lg" data-slider-number="1">
				<div class="cit colm-lg-4 hidden-xs citations-xs-wrapper fadeIn wow" data-slider-info="citations-xs" data-slider-number="3">
					<div class="avatar"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/bagmanov.png" alt=""></div>
					<h2>БАГМАНОВ ВАЛЕРИЙ ХУСАИНОВИЧ</h2>
					<em>ПРОФЕССОР КАФЕДРЫ ТС</em>
					<blockquote>"В любых корпорациях, фирмах и ведомствах, военных и гражданских, а также в обыденной жизни связь есть везде и будет всегда. Это одна из самых востребованных на рынке труда специальностей."</blockquote>
				</div>
				<div class="cit colm-lg-4 hidden-xs citations-xs-wrapper fadeIn wow" data-slider-info="citations-xs" data-slider-number="4">
					<div class="avatar"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/phetisov.png" alt=""></div>
					<h2>ФЕТИСОВ ВЛАДИМИР СТАНИСЛАВОВИЧ</h2>
					<em>ДОКТОР ТЕХНИЧЕСКИХ НАУК</em>
					<blockquote>"В рамках направления "Приборостроение" мы ведем подготовку бакалавров и магистров, в частности, по профилю "Информационно-измерительная техника и технологии"."</blockquote>
				</div>
				<div class="cit colm-lg-4 hidden-xs citations-xs-wrapper fadeIn wow" data-slider-info="citations-xs" data-slider-number="5">
					<div class="avatar"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/mukaev.png" alt=""></div>
					<h2>МУКАЕВ РОБЕР ЮНУСОВИЧ</h2>
					<em>КАНДИДАТ ТЕХНИЧЕСКИХ НАУК</em>
					<blockquote>"Без приборостроения и измерительной техники не может существовать ни одна сфера науки."</blockquote>
				</div>
			</div>
			<div class="citations-lg-wrapper hidden-lg fadeIn" data-slider-info="citations-lg" data-slider-number="2">
				<div class="cit colm-lg-4 hidden-xs citations-xs-wrapper fadeIn wow" data-slider-info="citations-xs" data-slider-number="6">
					<div class="avatar"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/roginskaya.png" alt=""></div>
					<h2>РОГИНСКАЯ ЛЮБОВЬ ЭММАНУИЛОВНА</h2>
					<em>ДОКТОР ТЕХНИЧЕСКИХ НАУК</em>
					<blockquote>"Можно сказать, что наука на нашей кафедре с женским уклоном, потому как позволяет выбрать такую работу, в которой требуется не большая физическая сила, а интеллект и аккуратность."</blockquote>
				</div>
				<div class="cit colm-lg-4 hidden-xs citations-xs-wrapper fadeIn wow" data-slider-info="citations-xs" data-slider-number="7">
					<div class="avatar"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/sattarov.png" alt=""></div>
					<h2>САТТАРОВ РОБЕРТ РАДИЛОВИЧ</h2>
					<em>ДОКТОР ТЕХНИЧЕСКИХ НАУК</em>
					<blockquote>"Электричество -  это основа современной цивилизации. Наши студенты изучают основы теории электричества и электромагнетизма, и это позволяет им на глубоком уровне освоить выбранное направление."</blockquote>
				</div>
				<div class="cit colm-lg-4 hidden-xs citations-xs-wrapper fadeIn wow" data-slider-info="citations-xs" data-slider-number="8">
					<div class="avatar"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/pashali.png" alt=""></div>
					<h2>ПАШАЛИ ДИАНА ЮРЬЕВНА</h2>
					<em>КАНДИДАТ ТЕХНИЧЕСКИХ НАУК</em>
					<blockquote>"Электроэнергетика – это важная и востребованная отрасль для современной промышленности."</blockquote>
				</div>
			</div>
		</div>
		<div class="arrow hidden-lg hidden-sm" data-slider-controls="right" data-slider-controls-info="citations-xs"><img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/arrow-r.png" alt=""></div>
	</div>
</div>
<div class="citations-radio-back hidden-sm">
	<div class="citations-radio hidden-xs wow fadeIn" id="citations-radio-lg">
		<input type="radio" id="citations-lg-0" name="citations-lg" value="0" checked><label for="citations-lg-0" class="circle-label" data-label="citations-lg"></label>
		<input type="radio" id="citations-lg-1" name="citations-lg" value="1"><label for="citations-lg-1" class="circle-label" data-label="citations-lg"></label>
		<input type="radio" id="citations-lg-2" name="citations-lg" value="2"><label for="citations-lg-2" class="circle-label" data-label="citations-lg"></label>
	</div>
	<div class="citations-radio hidden-lg" id="citations-radio-xs">
		<input type="radio" id="citations-xs-0" name="citations-xs" value="0" checked><label for="citations-xs-0" class="circle-label" data-label="citations-xs"></label>
		<input type="radio" id="citations-xs-1" name="citations-xs" value="1"><label for="citations-xs-1" class="circle-label" data-label="citations-xs"></label>
		<input type="radio" id="citations-xs-2" name="citations-xs" value="2"><label for="citations-xs-2" class="circle-label" data-label="citations-xs"></label>
		<input type="radio" id="citations-xs-3" name="citations-xs" value="3"><label for="citations-xs-3" class="circle-label" data-label="citations-xs"></label>
		<input type="radio" id="citations-xs-4" name="citations-xs" value="4"><label for="citations-xs-4" class="circle-label" data-label="citations-xs"></label>
		<input type="radio" id="citations-xs-5" name="citations-xs" value="5"><label for="citations-xs-5" class="circle-label" data-label="citations-xs"></label>
		<input type="radio" id="citations-xs-6" name="citations-xs" value="6"><label for="citations-xs-6" class="circle-label" data-label="citations-xs"></label>
		<input type="radio" id="citations-xs-7" name="citations-xs" value="7"><label for="citations-xs-7" class="circle-label" data-label="citations-xs"></label>
		<input type="radio" id="citations-xs-8" name="citations-xs" value="8"><label for="citations-xs-8" class="circle-label" data-label="citations-xs"></label>
	</div>
</div>
<?php get_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/post-auto-delay.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/news-trigger.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/modal-window.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/menu.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/slider.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/scrolls.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/video.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/media-posts.js"></script>
<script src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/js/jquery.smoothscroll.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>

	'use strict'

	new WOW().init();//FOR ANIMATION ON SCROLL

	document.addEventListener("DOMContentLoaded", postAutoDelay(document.querySelectorAll(".news-wrapper, .citations-lg-wrapper")));

	$('<link rel="stylesheet" href="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/css/all.css"><link rel="stylesheet" href="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/css/main.css">').appendTo($("head"));
</script>
</body>
</html>