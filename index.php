<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Интернет-магазин кофе beans-brothers.ru</title>
	<link rel="canonical" href="https://beans-brothers.ru">
	<link rel="shortcut icon" href="/favicon.png" type="image/png">
	<link rel="stylesheet" href="css/main.css">
	<script src = "/node_modules/@glidejs/glide/dist/glide.min.js"></script>
	<script src = "plugins/Inputmask-5.x/dist/inputmask.min.js"></script>
	<script type="module" src = "js/script.js"></script>
	<script src = "../js/carousels.js"></script>

	<meta name="description" content="Мы предлагаем Вашему вниманию лучшие сорта кофе в зернах с доставкой по Москве и Московской области">
	<meta name="keywords" content="купить кофе в зернах, арабика в зернах, кофе lavazza 1кг, кофе egoiste 1кг">

	<meta property="og:url" content="https://beans-brothers.ru">
	<meta property="og:title" content="">
	<meta property="og:description" content="Мы предлагаем Вашему вниманию лучшие сорта кофе в зернах с доставкой по Москве и Московской области">
	<meta property="og:type" content="website">
	<!--<meta property="og:image" content="https://static.tildacdn.com/tild3035-6331-4666-b632-663166353738/badge.jpeg" />-->
	<link rel="canonical" href="https://beans-brothers.ru">
	<meta name="format-detection" content="telephone=no">
	<!--
	<link rel="apple-touch-icon" href="https://static.tildacdn.com/tild3635-3933-4936-b438-643737333430/152.png">
	<link rel="apple-touch-icon" sizes="76x76" href="https://static.tildacdn.com/tild3635-3933-4936-b438-643737333430/152.png">
	<link rel="apple-touch-icon" sizes="152x152" href="https://static.tildacdn.com/tild3635-3933-4936-b438-643737333430/152.png">
	<link rel="apple-touch-startup-image" href="https://static.tildacdn.com/tild3635-3933-4936-b438-643737333430/152.png">
	<meta name="msapplication-TileColor" content="#000000"><meta name="msapplication-TileImage" content="https://static.tildacdn.com/tild3535-3234-4539-b665-646532313130/270.png">
	-->
</head>
<body>

<? require_once('php/nav.php');?>

