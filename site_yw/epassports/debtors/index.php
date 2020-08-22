<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");?>
<?$APPLICATION->SetPageProperty("title", "Должники компании");?>
<?$APPLICATION->SetTitle("Список должников");?>
<?$APPLICATION->IncludeComponent("citrus:tszh.dolg", "orchid_default",
	array(
		"MAX_COUNT" => "15",
		"MIN_DEBT" => "#DEBTORS_MIN_SUM#",
		"DAYS_2_PAY" => "#DEBTORS_DAY#",
		"FILTER_NAME" => "",
		"GROUP_BY" => "HOUSE",
		"GROUP_BY_SUMMARY" => "SUM",
		"GROUP_BY_SUMMARY_FIELD" => "DEBT_END",
		"COLS_COUNT" => "3",
		"COL_0" => "STREET",
		"COL_1" => "HOUSE",
		"COL_2" => "DEBT_END",
		"ACCESS_FIELDS" => array(
			0 => "XML_ID",
			1 => "USER_LAST_NAME",
			2 => "USER_NAME",
			3 => "USER_SECOND_NAME",
			4 => "USER_FULL_NAME",
			5 => "USER_FULL_ADDRESS",
			6 => "FLAT",
		),
		"ACCESS_GROUPS" => array(
			0 => "1",
		),
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "��������",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
	), false
);?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>