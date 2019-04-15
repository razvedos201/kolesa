<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оплата и доставка");
?>.<?$APPLICATION->IncludeComponent(
	"bitrix:sale.order.payment.change",
	"",
	Array(
		"ALLOW_INNER" => "N",
		"ELIMINATED_PAY_SYSTEMS" => array("0"),
		"ONLY_INNER_FULL" => "N",
		"PATH_TO_PAYMENT" => "/personal/order/payment/",
		"REFRESH_PRICES" => "N",
		"SET_TITLE" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>