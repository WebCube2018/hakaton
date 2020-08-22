<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!--noindex-->
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
);?>
<!--noindex-->
<div class="search">
    <div class="search__form">
        <form id="search-form" action="<?=SITE_DIR?>search/" method="get">
            <input class="search__input" type="text" name="q"  placeholder="Поиск по сайту"/>
            <input class="search__button" value="" type="submit"/>
        </form>
    </div>
</div>
<!--/noindex-->