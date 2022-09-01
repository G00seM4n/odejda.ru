<?
@define("ERROR_404","N");
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

	$bIsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?$APPLICATION->ShowHead();?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/common-styles.css');?>
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/ico/favicon_bx.png">
    <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/js/vendor/modernizr-html5shiv-respond.min.js')?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/js/vendor/modernizr.min.js');?>"></script>
	<title><?$APPLICATION->ShowTitle();?></title>
</head>
<body>
	<?$APPLICATION->ShowPanel();?>
    <div class="sticky-wrap">
        <header>
            <div class="header-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
							<?if($bIsMainPage):?>
								<span class="logo">
									<div class="image">Intervolga.ru</div>
									<div id="slogan-rand" class="slogan">
										<noscript>Сайты и реклама в интернете</noscript>
									</div>
								</span>
							<?else:?>
								<a class="logo" href="/">
									<div class="image">Intervolga.ru</div>
									<div id="slogan-rand" class="slogan">
										<noscript>Сайты и реклама в интернете</noscript>
									</div>
								</a>
							<?endif;?>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="col-lg-7 col-xs-12 hidden-xs">
                                    <ul class="btn-list-inline">
										<?$APPLICATION->IncludeFile(
											SITE_DIR.'include/slogan.php',
											array(),
											array(
												'MODE' => 'text'
											)
										);?>
                                    </ul>
                                </div>
                                <div class="col-lg-5 col-xs-12 hidden-print">
                                    <div class="input-group-search">
                                        <input type="text" class="form-control" placeholder="Поиск...">
                                        <button class="btn btn-link" type="button"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <ul class="phone-list">
                                <li>
									<?$APPLICATION->IncludeFile(
										SITE_DIR.'include/phone1.php',
										array(),
										array(
											'MODE' => 'html'
										)
									);?>
								</li>
                                <li>
									<?$APPLICATION->IncludeFile(
										SITE_DIR.'include/phone1.php',
										array(),
										array(
											'MODE' => 'html'
										)
									);?>
								</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
			"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
			"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
			"DELAY" => "N",	// Откладывать выполнение шаблона меню
			"MAX_LEVEL" => "1",	// Уровень вложенности меню
			"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
				0 => "",
			),
			"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
			"MENU_CACHE_TYPE" => "N",	// Тип кеширования
			"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
			"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
			"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		), false);?>
		<?if($bIsMainPage):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list", 
				"index", 
				array(
					"COMPONENT_TEMPLATE" => "index",
					"IBLOCK_TYPE" => "index",
					"IBLOCK_ID" => "3",
					"NEWS_COUNT" => "20",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_ORDER1" => "DESC",
					"SORT_BY2" => "SORT",
					"SORT_ORDER2" => "ASC",
					"FILTER_NAME" => "",
					"FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"PROPERTY_CODE" => array(
						0 => "",
						1 => "",
					),
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"PREVIEW_TRUNCATE_LEN" => "",
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"SET_TITLE" => "Y",
					"SET_BROWSER_TITLE" => "Y",
					"SET_META_KEYWORDS" => "Y",
					"SET_META_DESCRIPTION" => "Y",
					"SET_LAST_MODIFIED" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
					"ADD_SECTIONS_CHAIN" => "Y",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "Y",
					"STRICT_SECTION_CHECK" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"PAGER_TITLE" => "Новости",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"SET_STATUS_404" => "N",
					"SHOW_404" => "N",
					"MESSAGE_404" => ""
				),
				false
			);?>
			<div class="activities-description-wrap">
				<div class="activities-description">
					<div class="container">
						<div class="activities-inner">
							<h3>Последние посещенные вами страницы</h3>
							<ul>
								<li><a href="#">Мы стали использовать новую ткань</a></li>
								<li><a href="#">Главная страница</a></li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list", 
				"news", 
				array(
					"COMPONENT_TEMPLATE" => "news",
					"IBLOCK_TYPE" => "news",
					"IBLOCK_ID" => "4",
					"NEWS_COUNT" => "50",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_ORDER1" => "DESC",
					"SORT_BY2" => "SORT",
					"SORT_ORDER2" => "ASC",
					"FILTER_NAME" => "",
					"FIELD_CODE" => array(
						0 => "NAME",
						1 => "PREVIEW_TEXT",
						2 => "PREVIEW_PICTURE",
						3 => "DATE_ACTIVE_FROM",
						4 => "",
					),
					"PROPERTY_CODE" => array(
						0 => "",
						1 => "",
					),
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "/novosti-kompanii/#ID#/",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"PREVIEW_TRUNCATE_LEN" => "",
					"ACTIVE_DATE_FORMAT" => "j M Y",
					"SET_TITLE" => "N",
					"SET_BROWSER_TITLE" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_LAST_MODIFIED" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"ADD_SECTIONS_CHAIN" => "N",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "N",
					"STRICT_SECTION_CHECK" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"PAGER_TITLE" => "Новости",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"SET_STATUS_404" => "N",
					"SHOW_404" => "N",
					"MESSAGE_404" => ""
				),
				false
			);?>
		<?endif;?>
		<?if(ERROR_404=='Y'):?>
			<div class="page-not-found">
		<?else:?>
			<div class="container">
				<div class="row">
					<?if(!$bIsMainPage):
						$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
							"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
								"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
								"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
							),
							false
						);
					endif;?>
					<h1><?$APPLICATION->ShowTitle(false);?></h1>
				</div>
			</div>
		<?endif;?>
		<div class="container">
			<div class="row">
        		