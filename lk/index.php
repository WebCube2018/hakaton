<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");

use Bitrix\Main\Loader;

Loader::includeModule("highloadblock");

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

$hlbl = 7; // Указываем ID нашего highloadblock блока к которому будет делать запросы.
$hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch();

$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

$rsData = $entity_data_class::getList(array(
    "select" => array("*"),
    "order" => array("ID" => "ASC"),
    "filter" => array('=UF_ACTIVE' => 'Y')  // Задаем параметры фильтра выборки
));
$result = [];
while($arData = $rsData->Fetch()){
    $result[] = $arData;
}
?>

    <style>
        body {
            -webkit-user-select: none;
        }
        table {width: 100%; border-collapse: collapse;}
        table thead tr {color: #ffffff; font-weight: bold; background: #00bf80;}
        table thead tr td {border: 1px solid #01ab73; text-align: center}
        table tbody tr td {border: 1px solid #e8e9eb;}
        table tbody tr td:first-child{text-align: center}
        table tbody tr:nth-child(2n) {background: #f4f4f4;}
        table tbody tr:hover {background: #ebffe8;}
    </style>
    <table>
        <thead><tr><td>№</td><td>Тема</td></tr></thead>
<?php foreach ($result as $key => $item) :
    $key++?>
    <tr>
        <td><?=$key?></td>
        <td><?=$item['UF_QUESTIONS']?></td>
    </tr>
<?php endforeach;?>
    </table>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>