<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0)
	LocalRedirect($backurl);

$APPLICATION->SetTitle("Авторизация");

if (isset($_GET['registerSuccess']) && $_GET['registerSuccess'] = 'yes')
	ShowNote("Вы зарегистрированы и успешно авторизовались.");
else
	LocalRedirect('/site_yw/personal/');

?>
	<ul>
		<li><a href="/site_yw/personal/">В личный кабинет</a></li>
		<li><a href="/site_yw/">На главную страницу</a></li>
	</ul>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>