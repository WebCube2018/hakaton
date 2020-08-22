<?
if(isset($_GET["type"]) && $_GET["type"] == 'history'){
    $showLeftMenu = $showMenuMobile = $showTitleMiddle = false;
    $breadcrumbTitle = "История показаний счетчика";
}
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Показания счетчиков");
?>
<?$APPLICATION->IncludeComponent(
	"citrus:tszh.meters",
	"orchid_default",
	array(
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "1"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>