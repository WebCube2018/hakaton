<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Фотогалерея управляющей компании");
$APPLICATION->SetTitle("Фотогалерея");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:photogallery",
	"",
	Array(
		"USE_LIGHT_VIEW" => "Y",
		"IBLOCK_TYPE" => "gallery",
		"IBLOCK_ID" => "6",
		"SECTION_SORT_BY" => "ID",
		"SECTION_SORT_ORD" => "ASC",
		"ELEMENT_SORT_FIELD" => "",
		"ELEMENT_SORT_ORDER" => "asc",
		"PATH_TO_USER" => "",
		"DRAG_SORT" => "Y",
		"USE_COMMENTS" => "N",
		"SEF_MODE" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"DATE_TIME_FORMAT_DETAIL" => "",
		"DATE_TIME_FORMAT_SECTION" => "",
		"SET_TITLE" => "Y",
		"SHOW_LINK_ON_MAIN_PAGE" => array("id"),
		"SECTION_PAGE_ELEMENTS" => "15",
		"ELEMENTS_PAGE_ELEMENTS" => "50",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"ALBUM_PHOTO_SIZE" => "120",
		"THUMBNAIL_SIZE" => "100",
		"JPEG_QUALITY1" => "100",
		"ORIGINAL_SIZE" => "1280",
		"JPEG_QUALITY" => "100",
		"ADDITIONAL_SIGHTS" => array(),
		"PHOTO_LIST_MODE" => "Y",
		"SHOWN_ITEMS_COUNT" => "6",
		"SHOW_NAVIGATION" => "N",
		"USE_RATING" => "N",
		"SHOW_TAGS" => "N",
		"UPLOADER_TYPE" => "form",
		"APPLET_LAYOUT" => "extended",
		"UPLOAD_MAX_FILE_SIZE" => "2",
		"USE_WATERMARK" => "Y",
		"WATERMARK_RULES" => "USER",
		"PATH_TO_FONT" => "default.ttf",
		"WATERMARK_MIN_PICTURE_SIZE" => "800",
		"SEF_FOLDER" => "/site_yw/epassports/photogallery/",
		"SEF_URL_TEMPLATES" => Array("index"=>"index.php","section"=>"#SECTION_ID#/","section_edit"=>"#SECTION_ID#/action/#ACTION#/","section_edit_icon"=>"#SECTION_ID#/icon/action/#ACTION#/","upload"=>"#SECTION_ID#/action/upload/","detail"=>"#SECTION_ID#/#ELEMENT_ID#/","detail_edit"=>"#SECTION_ID#/#ELEMENT_ID#/action/#ACTION#/","detail_list"=>"list/","search"=>"search/"),
		"VARIABLE_ALIASES" => Array("index"=>Array(),"section"=>Array(),"section_edit"=>Array(),"section_edit_icon"=>Array(),"upload"=>Array(),"detail"=>Array(),"detail_edit"=>Array(),"detail_list"=>Array(),"search"=>Array(),),
		"VARIABLE_ALIASES" => Array(
			"index" => Array(),
			"section" => Array(),
			"section_edit" => Array(),
			"section_edit_icon" => Array(),
			"upload" => Array(),
			"detail" => Array(),
			"detail_edit" => Array(),
			"detail_list" => Array(),
			"search" => Array(),
		)
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>