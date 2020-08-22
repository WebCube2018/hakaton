<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("show_title", "N");
$APPLICATION->SetTitle("Управление подпиской");
?>
<h2><em>Управление подпиской</em> на рассылки</h2>
<?$APPLICATION->IncludeComponent("citrus:tszh.subscription", "orchid_default", 
	array(),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>