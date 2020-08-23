<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("тема");

?>
<div class="content_modal">
    <form action="/send/" method="post">
    <input type="text" name="tema">
        <button>Добавить</button>
    </form>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>