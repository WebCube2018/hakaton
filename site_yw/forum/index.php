<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Форум управляющей компании");
$APPLICATION->SetTitle("Форум жильцов");
?>
<div class="overflowx_auto">
<?$APPLICATION->IncludeComponent("bitrix:forum", ".default", array(
	"THEME" => "gray",
	"SHOW_TAGS" => "Y",
	"SHOW_AUTH_FORM" => "Y",
	"SHOW_NAVIGATION" => "Y",
	"TMPLT_SHOW_ADDITIONAL_MARKER" => "",
	"SMILES_COUNT" => "100",
	"USE_LIGHT_VIEW" => "N",
	"FID" => array(
		0 => "1",
	),
	"FILES_COUNT" => "5",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/site_yw/forum/",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_TIME_USER_STAT" => "60",
	"FORUMS_PER_PAGE" => "10",
	"TOPICS_PER_PAGE" => "10",
	"MESSAGES_PER_PAGE" => "10",
	"TIME_INTERVAL_FOR_USER_STAT" => "10",
	"IMAGE_SIZE" => "500",
	"SET_TITLE" => "Y",
	"USE_RSS" => "Y",
	"RSS_COUNT" => "30",
	"SHOW_VOTE" => "Y",
	"VOTE_CHANNEL_ID" => "",
	"VOTE_GROUP_ID" => array(
	),
	"VOTE_TEMPLATE" => "light",
	"SHOW_SUBSCRIBE_LINK" => "N",
	"SHOW_LEGEND" => "Y",
	"SHOW_STATISTIC" => "Y",
	"SHOW_NAME_LINK" => "Y",
	"SHOW_FORUMS" => "Y",
	"SHOW_FIRST_POST" => "N",
	"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
	"PATH_TO_ICON" => "/bitrix/images/forum/icon/",
	"PAGE_NAVIGATION_TEMPLATE" => "forum",
	"PAGE_NAVIGATION_WINDOW" => "5",
	"WORD_WRAP_CUT" => "23",
	"WORD_LENGTH" => "50",
	"USER_PROPERTY" => array(
	),
	"HELP_CONTENT" => "",
	"RULES_CONTENT" => "",
	"CHECK_CORRECT_PATH_TEMPLATES" => "Y",
	"RSS_CACHE" => "1800",
	"PATH_TO_AUTH_FORM" => "",
	"DATE_FORMAT" => "d.m.Y",
	"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
	"SEND_MAIL" => "E",
	"SEND_ICQ" => "A",
	"SET_NAVIGATION" => "Y",
	"SET_PAGE_PROPERTY" => "Y",
	"DISPLAY_PANEL" => "N",
	"SHOW_FORUM_ANOTHER_SITE" => "Y",
	"RSS_TYPE_RANGE" => array(
		0 => "RSS1",
		1 => "RSS2",
		2 => "ATOM",
	),
	"RSS_TN_TITLE" => "",
	"RSS_TN_DESCRIPTION" => "",
	"VOTE_COUNT_QUESTIONS" => "10",
	"VOTE_COUNT_ANSWERS" => "20",
	"SEF_URL_TEMPLATES" => array(
		"index" => "index.php",
		"list" => "forum1/",
		"read" => "forum1/topic#TID#/",
		"message" => "messages/forum1/topic#TID#/message#MID#/",
		"help" => "help/",
		"rules" => "rules/",
		"message_appr" => "messages/approve/forum1/topic#TID#/",
		"message_move" => "messages/move/forum1/topic#TID#/message#MID#/",
		"pm_list" => "pm/folder1/",
		"pm_edit" => "pm/folder1/message#MID#/user#UID#/#mode#/",
		"pm_read" => "pm/folder1/message#MID#/",
		"pm_search" => "pm/search/",
		"pm_folder" => "pm/folders/",
		"rss" => "rss/#TYPE#/#MODE#/#IID#/",
		"search" => "search/",
		"subscr_list" => "subscribe/",
		"active" => "topic/new/",
		"topic_move" => "topic/move/forum1/topic#TID#/",
		"topic_new" => "topic/add/forum1/",
		"topic_search" => "topic/search/",
		"user_list" => "users/",
		"profile" => "user/#UID#/edit/",
		"profile_view" => "user/#UID#/",
		"user_post" => "user/#UID#/post/#mode#/",
		"message_send" => "user/#UID#/send/#TYPE#/",
	),
	"SHOW_AUTHOR_COLUMN" => "N",
	"SEO_USER" => "Y",
	"SHOW_FORUM_USERS" => "N"
	),
	false
);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>