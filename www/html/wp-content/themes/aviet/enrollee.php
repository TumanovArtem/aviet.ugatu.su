<?php
/*
Template Name: Enrollee

*/
?>

<?php get_header("second");?>
<a data-name="why-we-anchor"></a>
<div class="info-block-back why-we" data-slider="why-we">
	<div class="info-block container">
		<div class="col-lg-7 col-sm-8 col-xs-12 about">
			<h1>ПОЧЕМУ ИМЕННО МЫ?</h1>
			<div class="about-wrapper why-we-wrapper wow" data-slider-info="why-we" data-slider-number="0">
				<p>Поступив на АВИЭТ, ты можешь стать частью большой семьи прибористов! Сегодня на факультете обучается более 1,5 тыс. студентов. Учебный процесс обеспечивают более 135 преподавателей, в том числе 21 доктор наук, 64 кандидата наук.</p>
				<p>Все направления подготовки АВИЭТ относятся к приоритетным направлениям инновационного развития экономики развития РФ, что гарантирует все предусмотренные льготы, в том числе повышенную стипендию. Также устанавливаются дополнительные стипендии Президента РФ, Президента РБ, Правительства РФ и Правительства РБ, именные стипендии.</p>
				<p>АВИЭТ – это часть огромного университетского кампуса! У нас современные учебные корпуса и лаборатории, крупнейшая в Республике Башкортостан научно-техническая библиотека, суперкомпьютер, компьютеры с доступом в интернет, зоны WiFi, комфортабельные общежития, оснащенные доступом в интернет, санаторий-профилакторий, базы отдыха, университетские столовые и кафе, студенческий клуб с десятками творческих коллективов, лыжная база, спортивные залы и многое другое.</p>
				<p>Студенты, обучающиеся на всех направлениях подготовки АВИЭТ, принимают активное участие в научно-исследовательской деятельности. Лучшие студенты участвуют в Международных и Всероссийских конференциях, конкурсах, олимпиадах, ежегодно становятся их победителями.</p>
			</div>
			<div class="about-wrapper why-we-wrapper wow" data-slider-info="why-we" data-slider-number="1">
				<p>Студенты имеют возможность дополнительно получить второе высшее образование. Студентам предоставляется отсрочка от призыва в армию. Только в УГАТУ юноши и девушки имеют возможность обучаться на военной кафедре, стать офицером запаса и вместе с гражданской получить военно-учетную специальность.</p>
				<p>Выпускники, получившие диплом бакалавра или специалиста зачисляются на магистерскую подготовку на конкурсной основе. Студенты, получившие диплом специалиста или магистра продолжают свою научную деятельность в аспирантуре. Имеется возможность зарубежных стажировок.</p>
				<p>Диплом, полученный на факультете авиационного приборостроения уже давно стал знаком качества и пропуском в успешное будущее. Выпускники факультета работают в ведущих зарубежных и отечественных предприятиях: ОАО «Газпром», ПСР Росатом, Роскосмос, ОАО «НК «Роснефть», ОАО «АК «Транснефть», ОАО «Башкирэнерго», ГУП «Медтехника», ОАО УМПО, ОАО «Ростелеком», ОАО «Компания Сухой» и др.</p>
				<p>Факультет гордиться тем, что огромное число его выпускников занимают руководящие должности а УГАТУ и на ведущих предприятиях РФ и РБ, являются заслуженными деятелями науки и образования РФ и РБ. Это говорит о высочайшем качестве подготовки наших специалистов.</p>
			</div>
			<div class="citations-radio" id="why-we">
				<input type="radio" name="why-we"id="why-we-0" value="0" checked><label for="why-we-0" class="circle-label" data-label="why-we"></label>
				<input type="radio" name="why-we"id="why-we-1" value="1"><label for="why-we-1" class="circle-label" data-label="why-we"></label>
			</div>
		</div>
		<div class="list col-lg-5 col-sm-4 hidden-xs">
		</div>
	</div>