<main class = "wrapper">
	<section class = "section section-top">
		<div class = "top-1">
			<h1 class = "main-h1 padding-bottom-2">Любите кофе?</h1>
			<h2 class = "main-h2 padding-bottom-2">Добро пожаловать в beans-brothers.ru!</h2>
			<h3 class = "main-h3 padding-bottom-3">Предлагаем купить кофе в зернах
			от лучших производителей в нашем магазине.</h3>
			<h4 class = "main-h4">У нас только лучшие бренды и индивидуальный подход к каждому клиенту!</h4>
			<div class="red-btn btn-30px top-button">
				<a href = "/catalog/" class = "top-button-ins"></a>
				<span class="red-btn-span">Каталог</span>
				<a class="red-btn-ins"></a>
			</div>
		</div>
		<div class = "top-2">
			<img src="/images/kofe.jpg" alt="Пакет с кофейными зернами" title = "" class = "top-pic">
		</div>
		<a class = "btn btn-30px more-info scroll-to" data-scroll-to = "welcome">Узнать подробности</a>
	</section>
	<section class = "section section-welcome" id = "welcome">
		<h2 class = "h2-title">
			Если Вы ценитель качественного и ароматного кофе - наш магазин <b>beans-brothers.ru</b> к Вашим услугам!
		</h2>
		<p class = "simply-text">
			Начать день с чашки ароматного свежемолотого кофе - что может быть лучше? Этот приятный ритуал магическим образом объединяет
			миллионы людей во всех уголках мира.
		</p>
		<p class = "simply-text">Каждый находит в нем что-то свое: кто-то предпочитает варить кофе в турке или френчпрессе, не спеша обдумывая планы на день. 
			Многие уже привыкли брать кофе с собой и пить на ходу. А для кого-то традицией стал завтрак с кофе в кругу семьи и капельная кофеварка как его незаменимый атрибут. 
		</p>
		<p class = "simply-text">
			Кофе - это то что объединяет людей, поднимает настроение и доставляет удовольствие. 
			Американо, капуччино, мокко, латте, эспрессо - каждый выбирает напиток по вкусу, но любой из них начинается с качественных кофейных зерен.
			Именно кофе в зернах является основным направлением нашего магазина.
		</p>
		<p class = "simply-text">
			На рынке много производителей и марок, и мы предлагаем своим клиентам только лучшие из них.
			Ознакомиться с ассортиментом можно в нашем <a class = "simply-link" href = "/catalog">каталоге</a>:
		</p>
	</section>
	<div class = "section section-assortment" id = "assortment">
		<div class="assortment-group-w">
			<div class="assortment-group">
				<? require_once('php/products_from_db.php'); ?>
				<? foreach ($products as $key => $item): ?>
					<div class="assortment-item">
						<div class="assortment-item-w">
							<? if ($item['sale'] != ''): ?>
								<div class = "sale-triangle">
									<a class = "sale-triangle-a">-<?=$item['sale'];?>%</a>
								</div>
							<? endif; ?>
							<a class = "one-click-order">Быстрый заказ</a>
							<div class = "item-top">
								<img src="/images/products/<?=$key;?>/1.jpg" title = "" alt="" class = "product-pic">
							</div>
							<div class = "item-bottom">
								<p class = "item-title"><?=$item['name'];?></p>
								<div class = "item-info-w">
									<div class = "item-info item-info-1">
										<span class = "item-info__span"><?=$item['weight'];?> г</span>
									</div>
									<div class = "item-info item-info-2">
										<span class = "item-info__full"><?=$item['start_price'];?> р</span>
										<span class = "item-info__span"><?=$item['actual_price'];?> р</span>
									</div>
								</div>
								<div class = "item-more-less">
							<span class = "item-more-span">Количество:</span>
							<div class = "item-plus-minus">
								<div class = "item-amount-minus"></div>
								<div class = "item-amount-val-block">
									<input type="text" name = "item-amount-value" class = "item-amount-value" readonly = "readonly" value = "1">
								</div>
								<div class = "item-amount-plus"></div>
							</div>
						</div>
								<div class = "item-order-info">
									<a class = "small-btn btn-10px item-order-btn" data-id="<?=$key;?>">Заказать</a>
									<a href = "/catalog/<?=$key;?>.php" class = "small-btn btn-10px item-order-btn">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
				<? endforeach; ?>
			</div>
		</div>
	</div>
	<section class = "section plus-minus">
		<div class = "whywe"></div>
		<h2 class = "h2-title h2-title-whywe">Почему стоит заказать именно у нас? Наши преимущества:</h2>
		<div class="advantages-block">
			<div class="advantage-item">
				<p class = "advantage-title">Индивидуальный подход к каждому клиенту</p>
				<p class = "advantage-text">
					Наш магазин работает для Вас.
					Мы с удовольствием ответим на любой Ваш вопрос и учтем все Ваши пожелания. 
					Нашим клиентам мы предоставляем скидки и подарки, проводим акции.</p>
			</div>
			<div class="advantage-item">
				<p class = "advantage-title">Любим кофе и знаем что продаем</p>
				<p class = "advantage-text">
					Мы тщательно анализируем отзывы на всевозможных торговых площадках и тестируем каждый продукт, 
					поэтому хорошо знаем о каждом товаре в нашем ассортименте и будем рады рассказать о нем Вам.
					Кофе - очень индивидуальный продукт. У каждого свой вкус, а о вкусах, как известно, не спорят.
					Но мы постараемся подобрать для Вас наиболее подходящий вариант.
				</p>
			</div>
			<div class="advantage-item">
				<p class = "advantage-title">Только оригинальный товар.</p>
				<p class = "advantage-text">У нас Вы не столкнетесь с подделками. Соблазнившись низкой ценой, есть риск столкнуться с контрафактной продукцией.
					Особенно это актуально в сегодняшнее время санкций и паралелльного импорта. В результате - потраченные деньги и разочарование в покупке.
					Это все не про нас. Мы предлагаем товар только от надежных поставщиков и уверены в качестве.</p>
			</div>
			<div class="advantage-item">
				<p class = "advantage-title">Гарантия качества, обмена и возврата денег</p>
				<p class = "advantage-text">
					Перед тем как попасть на наш стол, кофейное зерно проходит очень долгий и сложный путь от плантации до прилавка.
					Из-за этого продукция даже самого надежного производителя иногда может отличаться от привычной.
					Распространенные проблемы - подгоревшие или недожаренные, сырые или пересушенные зерна,
					внезапное изменение привычного состава смеси, нарушение оболочки при транспортировке. Все это может испортить впечатление от напитка.
					<br><br>
					Но наши покупатели надежно застрахованы от таких проблем - ведь мы берем эти риски на себя.
					Если Вас смутит какой-то из наших товаров - пишите и присылайте фото. Мы без проблем вернем деньги или обменяем его на другой. 
					Наша поддержка по всем вопросам всегда к Вашим услугам.
				</p>
			</div>
			<div class="advantage-item">
				<p class = "advantage-title">Гибкие условия</p>
				<p class = "advantage-text">Рассмотрим все пожелания и предложения. Учтем все нарекания. Проанализируем все Ваши отзывы чтобы стать лучше.</p>
			</div>
			<div class="advantage-item">
				<p class = "advantage-title">Бережное обращение с персональными данными</p>
				<p class = "advantage-text">
					Надежно храним персональные данные и никогда не злоупотребляем доверием.
					Никаких нежелательных спам-рассылок, смс и звонков.
					Никаких утекших в сеть баз заказов с адресами.
				</p>
			</div>
			<div class="advantage-item">
				<p class = "advantage-title">Ваш товар будет доставлен в целостности и сохранности.</p>
				<p class = "advantage-text">
					Все заказы надежно упакованы и не потеряют вид при доставке.
					Если какой-то товар в дальнейшем будет использован как подарок, то мы уделим упаковке еще больше внимания.
				</p>
			</div>
			<div class="advantage-item">
				<p class = "advantage-title">Ассортимент</p>
				<p class = "advantage-text">
					Мы продаем только зарекомендовавшие себя сорта и виды, проверенные и одобренные кофеманами.
					У нас пока небольшой ассортимент, но со временем он конечно же будет расширяться. 
					Мы будем искать и тестировать интересные новинки и радовать Вас новыми позициями в <a href = "/catalog/" class = "simply-link">нашем каталоге</a>.
				</p>
			</div>
		</div>
	</section>
	<? require_once('php/catalog-gifts.php');?>
	<section class = "section section-any-wishes">
		<h2 class = "h2-title">Есть пожелания?</h2>
		<p class = "simply-text">
			Форма для обратной связи и предложений. 
			Мы читаем и учитываем все сообщения - критика ценна для нас так же как и одобрение.
			Отзывы нигде не публикуются без согласия автора. Поля Имя и Email не обязательны к заполнению.
		</p>
		<div class = "reviews-form-block">
			<form action="/" name = "reviews-form" class = "reviews-form">
				<div class = "reviews-form-name">
					<input type="text" name = "name" class = "reviews-form-name__input" placeholder = "Ваше имя">
				</div>
				<div class = "reviews-form-email">
					<input type="text" name = "email" class = "reviews-form-name__input" placeholder = "Ваш email">
				</div>
				<div class = "reviews-form-text">
					<textarea name = "textarea" cols="30" rows="10" class = "reviews-form-name__textarea required-field" placeholder = "Текст отзыва"></textarea>
				</div>
				<div class="agree-block">
					<label for="checkbox" class="checkbox-label">
						<input type="checkbox" id="checkbox" class="checkbox" checked>
						<span class="checkbox-view">
						<svg class="checkbox-icon" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 511.985 511.985">
							<path fill="#000" d="M500.088 83.681c-15.841-15.862-41.564-15.852-57.426 0L184.205 342.148 69.332 227.276c-15.862-15.862-41.574-15.862-57.436 0-15.862 15.862-15.862 41.574 0 57.436l143.585 143.585c7.926 7.926 18.319 11.899 28.713 11.899 10.394 0 20.797-3.963 28.723-11.899l287.171-287.181c15.862-15.851 15.862-41.574 0-57.435z"/>
						</svg>
						</span>
						<span class = "agree-text">Согласен на обработку персональных данных</span>
					</label>
				</div>
				<button type = "button" class = "reviews-form-send btn-10px">Отправить!</button>
			</form>
		</div>
	</section>
</main>
	<? require_once('php/footer.php');?>
</body>
</html>