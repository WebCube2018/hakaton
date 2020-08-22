<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("SHOW_TOP_RIGHT", "N");
?>
#CONNECT_COMPONENT_EPASSPORT#
<? if (isset($_REQUEST['home-id']))
{
	$APPLICATION->IncludeComponent(
		"vdgb:documents.list",
		".default",
		array(
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"COUNT_PAGE" => "10",
			"DESC" => "ASC",
			"ENTITY_ID" => $_REQUEST["home-id"],
			"SORT" => "DOCUMENT.ORIGINAL_NAME",
			"COMPONENT_TEMPLATE" => ".default"
		),
		false
	);
}
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>