<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

if(0 < $arResult["SECTIONS_COUNT"]){?>
	<div class="container">
		<div class="portfolio-top">
			<div class="row">
				<div class="col-md-9 col-sm-8 col-xs-12">
					<ul class="nav nav-pills">
					<?foreach ($arResult['SECTIONS'] as $arSection){
						$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
						$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
					?>
					
						<li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>" <?if($arSection["SELECTED"]){?>class="active"<?}?>><a href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a></li>
					<?}?>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?}?>
