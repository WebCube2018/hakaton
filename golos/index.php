<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("golos");

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
    "filter" => array('=UF_ACTIVE' => 'RES', )  // Задаем параметры фильтра выборки
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
            font-size: 13px;
            width: 34.33333%;
            text-align: center;
            color: #fff;
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
        button {
            display: block;
            height: 65px;
            margin-top: 20px;
            border-radius: 5px;
            width: 150px;
            cursor: pointer;
            line-height: 49px;
        }
        p {
            font-size: 11px;
            color: #696969;
            margin-top: 30px;
            text-align: center;
        }
        span {
            font-size: 16px;
            padding: 10px 15px 25px 10px;
            margin-bottom: 30px;
        }
        a {
            border-radius: 5px;
            width: 150px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            display: block;
            background: #01ab73;
            border: none;
            height: 40px;
            margin: 0 auto;
            color: #fff;
            line-height: 40px;
        }
    </style>
<?php if (!empty($result)) :?>
    <table>
        <thead><tr><td>Дата</td><td>Вопрос</td></tr></thead>
        <form action="/update/" method="post">
            <?php foreach ($result as $ke => $item) :?>
                <tr>
                    <td><?=$item['UF_DATE']->toString();?></td>
                    <td>
                        <div class="vopros">
                            <?=$item['UF_QUESTIONS']?>
                        </div>
                        <div class="ocenki">
                            <div class="res_y">
                                <input type="hidden" name="<?=$item['ID']?>[COUNT]" value="<?=$item['UF_GOLOS_ZA']?>">
                                За <br> <input id="<?=$item['ID']?>" value="YES" name="<?=$item['ID']?>[GOLOS]" type="radio">
                            </div>
                            <div class="res_n">
                                <input type="hidden" name="<?=$item['ID']?>[COUNT]" value="<?=$item['UF_GOLOS_NO']?>">
                                Против <br> <input id="<?=$item['ID']?>" value="NO" name="<?=$item['ID']?>[GOLOS]" type="radio">
                            </div>
                            <div class="res_nn">
                                <input type="hidden" name="<?=$item['ID']?>[COUNT]" value="<?=$item['UF_GOLOS_NN']?>">
                                Воздержался <br> <input id="<?=$item['ID']?>"  value="NN" name="<?=$item['ID']?>[GOLOS]" type="radio" checked="checked">
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
    </table>
    <button>Проголосовать</button>
    <p>Внимание! После нажатия на кнопку "Проголосовать" изменить варианты не получится.</p>
    </form>
<?php else :?>
    <span>
        Уважаемый собственник вопросов выставленных на голосование пока нет! Вы можете создать тему для выставления Вашего вопроса на голосование
    </span>
    <a href="/tema/">Создать тему</a>
<?php endif;?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>