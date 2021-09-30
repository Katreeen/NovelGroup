<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul id="fix-menu" class="main_menu -got-400 -fs-20" data-splitting="items">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="menu-item wow animate__fadeInUp">
				<a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="menu-item-link <?if ($arItem["SELECTED"]):?>active<?endif?>"><?=htmlspecialcharsbx($arItem["TEXT"])?></a>
				<ul class="sub-menu-item">
		<?else:?>
			<li class="menu-item wow animate__fadeInUp <?if ($arItem["SELECTED"]):?> active"<?endif?>><a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="menu-item-link parent"><?=htmlspecialcharsbx($arItem["TEXT"])?></a>
				<ul class="sub-menu-item">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="menu-item wow animate__fadeInUp"><a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="menu-item-link <?if ($arItem["SELECTED"]):?>active<?endif?>"><?=htmlspecialcharsbx($arItem["TEXT"])?></a></li>
			<?else:?>
				<li class="menu-item wow animate__fadeInUp <?if ($arItem["SELECTED"]):?> active<?endif?>"><a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="menu-item-link"><?=htmlspecialcharsbx($arItem["TEXT"])?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="menu-item wow animate__fadeInUp"><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=htmlspecialcharsbx($arItem["TEXT"])?></a></li>
			<?else:?>
				<li class="menu-item"><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=htmlspecialcharsbx($arItem["TEXT"])?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>

<?endif?>