</div>
<a data-name="news-anchor"></a>
<div class="news-back">
	<div class="news container">
		<h1>НОВОСТИ</h1>
		<div class="news-wrapper container" data-cat="3">
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
<a data-name="direction-anchor"></a>
<div class="direction-back">
	<div class="direction container">
		<h1>НАПРАВЛЕНИЯ <span class="hidden-sm hidden-xs">И СПЕЦИАЛЬНОСТИ</span> ПОДГОТОВКИ</h1>
		<div class="dir-first">
			<div class="col-lg-7 col-sm-10 hidden-xs">НАПРАВЛЕНИЯ ПОДГОТОВКИ</div>
			<div class="col-lg-1 hidden-sm hidden-xs">КАФЕДРЫ</div>
			<div class="col-lg-4 col-sm-2 hidden-xs">ФОРМА ОБУЧЕНИЯ</div>
		</div>
		<div class="dir-trigger" data-accordion-trigger="0">
			<div class="col-lg-7 col-sm-12 col-xs-12">
				<h2>БАКАЛАВРИАТ</h2>
				<div>
					<img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/white-arrow-down.png" alt="" class="visible">
					<img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/white-arrow-up.png" alt="">
				</div>
			</div>
			<div class="col-lg-5 hidden-sm hidden-xs">
				<h2>СРОК ОБУЧЕНИЯ 4 ГОДА</h2>
			</div>
		</div>
		<div class="dir-wrap container" data-accordion="0">
			<div class="dir-info">
				<div class="col-lg-7 col-sm-10 col-xs-12">
					<h2>Инфокоммуникационные технологии и системы связи</h2>
					<span class="dir-date">11.03.02</span>
					<a class="more" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=67">УЗНАТЬ БОЛЬШЕ</a>
				</div>
				<div class="col-lg-1 hidden-sm hidden-xs">
					<h2>ТС</h2>
				</div>
				<div class="col-lg-4 col-sm-2 hidden-xs">
					<h2>Очная</h2>
				</div>
			</div>
			<div class="dir-info">
				<div class="col-lg-7 col-sm-10 col-xs-12">
					<h2>Электроника и наноэлектроника</h2>
					<span class="dir-date">11.03.04</span>
					<a  class="more" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=69">УЗНАТЬ БОЛЬШЕ</a>
				</div>
				<div class="col-lg-1 hidden-sm hidden-xs">
					<h2>ЭиБТ</h2>
				</div>
				<div class="col-lg-4 col-sm-2 hidden-xs">
					<h2>Очная,<br>Заочная сокращенная</h2>
				</div>
			</div>
			<div class="dir-info">
				<div class="col-lg-7 col-sm-10 col-xs-12">
					<h2>Приборостроение</h2>
					<span class="dir-date">12.03.01</span>
					<a  class="more" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=71">УЗНАТЬ БОЛЬШЕ</a>
				</div>
				<div class="col-lg-1 hidden-sm hidden-xs">
					<h2>ИИТ</h2>
				</div>
				<div class="col-lg-4 col-sm-2 hidden-xs">
					<h2>Очная,<br>Заочная сокращенная</h2>
				</div>
			</div>
			<div class="dir-info">
				<div class="col-lg-7 col-sm-10 col-xs-12">
					<h2>Биотехнические системы и технологии</h2>
					<span class="dir-date">12.03.04</span>
					<a  class="more" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=73">УЗНАТЬ БОЛЬШЕ</a>
				</div>
				<div class="col-lg-1 hidden-sm hidden-xs">
					<h2>ЭиБТ</h2>
				</div>
				<div class="col-lg-4 col-sm-2 hidden-xs">
					<h2>Очная</h2>
				</div>
			</div>
			<div class="dir-info">
				<div class="col-lg-7 col-sm-10 col-xs-12">
					<h2>Электроэнергетика и электротехника</h2>
					<span class="dir-date">13.03.02</span>
					<a  class="more" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=75">УЗНАТЬ БОЛЬШЕ</a>
				</div>
				<div class="col-lg-1 hidden-sm hidden-xs">
					<h2>ЭМ</h2>
				</div>
				<div class="col-lg-4 col-sm-2 hidden-xs">
					<h2>Очная,<br>Заочная</h2>
				</div>
			</div>
		</div>
		<div class="dir-trigger" data-accordion-trigger="1">
			<div class="col-lg-7 col-sm-12 col-xs-12">
				<h2>СПЕЦИАЛИТЕТ</h2>
				<div>
					<img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/white-arrow-down.png" alt="" class="visible">
					<img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/white-arrow-up.png" alt="">
				</div>
			</div>
			<div class="col-lg-5 hidden-sm hidden-xs">
				<h2>СРОК ОБУЧЕНИЯ 5 ЛЕТ</h2>
			</div>
		</div>
		<div class="dir-wrap container" data-accordion="1">
			<div class="dir-info">
				<div class="col-lg-7 col-sm-10 col-xs-12">
					<h2>Инфокоммуникационные технологии и системы специальной связи</h2>
					<span class="dir-date">11.05.04</span>
					<a  class="more" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=391">УЗНАТЬ БОЛЬШЕ</a>
				</div>
				<div class="col-lg-1 hidden-sm hidden-xs">
					<h2>ТС</h2>
				</div>
				<div class="col-lg-4 col-sm-2 hidden-xs">
					<h2>Очная</h2>
				</div>
			</div>
			<div class="dir-info">
				<div class="col-lg-7 col-sm-10 col-xs-12">
					<h2>Специльные электромеханические системы</h2>
					<span class="dir-date">13.05.02</span>
					<a  class="more" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=394">УЗНАТЬ БОЛЬШЕ</a>
				</div>
				<div class="col-lg-1 hidden-sm hidden-xs">
					<h2>ЭМ</h2>
				</div>
				<div class="col-lg-4 col-sm-2 hidden-xs">
					<h2>Очная</h2>
				</div>
			</div>
			<div class="dir-info">
				<div class="col-lg-7 col-sm-10 col-xs-12">
					<h2>Системы управления летательными аппаратами</h2>
					<span class="dir-date">24.05.06</span>
					<a  class="more" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=398">УЗНАТЬ БОЛЬШЕ</a>
				</div>
				<div class="col-lg-1 hidden-sm hidden-xs">
					<h2>ИИТ</h2>
				</div>
				<div class="col-lg-4 col-sm-2 hidden-xs">
					<h2>Очная</h2>
				</div>
			</div>
		</div>
		<div class="dir-trigger" data-accordion-trigger="2">
			<div class="col-lg-7 col-sm-12 col-xs-12">
				<h2>МАГИСТРАТУРА</h2>
				<div>
					<img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/white-arrow-down.png" alt="" class="visible">
					<img src="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/img/white-arrow-up.png" alt="">
				</div>
			</div>
			<div class="col-lg-5 hidden-sm hidden-xs">
				<h2>СРОК ОБУЧЕНИЯ 2 ГОДА</h2>
			</div>
		</div>
		<div class="dir-wrap container" data-accordion="2">
			<div class="dir-info">
				<div class="col-lg-7 col-sm-10 col-xs-12">
					<h2>Инфокоммуникационные технологии и системы связи</h2>
					<span class="dir-date">11.04.02</span>
					<a  class="more" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=67">УЗНАТЬ БОЛЬШЕ</a>
				</div>
				<div class="col-lg-1 hidden-sm hidden-xs">
					<h2>ТС</h2>
				</div>
				<div class="col-lg-4 col-sm-2 hidden-xs">
					<h2>Очная</h2>
				</div>
			</div>
			<div class="dir-info">
				<div class="col-lg-7 col-sm-10 col-xs-12">
					<h2>Электроника и наноэлектроника</h2>
					<span class="dir-date">11.04.04</span>
					<a  class="more" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=69">УЗНАТЬ БОЛЬШЕ</a>
				</div>
				<div class="col-lg-1 hidden-sm hidden-xs">
					<h2>ЭиБТ</h2>
				</div>
				<div class="col-lg-4 col-sm-2 hidden-xs">
					<h2>Очная</h2>
				</div>
			</div>
			<div class="dir-info">
				<div class="col-lg-7 col-sm-10 col-xs-12">
					<h2>Приборостроение</h2>
					<span class="dir-date">12.04.01</span>
					<a  class="more" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=71">УЗНАТЬ БОЛЬШЕ</a>
				</div>
				<div class="col-lg-1 hidden-sm hidden-xs">
					<h2>ИИТ</h2>
				</div>
				<div class="col-lg-4 col-sm-2 hidden-xs">
					<h2>Очная</h2>
				</div>
			</div>
			<div class="dir-info">
				<div class="col-lg-7 col-sm-10 col-xs-12">
					<h2>Биотехнические системы и технологии</h2>
					<span class="dir-date">12.04.04</span>
					<a  class="more" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=73">УЗНАТЬ БОЛЬШЕ</a>
				</div>
				<div class="col-lg-1 hidden-sm hidden-xs">
					<h2>ЭиБТ</h2>
				</div>
				<div class="col-lg-4 col-sm-2 hidden-xs">
					<h2>Очная</h2>
				</div>
			</div>
			<div class="dir-info">
				<div class="col-lg-7 col-sm-10 col-xs-12">
					<h2>Электроэнергетика и электротехника</h2>
					<span class="dir-date">13.04.02</span>
					<a  class="more" data-modal-button="https://aviet-ugatu.herokuapp.com/?p=75">УЗНАТЬ БОЛЬШЕ</a>
				</div>
				<div class="col-lg-1 hidden-sm hidden-xs">
					<h2>ЭМ</h2>
				</div>
				<div class="col-lg-4 col-sm-2 hidden-xs">
					<h2>Очная</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<a data-name="other-city-anchor"></a>
