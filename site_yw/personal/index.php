<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("SHOW_LEFT_MENU_MOBILE", "Y");
$APPLICATION->SetPageProperty("show_title", "N");
$APPLICATION->SetPageProperty("title", "Личный кабинет плательщика");
$APPLICATION->SetPageProperty("breadcrumb_title", "Общая информация");
?>
<div class="ads">
	<h3>Объявления</h3>
	<?$APPLICATION->IncludeComponent(
		"citrus:news.list",
		"common",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Yг",
			"ADD_SECTIONS_CHAIN" => "Y",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_SHADOW" => "Y",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "3600",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PANEL" => "N",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("",""),
			"FILTER_NAME" => "arrAnnouncementsFilter",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "2",
			"IBLOCK_TYPE" => "services",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "3",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "Y",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "",
			"PAGER_TITLE" => "Объявления",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("",""),
			"RESIZE_IMAGE_HEIGHT" => "150",
			"RESIZE_IMAGE_WIDTH" => "150",
			"SET_BROWSER_TITLE" => "Y",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "Y",
			"SET_META_KEYWORDS" => "Y",
			"SET_STATUS_404" => "Y",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N"
		)
	);?>
	<div class="list-more">
		<a href="/site_yw/personal/announcements/">Все объявления</a>
	</div>
</div>

<h3 class="alt">Голосование</h3>
<?$APPLICATION->IncludeComponent(
	"citrus:tszh.voting", 
	"personal", 
	array(
		"LIMIT_FIELD_NAME" => "CREATED_BY",
		"LIMIT_FIELD_VALUE" => $USER->GetID(),
		"VOTE_TYPE_DIOGRAM" => "1",
		"GROUP_ID" => "PERSONAL_yw",
		"SEF_MODE" => "N",
		"SEF_FOLDER" => "/site_yw/personal/",
		"VARIABLE_ALIASES" => array(
			"VOTING_ID" => "VOTING_ID",
		)
	),
	false
);?>


<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
