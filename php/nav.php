<header>
	<div class = "top-contacts">
		<div class="top-contacts-ins">
			<a title = "Подробнее о доставке" class = "top-delivery-info">Доставка по Москве c 9:00 до 22:00</a>
			<div class = "top-contact-links">
				<span class = "top-contact-text">По любым вопросам →</span>
				<span class="top-contact-link top-contact-link-telegramm" title = "Написать нам в Telegram"></span>
				<span class="top-contact-link top-contact-link-whatsapp" title = "Написать нам в Whatsapp"></span>
				<span class="top-contact-link top-contact-link-chat" title = "Оставить заявку в чате"></span>
			</div>
			<a href="tel:+70000000000" class = "top-phone">+7 (000) 000-00-00</a>
		</div>
	</div>
	<nav class = "nav">
		<div class = "full-content-width">
			<a href = "/" class = "logo-main-link">
				<img src="/images/logo.png" title = "" alt="Coffee planet" class = "logo-main">
			</a>
			<ul class = "nav-list">
				<li class = "nav-list-item">
					<a href="/" class = "nav-list-link<? if ($_SERVER['REQUEST_URI'] == '/'):?><?=' active'?><?endif?>">Главная</a>
				</li>
				<li class = "nav-list-item">
					<a href="/#whywe" class = "nav-list-link nav-list-link-scroll">Почему мы?</a>
				</li>
				<li class = "nav-list-item">
					<a href="/catalog/" class = "nav-list-link<? if ($_SERVER['REQUEST_URI'] == '/catalog/'):?><?=' active'?><?endif?>">Каталог</a>
				</li>
				<li class = "nav-list-item">
					<a href="/about/" class = "nav-list-link<? if ($_SERVER['REQUEST_URI'] == '/about/'):?><?=' active'?><?endif?>">О нас</a>
				</li>
				<li class = "nav-list-item">
					<a href="/contacts/" class = "nav-list-link<? if ($_SERVER['REQUEST_URI'] == '/contacts/'):?><?=' active'?><?endif?>">Контакты</a>
				</li>
			</ul>
			<a href="/cart" class = "cart"></a>
			<div class = "menu-area">
				<div class="menu-area-w"></div>
				<div class="menu-icon">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
				<p class = "menu-area-text">Меню</p>
			</div>
			<div class = "cart-warnings"></div>
		</div>
	</nav>
</header>