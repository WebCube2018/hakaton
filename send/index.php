<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("send");

use Bitrix\Main\Loader;

Loader::includeModule("highloadblock");

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

$hlbl = 7; // Указываем ID нашего highloadblock блока к которому будет делать запросы.
$hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch();

$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

// Массив полей для добавления
$data = array(
    "UF_QUESTIONS"=>$_POST['tema'],
    "UF_COLLECTION"=>'1',
    "UF_INHABITANT"=>'1',
    "UF_INHABITANT_ID"=>'1',
    "UF_GOLOS_NN"=>'0',
    "UF_GOLOS_NO"=>'0',
    "UF_GOLOS_ZA"=>'0',
    "UF_DATE"=> date("d.m.Y"),
    "UF_ACTIVE"=>'Y'
);

if (!empty($_POST['tema'])) {
    $result = $entity_data_class::add($data);
}

?>
    <style>
        p {
            font-size: 16px;
            text-align: center;
            display: block;
            color: #01ab73;
        }
        p.error {
            color: #de0000;
        }
    </style>

<?if(!empty($_POST['tema'])) : ?>
    <p>Ваша тема успешно добавлена</p>
    <?php else: ?>
    <p class="error">Что то пошло не так, Ваша тема не добавлена</p>
    <?php endif; ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>