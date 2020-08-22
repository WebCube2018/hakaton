<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="news-index"><div class="news-index-inner">
    <div class="fix">
		<div class="title">Новости</div>
		<?$APPLICATION->IncludeComponent("citrus:news.list", "common", array(
			"IBLOCK_TYPE" => "news",
			"IBLOCK_ID" => "1",
			"NEWS_COUNT" => "3",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_ORDER1" => "DESC",
			"SORT_BY2" => "SORT",
			"SORT_ORDER2" => "ASC",
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
			"DETAIL_URL" => "/site_yw/news/#ID#.html",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "3600000",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"PREVIEW_TRUNCATE_LEN" => "150",
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
			"PAGER_TITLE" => "Новости",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
			"PAGER_SHOW_ALL" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"RESIZE_IMAGE_WIDTH" => "100",
			"RESIZE_IMAGE_HEIGHT" => "100",
			"AJAX_OPTION_ADDITIONAL" => ""
		),
		false
	);?>
        <div class="list-more">
            <a href="/site_yw/news/">все новости</a>
        </div>
    </div>
</div></div>
