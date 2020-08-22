<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Информация по л/с #VAR_LS_ID#");
?>
<div class="account-info">
<?
$APPLICATION->IncludeComponent(
	"citrus:tszh.account.info", 
	".default", 
	array(
		"SHOW_FIO" => "Y",
		"SHOW_ADDRESS" => "Y",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);
?>
<?
$APPLICATION->IncludeComponent(
	"citrus:tszh.account.contact.auth.change", 
	".default", 
	array(
		"SHOW_CHANGE_CONTACT" => "Y",
		"SHOW_CHANGE_PAS" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"REQUIRE_EMAIL" => "Y",
		"REQUIRE_TELEPHONE" => "N"
	),
	false
);
?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>