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

foreach ($_POST as $key => $value) {
    $yes = 0;
    $no = 0;
    $nn = 0;

    if ($value['GOLOS'] == 'YES') {
        $yes = ++$value['COUNT'];
    } elseif ($value['GOLOS'] == 'NO') {
        $no = ++$value['COUNT'];
    } elseif ($value['GOLOS'] == 'NN') {
        $nn = ++$value['COUNT'];
    }
    $data = array(
        "UF_ACTIVE"=>'N',
        "UF_GOLOS_NN"=> $nn,
        "UF_GOLOS_NO"=> $no,
        "UF_GOLOS_ZA"=> $yes
    );

    $result = $entity_data_class::update($key, $data); // где 77 -  id обновляемой записи
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

<?if(!empty($_POST)) : ?>
    <p>Ваш голос учтен</p>
    <?php else: ?>
    <p class="error">Что то пошло не так, Ваша тема не добавлена</p>
    <?php endif; ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>