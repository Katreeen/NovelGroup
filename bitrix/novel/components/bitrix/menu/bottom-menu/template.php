<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="footer_menu -got-300 -fs-16">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>
	<a class="footer_menu-item" href="<?=htmlspecialcharsbx($arItem["LINK"])?>"><?=htmlspecialcharsbx($arItem["TEXT"])?></a>
<?endforeach?>

</div>

<?endif?>