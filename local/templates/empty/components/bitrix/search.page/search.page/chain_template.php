<?
//Navigation chain template
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arChainBody = array();
?>

	<?
	foreach($arCHAIN as $item)
	{
		if(mb_strlen($item["LINK"]) < mb_strlen(SITE_DIR))
			continue;
		if($item["LINK"] <> "")
			$arChainBody[] = '<li><a href="'.$item["LINK"].'">'.htmlspecialcharsex($item["TITLE"]).'</a></li>';
		else
			$arChainBody[] = htmlspecialcharsex($item["TITLE"]);
	}
	return implode($arChainBody);
	?>
