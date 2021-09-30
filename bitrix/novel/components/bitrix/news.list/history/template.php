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



<div class="item-views list image_right history">
  <div class="row items">
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
      <?=$arResult["NAV_STRING"]?><br />
    <?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
  $img_min = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>200, 'height'=>200), BX_RESIZE_IMAGE_EXACT, true); 
	?>

  <div class="col-12">
		<div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="title"><?echo $arItem["NAME"]?></div>
			<div class="info">
				<div class="row">
					<div class="col-md-8">			
            <div class="text">
							<div class="previewtext">
                <?echo $arItem["PREVIEW_TEXT"];?>						
							</div>
						</div>
			    </div>
          <div class="col-md-4">									
            <div class="image">
              <? if($arItem["PREVIEW_PICTURE"]["ID"] != ''){?>
                <a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>" title="<?echo $arItem["NAME"]?>" class="img-inside" data-fancybox>							
                  <img src="<?=$img_min["src"]?>" alt="<?echo $arItem["NAME"]?>" title="<?echo $arItem["NAME"]?>" class="img-responsive">
                </a>	
              <?}?>				
            </div>
					</div>
        </div>
      </div>
    </div>
  </div>

	
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
</div>