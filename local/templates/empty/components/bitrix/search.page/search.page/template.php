<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
?>

<div class="search-page">
<form action="" method="get" class="form-horizontal">
<?if($arParams["USE_SUGGEST"] === "Y"):
	if(mb_strlen($arResult["REQUEST"]["~QUERY"]) && is_object($arResult["NAV_RESULT"]))
	{
		$arResult["FILTER_MD5"] = $arResult["NAV_RESULT"]->GetFilterMD5();
		$obSearchSuggest = new CSearchSuggest($arResult["FILTER_MD5"], $arResult["REQUEST"]["~QUERY"]);
		$obSearchSuggest->SetResultCount($arResult["NAV_RESULT"]->NavRecordCount);
	}
	?>
	<div class="form-group">
		<div class="col-md-12">
			<div class="input-group">
				<input type="text" name="q" value="<?=$arResult["REQUEST"]["~QUERY"]?>" size="40" class="form-control">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-default">Искать</button>
				</span>
			</div>
		</div>
	</div>
<?else:?>
	<input type="text" name="q" value="<?=$arResult["REQUEST"]["QUERY"]?>" size="40" />
<?endif;?>
<p>
	<?if($arResult["REQUEST"]["HOW"]=="d"):?>
		<a href="<?=$arResult["URL"]?>&amp;how=r<?echo $arResult["REQUEST"]["FROM"]? '&amp;from='.$arResult["REQUEST"]["FROM"]: ''?><?echo $arResult["REQUEST"]["TO"]? '&amp;to='.$arResult["REQUEST"]["TO"]: ''?>"><?=GetMessage("SEARCH_SORT_BY_RANK")?></a>&nbsp;|&nbsp;<b><?=GetMessage("SEARCH_SORTED_BY_DATE")?></b>
	<?else:?>
		<b><?=GetMessage("SEARCH_SORTED_BY_RANK")?></b>&nbsp;|&nbsp;<a href="<?=$arResult["URL"]?>&amp;how=d<?echo $arResult["REQUEST"]["FROM"]? '&amp;from='.$arResult["REQUEST"]["FROM"]: ''?><?echo $arResult["REQUEST"]["TO"]? '&amp;to='.$arResult["REQUEST"]["TO"]: ''?>"><?=GetMessage("SEARCH_SORT_BY_DATE")?></a>
	<?endif;?>
</p>
</form>

<?if($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false):?>
<?elseif($arResult["ERROR_CODE"]!=0):?>
	<p><?=GetMessage("SEARCH_ERROR")?></p>
	<?ShowError($arResult["ERROR_TEXT"]);?>
<?elseif(count($arResult["SEARCH"])>0):?>
	<?if($arParams["DISPLAY_TOP_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
	
	<?foreach($arResult["SEARCH"] as $arItem):?>
		<a href="<?echo $arItem["URL"]?>/"><?echo $arItem["TITLE_FORMATED"]?></a>
		<p><?echo $arItem["BODY_FORMATED"]?></p>
		
		<small><?=GetMessage("SEARCH_MODIFIED")?> <?=$arItem["DATE_CHANGE"]?></small><br /><?
		if($arItem["CHAIN_PATH"]):?>
			<ul class="breadcrumb small">
				<?=$arItem["CHAIN_PATH"]?>
			</ul>
		<?endif;?>
		<hr/>
	<?endforeach;?>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
	<br />
	
<?else:?>
	<?ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND"));?>
<?endif;?>
</div>