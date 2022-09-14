<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск по сайту");?><?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"search.page", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COMPONENT_TEMPLATE" => "search.page",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_NAME" => "",
		"NO_WORD_LOGIC" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "",
		"PAGE_RESULT_COUNT" => "3",
		"RESTART" => "N",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "N",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "Y",
		"USE_TITLE_RANK" => "N",
		"arrFILTER" => array(
			0 => "iblock_catalog",
			1 => "iblock_news",
		),
		"arrFILTER_iblock_catalog" => array(
			0 => "7",
		),
		"arrFILTER_iblock_news" => array(
			0 => "4",
		),
		"arrWHERE" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>