<div class="info-block-back other-city" data-slider="other-city">
	<div class="info-block container">
		<div class="col-lg-7 col-sm-8 col-xs-12 about">
			<h1>СВЕДЕНИЯ ОБ ОБЩЕЖИТИЯХ</h1>
			<div class="about-wrapper other-city-wrapper wow" data-slider-info="other-city" data-slider-number="0">
				<p>Студгородок Уфимского государственного авиационного технического университета состоит из девяти общежитий, пять из которых коридорного типа и четыре – блочного. Двухместных комнат – 923, трехместных – 387, четырехместных – 39 комнат.</p>
				<p>Каждое общежитие закреплено за своим факультетом, пятое общежитие – для иностранных студентов, девятое – для семейных студентов и аспирантов. В каждом общежитии имеются спортивные комнаты, кухни самообслуживания, помещения для занятий, душевые, во всех общежитиях имеются помещения для организации досуговых мероприятий. Оснащение общежитий отвечает санитарно-гигиеническим нормам. Они укомплектованы кадрами согласно штатному расписанию.</p>
				<p>В студгородке УГАТУ располагаются медпункт, парикмахерские, санаторий – профилакторий, обувная мастерская. Также на территории студгородка находятся два продовольственных магазина, химчистка, зал тяжелой атлетики, стрелковый тир, спортивные площадки, зал аэробики, секция лыжного спорта, дельтапланерный клуб, радио клуб, турклуб «Икар».</p>
				<p>В каждом общежитии работает локальная вычислительная сеть с открытым доступом к локальной сети УГАТУ и услугам сети Интернет, в настоящее время подключено более 2506 личных компьютеров студентов и аспирантов.</p>
			</div>	
			<div class="about-wrapper other-city-wrapper wow" data-slider-info="other-city" data-slider-number="1">
				<p>В целях обеспечения сохранности материальных ценностей с каждым студентом заключается договор найма специализированного жилого помещения. Ежеквартально проводится аттестация студентов проживающих в общежитии, на основании которой и принимается решение о продлении договора найма. В состав аттестационной комиссии входят представители деканатов, администрации студгородка, представители профсоюзной организации и студсовета.</p>
				<p>Для повышения контроля над общежитиями и безопасности студентов, в каждом корпусе установлены видеокамеры. С их помощью ведется круглосуточное наблюдение с вахт за главным входом и прилегающей к общежитию территорией. Также на вахте имеется кнопка вызова вневедомственной охраны МВД.</p>
				<p>В вечернее и ночное ведется контроль сотрудниками Группы режима, в обязанности которых входит поддержание дисциплины и порядка в общежитиях. На вахте организовано дежурство студентов.</p>
			</div>
			<div class="citations-radio" id="other-city">
				<input type="radio" name="other-city" id="other-city-0" value="0" checked><label for="other-city-0" class="circle-label" data-label="other-city"></label>
				<input type="radio" name="other-city" id="other-city-1" value="1"><label for="other-city-1" class="circle-label" data-label="other-city"></label>
			</div>
		</div>
		<div class="list col-lg-5 col-sm-4 hidden-xs" id="obshaga"></div>
	</div>
