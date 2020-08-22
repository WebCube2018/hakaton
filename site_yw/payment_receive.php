<?define("NO_KEEP_STATISTIC", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?if (CModule::IncludeModule("citrus.tszh"))
	CTszhFunctionalityController::ReceivePayment();?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>