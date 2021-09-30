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
<div class="catalog_image_carousel">

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	$img_top = CFile::ResizeImageGet($arItem['PROPERTIES']['IMG_TOP']['VALUE'], array('width'=>909, 'height'=>595), BX_RESIZE_IMAGE_PROPORTIONAL, true);  
	$img_bottom = CFile::ResizeImageGet($arItem['PROPERTIES']['IMG_BOTTOM']['VALUE'], array('width'=>890, 'height'=>504), BX_RESIZE_IMAGE_PROPORTIONAL, true);  
	?>

	<div class="carousel_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="carousel_item_img">
			<div class="carousel_item_img_top">
				<img src="<?=$img_top['src']?>" alt="">
			</div>
			<div class="carousel_item_img_base">
				<img src="<?=$img_bottom['src']?>" alt="">
			</div>
		</div>
	</div>


<?endforeach;?>

</div>
<div class="catalog_image_carousel_nav">
	<div class="s-prev"></div>
	<div class="s-next"></div>
</div>