</div>
<div class="info-back">
	<div class="info container">
		<h2>Общежитие факультета АВИЭТ(№8)  находится по адресу ул. Мингажева 160/2 <a href="https://maps.yandex.ru/-/CVWxFF6Y" target="_blank"><span class="hidden-sm hidden-xs">ПОКАЗАТЬ&nbsp;</span>НА&nbsp;КАРТЕ</a></h2>
	</div>
</div>
<a data-name="documents-anchor"></a>
<div class="docs-back">
	<div class="docs container">
		<h2>ДОКУМЕНТЫ</h2>
		<div class="doc">
			<p>Положение о студенческом общежитии государственного образовательного учреждения высшего профессионального образования "Уфимский государственный авиационный технический университет"</p>
			<a href="https://ugatu.su/assets/files/documents/zakon/polozhenie%20%281%29.pdf" target="_blank">СКАЧАТЬ</a>
		</div>
		<div class="doc">
			<p>Договор найма жилого помещения в общежитии между Уфимским государственным авиационным техническим университетом и студентом</p>
			<a href="https://ugatu.su/assets/files/documents/zakon/dogovor-najma-zhilogo-pomeshheniya.docx" target="_blank">СКАЧАТЬ</a>
		</div>
		<div class="doc">
			<p>Заявление для студентов, поступивших на 1 курс обучения с полным возмещением затрат</p>
			<a href="https://ugatu.su/assets/files/documents/zakon/zayavlenie-dlya-obshhezhitiya-%28kommercziya%29.doc" target="_blank">СКАЧАТЬ</a>
		</div>
		<div class="doc">
			<p>Документы, регламентирующие оплату проживания</p>
			<a href="https://ugatu.su/stoimost-prozhivaniya-v-obshhezhitiyah.html" target="_blank">СКАЧАТЬ</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<script>
	jQuery('<link rel="stylesheet" href="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/css/all.min.css"><link rel="stylesheet" href="https://aviet-ugatu.herokuapp.com/wp-content/themes/aviet/css/enrollee.min.css">').appendTo(jQuery("head"));
	var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
</script>
</body>
</html>