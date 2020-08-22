<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<h2>Раскрытие <em>информации</em></h2>
<?$APPLICATION->IncludeComponent("bitrix:menu", "tbl_list", Array(
	"ROOT_MENU_TYPE" => "section",	// Тип меню для первого уровня
	"MAX_LEVEL" => "1",	// Уровень вложенности меню
	"CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
	"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	"MENU_CACHE_TYPE" => "A",	// Тип кеширования
	"MENU_CACHE_TIME" => "360000",	// Время кеширования (сек.)
	"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
	"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
	),
	false
);?> 
<p><a href="/site_yw/documents/">Вся информация</a></p>