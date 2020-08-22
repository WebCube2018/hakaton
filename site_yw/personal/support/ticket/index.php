<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?><?$APPLICATION->IncludeComponent(
	"citrus:support.request.chat", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/site_yw/personal/support/ticket/",
		"MESSAGES_PER_PAGE" => "20",
		"ID" => "",
		"SET_PAGE_TITLE" => "Y",
		"SEF_URL_TEMPLATES" => array(
			"TEMPLATE_ID" => "#ID#.php",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>