<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Привязка к лицевому счету");
?>
<?
$APPLICATION->IncludeComponent("citrus:tszh.confirm_adaptive",".default",	Array(),false);
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>