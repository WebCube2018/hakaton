<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="left-area">
    <p class="left-area-title">Последние документы</p>

	<?$APPLICATION->IncludeComponent("citrus:news.list", "common", array(
			"IBLOCK_TYPE" => "documents",
			"IBLOCK_ID" => "5",
			"NEWS_COUNT" => "5",
			"FORCE_FILTER_NAME" => "",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_ORDER1" => "DESC",
			"SORT_BY2" => "ID",
			"SORT_ORDER2" => "DESC",
			"FILTER_NAME" => "",
			"FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "",
			),
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "360000",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"PREVIEW_TRUNCATE_LEN" => "",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"SET_TITLE" => "N",
			"SET_STATUS_404" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "Документы",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"AJAX_OPTION_ADDITIONAL" => ""
		),
		false
	);?>

    <div class="list-more">
        <a href="/site_yw/documents/">Все документы</a>
    </div>

    <div class="contakt">
        <p class="left-area-title"><a href="/site_yw/contacts/">Контакты</a></p>
		<?$APPLICATION->IncludeComponent(
			"citrus:tszh.contacts",
			"block",
			Array(
				"CONTACTS_URL" => "/site_yw/contacts/",
			),
			false
		);?>
    </div>
</div>
