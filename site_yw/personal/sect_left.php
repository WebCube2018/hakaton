<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<h2><em>Личный</em> кабинет</h2>
<p>
Вы находитесь в Вашем личном кабинете, где 
можно посмотреть информацию, выразить свое 
мнение, заплатить за коммунальные услуги и 
посмотреть свои платежные документы.
</p>

#ACCOUNT_CHOISE#
<?$APPLICATION->IncludeComponent("bitrix:menu", "tbl_list", Array(
	"ROOT_MENU_TYPE" => "section",	// Тип меню для первого уровня
	"MAX_LEVEL" => "1",	// Уровень вложенности меню
	"CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
	"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	"MENU_CACHE_TYPE" => "N",	// Тип кеширования
	"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
	"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
	"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
	),
	false
);?> 
