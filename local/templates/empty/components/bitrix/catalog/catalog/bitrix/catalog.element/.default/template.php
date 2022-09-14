<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
?>

<div class="portfolio-works-slider">
	<?if(sizeof($arResult['MORE_PHOTO']) !== 1):?>
	<div class="slider-inner">
		<?foreach($arResult['MORE_PHOTO'] as $img):?>
		<div class="item-wrap">
			<a data-blueimp="portfolio-works" class="item" href="<?=$img['SRC']?>">
				<img src="<?=$img['SRC']?>" alt="<?=$arResult['NAME']?>"/>
			</a>
		</div>
		<?endforeach;?>
	</div>
	<?else:?>
		<div class="slider-inner">
			<div class="item-wrap">
				<a data-blueimp="portfolio-works" class="item" href="<?=$arResult['PREVIEW_PICTURE']['SRC'];?>">
					<img src="<?=$arResult['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arResult['NAME']?>"/>
				</a>
			</div>
		</div>
	<?endif;?>
	<div class="slider-nav slider-next intervolga-chevron-right"></div>
	<div class="slider-nav slider-prev intervolga-chevron-left"></div>
</div>
<div id="live-galery" class="blueimp-gallery blueimp-gallery-controls " style="display: none;">
	<div class="slides" style="padding: 10px 0px; width: 7680px;"></div>
	<a class="prev"></a>
	<a class="next"></a>
	<a class="close"></a>
</div>
<div class="col-xs-12 col-md-12">
	<?=$arResult['DETAIL_TEXT'];?>
</div>

<ul class="pager">
	<li class="previous">
		<a href="#">
			<div class="title">Предыдущий товар</div>
			Платье Модница на Прогулке
		</a>
	</li>
	<li class="next">
		<a href="#">
			<div class="title">Следующий товар</div>
			Платье Весенняя Легкость
		</a>
	</li>
</ul>