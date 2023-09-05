<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="slider-area">
    <div class="slider-active">
		<? 
		 foreach($arResult['ITEMS'] as $item):
		?>
        	<div class="single-slider">
        	    <div class="slider-img parallax-bg bg-opacity-black-60" style="background:url(<?=$item["PREVIEW_PICTURE"]["SRC"]?>)"></div>
        	    <div class="slider-content slider-style-2 slider-style-4 text-center z-index-5">
        	        <span><?=$item['NAME']?></span>
        	        <h2><?=$item["PREVIEW_TEXT"]?></h2>
					<? if(strlen($item["DETAIL_TEXT"]) > 0): ?>
        	        	<a class="my-button" href="<?=$item["PROPERTIES"]['LINK']['VALUE']?>"><?=$item["DETAIL_TEXT"]?></a>
					<? endif; ?>
        	    </div>
        	</div>
		<? endforeach; ?>
    </div>
</section>