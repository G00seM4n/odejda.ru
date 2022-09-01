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
	<div class="container mbl">
		<div class="row">
			<div class="col-md-12">
				<div class="live-main">
					<h5><a href="#">Новости</a></h5>
					<div class="live-pagination">
						<a class="prev" href="#prev"><i class="fa fa-angle-left"></i></a>
						<a class="next" href="#next"><i class="fa fa-angle-right"></i></a>
					</div>
					<div class="live-list-wrap">
						<div class="live-list">
							<?if($arParams["DISPLAY_TOP_PAGER"]):?>
								<?=$arResult["NAV_STRING"]?>
							<?endif;?>
							<?foreach($arResult["ITEMS"] as $arItem):?>
								<?
								$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
								$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
								?>
								<div class="live-list-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
									<div class="live-item-body <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>image<?endif?>">
										<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
											<a class="live-item-img" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
												<img
													class="preview_picture"
													border="0"
													src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
													width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
													height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
													alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
													title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
													style="float:left"
												/>
											</a>
										<?else:?>
											<img
												class="preview_picture"
												border="0"
												src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
												width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
												height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
												alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
												title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
												style="float:left"
												/>
										<?endif;?>
										<div class="live-item-body-over">
											<div class="live-item-description">
												<div class="description">
													<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
														<?echo $arItem["PREVIEW_TEXT"];?>
													<?endif;?>
												</div>
											</div>
											<div class="live-item-label">
											<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
												<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
													<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
												<?else:?>
													<?echo $arItem["NAME"]?>
												<?endif;?>
											<?endif;?>
											</div>
											<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
												<span class="live-item-data"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
											<?endif?>
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
			</div>
		</div>
	</div>
<?endif;?>