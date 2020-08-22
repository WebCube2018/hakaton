<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

// подключение служебной части пролога
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->SetTitle("404 Not Found");
$APPLICATION->SetPageProperty('show_top_left', 'N');

// подключение визуальной части пролога
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");
?>
<p>К сожалению, запрашиваемая Вами страница не найдена.</p>
<?

$APPLICATION->IncludeComponent("bitrix:main.map", ".default", array(
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"SET_TITLE" => "Y",
	"LEVEL" => "3",
	"COL_NUM" => "2",
	"SHOW_DESCRIPTION" => "Y"
	),
	false
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>