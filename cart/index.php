<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Корзина товаров</title>
	<link rel="shortcut icon" href="/favicon.png" type="image/png">
	<link rel="stylesheet" href="../css/main.css">
	<script src = "../plugins/Inputmask-5.x/dist/inputmask.min.js"></script>
	<script type="module" src = "../js/script.js"></script>

	<meta name="description" content=""> 
	<meta property="og:url" content="https://beans-brothers.ru">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
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
<? require_once('../php/nav.php');?>
	<main class = "wrapper non-main-wrapper">
		<h1 class = "main-h1">Корзина</h1>
		<div class = "cart-section">
			<div class="cart-wrapper">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class = "cart-preloader">
					<defs>
					<linearGradient id="ldio-4gd69h4y97v-gradient" x1="0%" x2="0%" y1="0%" y2="100%">
						<stop offset="10%" stop-color="black" stop-opacity="0"></stop>
						<stop offset="100%" stop-color="white" stop-opacity="1"></stop>
					</linearGradient>
					<mask id="ldio-4gd69h4y97v-mask" maskUnits="userSpaceOnUse" x="0" y="0" width="100" height="100">
						<rect x="22" y="8" width="56" height="54" fill="url(#ldio-4gd69h4y97v-gradient)"></rect>
					</mask>
					<path id="ldio-4gd69h4y97v-steam" d="M0-4c-2.1,2.6-2.1,6.4,0,9l0,0c2.1,2.6,2.1,6.4,0,9l0,0c-2.1,2.6-2.1,6.4,0,9l0,0c2.1,2.6,2.1,6.4,0,9l0,0 c-2.1,2.6-2.1,6.4,0,9l0,0c2.1,2.6,2.1,6.4,0,9c-2.1,2.6-2.1,6.4,0,9l0,0c2.1,2.6,2.1,6.4,0,9l0,0c-2.1,2.6-2.1,6.4,0,9l0,0 c2.1,2.6,2.1,6.4,0,9l0,0c-2.1,2.6-2.1,6.4,0,9l0,0c2.1,2.6,2.1,6.4,0,9c-2.1,2.6-2.1,6.4,0,9l0,0c2.1,2.6,2.1,6.4,0,9l0,0 c-2.1,2.6-2.1,6.4,0,9h0c2.1,2.6,2.1,6.4,0,9h0c-2.1,2.6-2.1,6.4,0,9h0c2.1,2.6,2.1,6.4,0,9" stroke-width="6" stroke-linecap="round" fill="#f00" stroke="#f8b26a"></path>
					</defs>
					<g mask="url(#ldio-4gd69h4y97v-mask)">
					<use x="29" y="18" xlink:href="#ldio-4gd69h4y97v-steam">
						<animate attributeName="y" values="4;-14" keyTimes="0;1" dur="1s" repeatCount="indefinite" begin="-0.5s"></animate>
					</use>
					<use x="47" y="18" xlink:href="#ldio-4gd69h4y97v-steam">
						<animate attributeName="y" values="0;-18" keyTimes="0;1" dur="1s" repeatCount="indefinite" begin="-0.25s"></animate>
					</use>
					<use x="64" y="18" xlink:href="#ldio-4gd69h4y97v-steam">
						<animate attributeName="y" values="-4;-22" keyTimes="0;1" dur="1s" repeatCount="indefinite" begin="-0.3333333333333333s"></animate>
					</use>
					</g>
					<path d="M81.2,52.5l-5.2,0V49c0-1.6-1.3-3-3-3H20c-1.6,0-3,1.3-3,3v11.6C17,71.3,25.7,80,36.5,80h20.1 c7.1,0,13.3-3.8,16.7-9.5h8.3c5.2,0,9.3-4.4,9-9.6C90.2,56.1,86,52.5,81.2,52.5z M81.5,67.5h-6.8c0.8-2.2,1.3-4.5,1.3-7v-5h5.5 c3.3,0,6,2.7,6,6S84.8,67.5,81.5,67.5z" fill="#f8b26a"></path>
					<path d="M78.8,88H19.2c-1.1,0-2-0.9-2-2s0.9-2,2-2h59.5c1.1,0,2,0.9,2,2S79.9,88,78.8,88z" fill="#d1d1d1"></path>
				</svg>
			</div>
		</div>
	</main>
	<? require_once('../php/footer.php');?>
</body>
</html>