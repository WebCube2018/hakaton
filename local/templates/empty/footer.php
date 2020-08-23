<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/libs.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");

?>
</div>

</body>
</html>