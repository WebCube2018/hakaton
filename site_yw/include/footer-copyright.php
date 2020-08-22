<div class="footer">
    <div class="footer__box">
        <div class="footer__text">
            <span class="footer__cop">© Copyright 2009–<?=date('Y')?>.</span> <span class="footer__dev">Разработка: Компания «Тиражные решения 1С-Рарус»</span>
        </div>
        <div class="footer__pay">
            <div class="footer__payservice">
                <?
                if (CModule::IncludeModule("citrus.tszhpayment") && ($paymentPath = CTszhPaySystem::getPaymentPath()))
                {
                ?>
                    <!--<div class="footer__payservice-text">
	                    <a href="http://www.moneta.ru" target="_blank">Сервис оплаты предоставлен НКО «МОНЕТА» (ООО)</a>
                    </div>
                    <a href="/<?/*=PATH_PERSONAL*/?>/payment">
	                    <img class="footer__payservice-img" src="<?/*= SITE_TEMPLATE_PATH */?>/images/visa-master-mir.png" alt="Оплата"/>
                    </a>-->
	                <?=CTszhPaySystem::getPaymentLogo();?>
                <?
                }
                ?>
            </div>
        </div>
    </div>
</div>