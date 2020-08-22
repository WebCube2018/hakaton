<?
$aMenuLinks = Array(
	Array(
		"Компания",
		"/site_yw/company/",
		Array(),
		Array(),
		"",
	),
	Array(
		"Дома",
		"/site_yw/epassports/",
		Array(),
		Array(),
		"",
	),
	Array(
		"Документы и отчетность",
		"/site_yw/documents/",
		Array(),
		Array(),
		"",
	),
	/*Array(
		"Тарифы и услуги",
		"/services/",
		Array(),
		Array(),
		""
	),*/
	Array(
		"Личный кабинет",
		"/site_yw/personal/",
		Array(),
		Array(),
		"",
		//"\$USER->IsAuthorized()"
	),
	Array(
		"Вопрос-Ответ",
		"/site_yw/questions-and-answers/",
		Array(),
		Array(),
		"",
	),
	Array(
		"Список заявок",
		"/workplace/",
		Array(),
		Array(),
		"CSite::InGroup(array(CGroup::GetIDByCode('TSZH_SUPPORT_ADMINISTRATORS'),CGroup::GetIDByCode('TSZH_SUPPORT_CONTRACTORS')))",
	),
	Array(
		"Привязать лицевой счет",
		"/personal/confirm-account/",
		Array(),
		Array(),
		"\$USER->IsAuthorized() && (\Citrus\Tszh\AccountsTable::getList(
			array('select' => array('ID'), 'filter'=> array('USER_ID' => \$USER->GetID())))->fetch() == false)",
	)
);
?>