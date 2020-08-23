<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Page\Asset;
use \Bitrix\Main\Localization\Loc;

?>
<!DOCTYPE html>
<html class="fixed" lang="ru-RU">
<head>
    <?php $APPLICATION->ShowHead();
//    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/js/arcticmodal/simple.css");
//    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/js/arcticmodal/jquery.arcticmodal.css");
//    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/arcticmodal/jquery.arcticmodal.js");
    ?>
    <meta charset="utf-8">
    <title><?php $APPLICATION->ShowTitle(); ?></title><!--[if IE]>
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
        <![endif]-->
</head>
<body class="index-page">
<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>

<div class="wrapper">


