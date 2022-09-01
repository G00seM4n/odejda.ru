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
<?if($arResult["ITEMS"]):?>
	<div class="slider-responsive">
		<div class="slider-responsive-panel active">
			<input data-toggle="radio-switch" type="checkbox">
			<span>Наши лучшие предложения Вам</span>
		</div>
		<div class="toggle-height">
			<div class="slider-responsive-controls">
				<a class="hidden-xs" href="#prev"></a>
				<a class="hidden-xs" href="#next"></a>
			</div>
			<div class="slider-responsive-inner">
				<?if($arParams["DISPLAY_TOP_PAGER"]):?>
					<?=$arResult["NAV_STRING"]?>
				<?endif;?>
				<?foreach($arResult["ITEMS"] as $cell => $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<div class="slider-responsive-inner-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="slider-responsive-inner-item-img" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>')">
							<div class="slider-responsive-inner-item-img-title">
								<div class="h2"><?=$arItem['NAME']?></div>
								<?if($arItem['PREVIEW_TEXT']):?>
								<div><?=$arItem['PREVIEW_TEXT']?></div>
								<?endif;?>
								<?if($arItem['PROPERTIES']['url']['VALUE']):?>
								<a href="<?=$arItem['PROPERTIES']['url']['VALUE']?>" class="link">Подробнее...</a>
								<?endif;?>
							</div>
						</div>
					</div>
				<?endforeach;?>
				<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
					<?=$arResult["NAV_STRING"]?>
				<?endif;?>
			</div>
		</div>
	</div>
<?endif;?>