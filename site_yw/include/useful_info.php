<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!--noindex--><div class="block-title"><a href="/site_yw/questions-and-answers/" >Обратная связь</a></div>
<?$APPLICATION->IncludeComponent(
	"citrus:main.feedback",
	"orchid_feedback",
	Array(
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"EMAIL_TO" => "",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",2=>"MESSAGE",),
		"EVENT_MESSAGE_ID" => array()
	)
);?><!--/noindex-->