<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Рабочее место диспетчера");
?><?$APPLICATION->IncludeComponent("citrus:support.ticket", "workplace", array(
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/site_yw/workplace/",
	"TICKETS_PER_PAGE" => "50",
	"MESSAGES_PER_PAGE" => "20",
	"SET_PAGE_TITLE" => "Y",
	"EDIT_FIELDS" => array(
		0 => "MESSAGE",
		1 => "CRITICALITY",
		2 => "CATEGORY",
		3 => "STATUS",
		4 => "RESPONSIBLE",
		5 => "CLOSE",
		6 => "UF_FIO",
		7 => "UF_ACCOUNT",
		8 => "UF_ADDRESS_BUILDING",
		9 => "UF_ADDRESS_FLAT",
		10 => "",
	),
	"SHOW_FIELDS" => array(
		0 => "VIEWERS",
		1 => "OWNER",
		2 => "SOURCE",
		3 => "DATE_CREATE",
		4 => "CREATED",
		5 => "TIMESTAMP_X",
		6 => "DATE_CLOSE",
		7 => "STATUS",
		8 => "CATEGORY",
		9 => "TIME_TO_SOLVE",
		10 => "CRITICALITY",
		11 => "RESPONSIBLE",
		12 => "",
	),
	"SEF_URL_TEMPLATES" => array(
		"ticket_list" => "index.php",
		"ticket_edit" => "#ID#.php",
	)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>