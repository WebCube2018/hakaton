<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("SHOW_TITLE", "N");
$APPLICATION->SetTitle("Квитанция на оплату коммунальных услуг");
?>
<?$APPLICATION->IncludeComponent(
	"citrus:tszh.receipt",
	"post-354",
	Array(
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>