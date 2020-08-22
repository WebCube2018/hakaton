<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty('show_title', 'N');
$APPLICATION->SetTitle("История начислений и оплат");
?>
<?$APPLICATION->IncludeComponent(
	"citrus:tszh.sheet.period", 
	".default", 
	array(
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "300",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Периоды",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"MAX_COUNT" => "10",
		"COMPONENT_TEMPLATE" => ".default",
		"RECEIPT_URL" => "/site_yw/personal/receipt/?period=#ID#",
		"SHOW_SERVICE_CORRECTIONS" => "N",
		"PAYMENT_URL" => "/site_yw/#PATH_PERSONAL#/payment/",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>