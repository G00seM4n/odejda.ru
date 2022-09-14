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
$this->setFrameMode(true);?>


<form action="<?=$arResult["FORM_ACTION"]?>">
	<div class="input-group-search">
		<input name="q" type="text" class="form-control" placeholder="Поиск...">
		
		<button class="btn btn-link" name="s" type="submit value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>"><i class="fa fa-search"></i></button>
	</div>
</form>