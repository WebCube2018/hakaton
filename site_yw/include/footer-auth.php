<? if (!$USER->IsAuthorized()): ?>
	<div class="cabinet cont-p">
		<? $APPLICATION->IncludeComponent(
			"citrus:system.auth.form",
			"footer-auth",
			Array(
				"COMPONENT_TEMPLATE" => "footer-auth",
				"FORGOT_PASSWORD_URL" => SITE_DIR . "auth/?forgot_password=yes",
				"PROFILE_URL" => SITE_DIR . PATH_PERSONAL . "/info/",
				"REGISTER_URL" => SITE_DIR . "auth/?register=yes",
				"SHOW_ERRORS" => "Y",
				"TOURL" => $APPLICATION->GetCurPageParam(),
			)
		); ?>
		<div class="auth-info">
			<div class="auth-info__text">После авторизации на сайте с помощью личного кабинета вы сможете:</div>
			<ul class="auth-info__ul">
				<li class="auth-info__li">
					<span class="auth-info__link">Посмотреть баланс лицевого счета</span>
				</li>
				<li class="auth-info__li">
					<span class="auth-info__link">Передать показания</span>
				</li>
				<li class="auth-info__li">
					<span class="auth-info__link">Распечатать квитанцию</span>
				</li>
				<li class="auth-info__li">
					<span class="auth-info__link">Отправить заявку в аварийно-диспетчерскую службу</span>
				</li>
				<li class="auth-info__li">
					<span class="auth-info__link">Написать в книгу жалоб и предложений</span>
				</li>
			</ul>
		</div>
	</div>
<? endif; ?>