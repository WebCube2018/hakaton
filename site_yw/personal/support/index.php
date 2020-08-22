<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заявки в аварийно-диспетчерскую службу");
?>
<?
$APPLICATION->IncludeComponent(
	"citrus:support.request.list", 
	".default", 
	array(
		"TICKET_EDIT_TEMPLATE" => "/site_yw/personal/support/ticket/#ID#.php",
		"TICKETS_PER_PAGE" => "10",
		"SET_PAGE_TITLE" => "N",
		"EDIT_FIELDS" => array(
			0 => "MESSAGE",
			1 => "CLOSE",
			2 => "TELEPHONE",
			3 => "GET_SMS",
			4 => "",
		),
		"COMPONENT_TEMPLATE" => ".default",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>