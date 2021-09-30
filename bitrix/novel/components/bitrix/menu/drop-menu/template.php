<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<ul class="drop_menu_nav -fs-20">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="drop_menu_item parent">
				<a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="drop_menu_item_link <?if ($arItem["SELECTED"]):?>active<?endif?>"><?=htmlspecialcharsbx($arItem["TEXT"])?></a>
					<ul class="drop_menu_item_children -ms-400 -fs-15">
		<?else:?>
			<li class="drop_menu_item parent <?if ($arItem["SELECTED"]):?> active"<?endif?>><a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="drop_menu_item_link"><?=htmlspecialcharsbx($arItem["TEXT"])?></a>
				<ul class="drop_menu_item_children -ms-400 -fs-15">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="drop_menu_item"><a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="drop_menu_item_link <?if ($arItem["SELECTED"]):?>active<?endif?>"><?=htmlspecialcharsbx($arItem["TEXT"])?></a></li>
			<?else:?>
				<li class="drop_menu_item_child <?if ($arItem["SELECTED"]):?> active<?endif?>"><a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="drop_menu_item_child_link"><?=htmlspecialcharsbx($arItem["TEXT"])?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="drop_menu_item"><a href="" class="drop_menu_item_link <?if ($arItem["SELECTED"]):?>active<?endif?>"><?=htmlspecialcharsbx($arItem["TEXT"])?></a></li>
			<?else:?>
				<li class="drop_menu_item"><a href="" class="drop_menu_item_link denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=htmlspecialcharsbx($arItem["TEXT"])?></a></li>
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