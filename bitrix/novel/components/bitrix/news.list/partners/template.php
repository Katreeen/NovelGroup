<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="partners_carousel">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>




	<div class="partners_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="partners_item_logo"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"></div>
		<div class="partners_item_info">
			<div class="partners_item_name -fs-30 -ms-600"><?echo $arItem["NAME"]?></div>
			<?if($arItem["PREVIEW_TEXT"]):?>
       
				<div class="partners_item_anons -fs16"><?echo mb_strimwidth($arItem["PREVIEW_TEXT"], 0, 150, "...");?></div>
      <?else:?>
        <div class="partners_item_anons -fs16"><?echo mb_strimwidth($arItem["DETAIL_TEXT"], 0, 150, "...");?></div>
			<?endif;?>
			<? if ($arItem["PROPERTIES"]["LINK"]["VALUE"] != ""){?>
				<a href="<?echo $arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="partners_item_btn"></a>
			<?}else{?>
        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="partners_item_btn"></a>
      <?}?>
			
		</div>
	</div>

<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
<div class="partners_carousel_nav">
	<div class="s-prev"></div>
	<div class="s-next"></div>
</div>
