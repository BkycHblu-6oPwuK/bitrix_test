<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!-- 
		<li>
			<a href="about_us.html">О нас</a>
		</li>
		<li> <a href="services.html"> Услуги <span class="indicator"><i class="fa fa-angle-down"></i></span> </a>
			<ul class="dropdown">
				<li> <a href="services_landing.html">Лендинг</a> </li>
				<li> <a href="services_online_shop.html">Интернет-магазин</a> </li>
			</ul>
		</li>
		<li> <a href="portfolio.html"> Портфолио </a> </li>
		<li>
			<a href="blog.html">Блог</a>
		</li>
		<li>
			<a href="contacts.html">Контакты</a>
		</li> -->
<? if (!empty($arResult)) : ?>
	<nav id="primary-menu">
		<ul class="main-menu text-right">
			<?
			foreach ($arResult as $arItem) :
				if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
					continue;
			?>
				<? if ($arItem["SELECTED"]) : ?>
					<li>
						<a href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a>
					</li>
				<? else : ?>
					<li>
						<a href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a>
					</li>
				<? endif ?>

			<? endforeach ?>
		</ul>
	</nav>
<? endif ?>