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
	<div class="live-list-detail">
		<div class="row">
			<?if($arParams["DISPLAY_TOP_PAGER"]):?>
				<?=$arResult["NAV_STRING"]?><br />
			<?endif;?>
			<?foreach($arResult["ITEMS"] as $cell => $arItem):?>
				<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="live-list-item" id="live-<?=$cell;?>">
					<a class="live-item-img" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
						<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
							<div class="live-item-body image">
								
									<img
										border="0"
										src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
										width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
										height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
										alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
										title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
										style="float:left"
									/>
								
						<?else:?>
							<div class="live-item-body">
						<?endif?>
							<div class="live-item-body-over">
								<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
									<div class="live-item-description">
										<div class="description"><?echo $arItem["PREVIEW_TEXT"];?></div>
									</div>
								<?endif;?>
								<div class="live-item-label">
									<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
								</div>
								<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
									<span class="live-item-data"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
								<?endif?>
							</div>
						</div>
					</div>
					</a>
				</div>
			<?endforeach;?>
			
		</div>
		<div class="row">
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
				<?=$arResult["NAV_STRING"]?>
			<?endif;?>
		</div>
	</div>
<?endif;?>