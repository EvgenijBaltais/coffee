<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>О нас и нашем подходе</title>
	<link rel="shortcut icon" href="/favicon.png" type="image/png">
	<link rel="stylesheet" href="../css/main.css">
	<script src = "/node_modules/@glidejs/glide/dist/glide.min.js"></script>
	<script type="module" src = "../js/script.js"></script>
	<script src = "../js/carousels.js"></script>

	<meta name="description" content="Несколько слов о нашем интернет-магазине кофе beans-brothers.ru. Информация может быть интересна нашим клиентам">
	<meta name="keywords" content="интернет-магазин, beans-brothers.ru, информация о магазине, доставка">

	<meta property="og:url" content="https://beans-brothers.ru/about/">
	<meta property="og:title" content="О нас и нашем подходе">
	<meta property="og:description" content="Несколько слов о нашем интернет-магазине кофе beans-brothers.ru. Информация может быть интересна нашим клиентам">
	<meta property="og:type" content="website">
	<!--<meta property="og:image" content="https://static.tildacdn.com/tild3035-6331-4666-b632-663166353738/badge.jpeg" />-->
	<link rel="canonical" href="https://beans-brothers.ru/about/">
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
	<? require_once('../php/nav.php');?>
	<main class = "wrapper non-main-wrapper">
		<h1 class = "main-h1">О нас и нашем подходе</h1>
		<div class = "contacts-section">
			<p class = "simply-text">
				<a href= "/" class = "simply-link">Beans-brothers.ru</a> - интернет-магазин кофе в зернах, созданный любителями для любителей.
			</p>
			<p class = "simply-text simply-text-padding bold-text-600">
				Пару слов о правилах и политике нашего магазина. У нас:
			</p>
			<ul class = "our-politics">
				<li class = "our-politics-item simply-text">только оригинальный товар;</li>
				<li class = "our-politics-item simply-text">индивидуальный подход к каждому клиенту;</li>
				<li class = "our-politics-item simply-text">гибкие условия доставки;</li>
				<li class = "our-politics-item simply-text">возврат денег, если товар оказался ненадлежащего качества (без чеков, достаточно просто фото);</li>
				<li class = "our-politics-item simply-text">в спорных ситуациях принимаем сторону клиента;</li>
				<li class = "our-politics-item simply-text">бережно храним персональные данные и не мучаем клиентов маркетинговым спамом;</li>
				<li class = "our-politics-item simply-text">программа лояльности для постоянных клиентов, а также акции и скидки;</li>
			</ul>
			<p class = "simply-text bold-text-600">
				Заказывайте Ваш любимый кофе и оставайтесь с нами!
			</p>
			<p class="simply-text">
				Если Вы хотите сделать заказ - вот <a href = "/catalog/" class = "simply-link">наш каталог</a>
			</p>
			<p class="simply-text">
				Вопросы, пожелания или предложения? → <a href = "mail@beans-brothers.ru" class = "simply-link">mail@beans-brothers.ru</a>
			</p>
		</div>
		<? require_once('../php/catalog-carousel.php');?>
	</main>
	<? require_once('../php/footer.php');?>
</body>
</html>