<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
global $USER;
if (COption::GetOptionString("main", "wizard_template_id", "", SITE_ID) == 'citrus_tszh_adaptive')
{
	$profileUrl = SITE_DIR . 'personal/info/';
	LocalRedirect($profileUrl);
}
else {

	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->IncludeComponent(
		"citrus:main.profile",
		"",
		Array(
			"SET_TITLE" => "Y",
		)
	);
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
}
?>