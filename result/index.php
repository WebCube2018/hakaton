<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("result");

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
    "filter" => array('=UF_ACTIVE' => 'N')  // Задаем параметры фильтра выборки
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

        .ocenki {
            height: 35px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }
        .ocenki div {
            width: 34.33333%;
            text-align: center;
            color: #fff;
            padding: 4px 0;
            font-size: 13px;
        }
        .res_y {
            background-color: #01ab73;
        }
        .res_n {
            background-color: #de0000;
        }
        .res_nn {
            background-color: #696969;
        }
    </style>
    <table>
    <thead><tr><td>Дата</td><td>Вопрос</td></tr></thead>
<?php foreach ($result as $ke => $item) :?>
    <tr>
        <td><?=$item['UF_DATE']->toString();?></td>
        <td>
            <div class="vopros">
                <?=$item['UF_QUESTIONS']?>
            </div>
            <div class="ocenki">
                <div class="res_y">За <br><?=$item['UF_GOLOS_ZA']?></div>
                <div class="res_n">Против <br><?=$item['UF_GOLOS_NO']?></div>
                <div class="res_nn">Воздержался <br><?=$item['UF_GOLOS_NN']?></div>
            </div>
        </td>
    </tr>
<?php endforeach;?>
    </table>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>