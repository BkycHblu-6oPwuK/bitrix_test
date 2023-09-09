<?

use Bitrix\Main\Page\Asset;

require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog.php");
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>

<head>
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<? echo SITE_TEMPLATE_PATH ?>/assets/sha/img/favicon.png" />
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/sha/css/bootstrap.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/sha/css/owl.carousel.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/sha/css/animate-text.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/sha/css/magnific-popup.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/sha/css/et-line.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/sha/css/pe-icon-7-stroke.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/sha/css/shortcode/shortcodes.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/sha/css/font-awesome.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/sha/style.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/sha/css/responsive.css');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/sha/js/vendor/modernizr-2.8.3.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/sha/js/vendor/jquery-1.12.0.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/sha/js/owl.carousel.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/sha/js/jquery.counterup.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/sha/js/waypoints.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/sha/js/jquery.magnific-popup.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/sha/js/jquery.mixitup.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/sha/js/jquery.meanmenu.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/sha/js/jquery.nav.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/sha/js/jquery.parallax-1.1.3.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/sha/js/plugins.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/sha/js/main.js');
	Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">');
	?>
	<? $APPLICATION->ShowHead(); ?>
</head>

<body>
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>
	<? if ($APPLICATION->GetCurDir() != '/') : ?>
		<!-- Линия с контактами -->
		<div class="header-top-area bg-color ptb-10 hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="welcome">
							<span>
								<i class="fa fa-envelope"></i>
								<? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "inc",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/includes/header/mail.php"
									)
								); ?>
							</span>
							<span>
								<i class="fa fa-phone"></i>
								<? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "inc",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/includes/header/phone.php"
									)
								); ?>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="social-icon-header text-right">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<? endif; ?>

	<!-- Шапка сайта (меню) -->
	<header id="sticky-header" class="header-area header-wrapper <?= ($APPLICATION->GetCurDir() === '/') ? 'transparent-header' : 'white-bg'; ?>">
		<!-- Меню (для десктопа) -->
		<div class="header-middle-area full-width">
			<div class="container">
				<div class="full-width-mega-dropdown">
					<div class="row">
						<!-- Логотип -->
						<div class="col-md-2 col-sm-3 col-xs-8">
							<div class="logo ptb-22">
								<a href="/">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/sha/img/logo/logo.png" alt="main logo">
								</a>
							</div>
						</div>

						<!-- Меню (основное) -->
						<div class="col-md-10 col-sm-9 col-xs-4 text-right dark-menu">
							<div class="header-main-menu hidden-xs">
								<? $APPLICATION->IncludeComponent(
									"bitrix:menu",
									"top_menu",
									array(
										"COMPONENT_TEMPLATE" => "top_menu",
										"ROOT_MENU_TYPE" => "top",
										"MENU_CACHE_TYPE" => "N",
										"MENU_CACHE_TIME" => "3600",
										"MENU_CACHE_USE_GROUPS" => "N",
										"MENU_CACHE_GET_VARS" => array(),
										"MAX_LEVEL" => "2",
										"CHILD_MENU_TYPE" => "",
										"USE_EXT" => "N",
										"DELAY" => "N",
										"ALLOW_MULTI_SELECT" => "N"
									),
									false
								); ?>
							</div>

							<!-- Поиск -->
							<div class="header-right">
								<div class="header-search">
									<div class="search-wrapper">
										<a href="javascript:void(0);" class="search-open">
											<i class="pe-7s-search"></i>
										</a>
										<div class="search-inside animated bounceInUp">
											<i class="icon-close search-close fa fa-times"></i>
											<div class="search-overlay"></div>
											<div class="position-center-center">
												<div class="search">
													<form>
														<input type="search" placeholder="Поиск по сайту">
														<button type="submit"><i class="fa fa-search"></i></button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Меню (для мобилки) -->
		<div class="mobile-menu-area visible-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mobile-menu">
							<nav id="dropdown">
								<ul>
									<li>
										<a href="/">Главная</a>
									</li>
									<li>
										<a href="about_us.html">О нас</a>
									</li>
									<li>
										<a href="services.html">Услуги</a>
										<ul>
											<li> <a href="services_landing.html">Лендинг</a> </li>
											<li> <a href="services_online_shop.html">Интернет-магазин</a> </li>
										</ul>
									</li>
									<li> <a href="portfolio.html">Портфолио</a> </li>

									<li>
										<a href="blog.html">Блог</a>
									</li>
									<li>
										<a href="contacts.html">Контакты</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Хлебные крошки (навигация) -->
	<? if ($APPLICATION->GetCurDir() != '/') : ?>
		<div class="breadcrumb-area black-bg ptb-100">
			<div class="container width-100">
				<div class="row z-index">
					<div class="col-md-7 col-sm-6">
						<div class="breadcrumb-title">
							<h2 class="white-text">Блог</h2>
						</div>
					</div>
					<div class="col-md-5 col-sm-6">
						<div class="breadcrumb-menu">
							<ol class="breadcrumb text-right">
								<li>
									<a href="index.html">Главная</a>
								</li>
								<li class="active">
									<a href="#">Блог</a>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	<? endif; ?>