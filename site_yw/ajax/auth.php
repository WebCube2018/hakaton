<?

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if (((COption::GetOptionString("main", "new_user_registration", "N") == "Y" && $_SERVER['REQUEST_METHOD'] == 'POST' && $_REQUEST["TYPE"] == "TSZHREGISTRATION" && (!defined("ADMIN_SECTION") || ADMIN_SECTION !== true))) || ((COption::GetOptionString("main", "new_user_registration_email_confirmation", "N") == "Y") && isset($_GET['registerSuccess']) && $_GET['registerSuccess'] = 'yes'))
{
    $optionPhoneAdd = (COption::GetOptionString('citrus.tszh', 'input_phone_add', "Y") == "Y");
    $optionPhoneRequired = (COption::GetOptionString('citrus.tszh', 'input_phone_require', "Y") == "Y");

    $arSF = Array("NAME","SECOND_NAME","LAST_NAME");
    if ($optionPhoneAdd) $arSF[] = "PERSONAL_PHONE";
    $arRF = Array("NAME", "LAST_NAME");
    if ($optionPhoneAdd && $optionPhoneRequired)  $arRF[] = "PERSONAL_PHONE";

    if (!empty($_REQUEST["REGISTER"]))
    foreach ($_REQUEST["REGISTER"] as $key => $value)
    {
        $_REQUEST["REGISTER"][$key] = \Bitrix\Main\Text\Encoding::convertEncodingToCurrent($value);
    }

    $APPLICATION->IncludeComponent(
        "citrus:tszh.register",
        "orchid_default",
        Array(
            "USER_PROPERTY_NAME" => "",
            "SEF_MODE" => "N",
            "SHOW_FIELDS" => $arSF,
            "REQUIRED_FIELDS" => $arRF,
            "AUTH" => "Y",
            "USE_BACKURL" => "N",
            "PROFILE_URL" => SITE_DIR . "personal/info/",
            "SUCCESS_PAGE" => $APPLICATION->GetCurPageParam('registerSuccess=yes', array('backurl', 'register')),
            "USER_PROPERTY" => Array(
                "UF_ACCOUNT",
            ),
        )
    );
} else {
    $APPLICATION->IncludeComponent("citrus:system.auth.form", "ajax", Array(
            "SHOW_ERRORS" => "Y"
        )
    );
}
?>