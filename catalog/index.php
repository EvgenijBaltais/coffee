<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Каталог - полный ассортимент товаров тут</title>
	<link rel="shortcut icon" href="/favicon.png" type="image/png">
	<link rel="stylesheet" href="../css/main.css">
	<script type="module" src = "../js/script.js"></script>

	<meta name="description" content="Каталог нашего интернет-магазина кофе в зернах. В наличии лучшие сорта от проверенных производителей">
	<meta name="keywords" content="кофе в зернах, арабика, кофе lavazza 1кг, кофе egoiste noir 1кг, кофе для кофемашины в зернах">

	<meta property="og:url" content="https://beans-brothers.ru/catalog/">
	<meta property="og:title" content="Каталог - полный ассортимент товаров тут">
	<meta property="og:description" content="Каталог нашего интернет-магазина кофе в зернах. В наличии лучшие сорта от проверенных производителей">
	<meta property="og:type" content="website">
	<!--<meta property="og:image" content="https://static.tildacdn.com/tild3035-6331-4666-b632-663166353738/badge.jpeg" />-->
	<link rel="canonical" href="https://beans-brothers.ru/catalog/">
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
		<h1 class = "main-h1">Каталог</h1>
		<div class="catalog-info">
			<p class = "simply-text">
				Есть вопросы по ассортименту или доставке? Мы на связи и будем рады проконсультировать Вас.<br>
				Если какой-то товар есть на сайте, то он есть в наличии и доступен к заказу.<br>
				Хотите получить консультацию или уточнить детали? Оставляйте заявку через чат, пишите в мессенджеры или звоните нам!
			</p>
		</div>
		<div class = "section section-assortment" id = "assortment">

		<? require_once('../php/products_from_db.php'); ?>

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
	</main>
	<? require_once('../php/footer.php');?>
</body>
</html>