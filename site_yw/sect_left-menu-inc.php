<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> 
<h3>Личный кабинет</h3>
<?$APPLICATION->IncludeComponent(
	"citrus:tszh.account.choice",
	"",
	Array(
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"citrus:menu",
	"left-menu-ul",
	Array(
		"ROOT_MENU_TYPE" => "section",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	)
);?>
