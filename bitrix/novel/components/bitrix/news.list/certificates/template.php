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



<div class="item-views certificates">

    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
      <?=$arResult["NAV_STRING"]?><br />
    <?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
   
	?>


		<div class="item_block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <h3 class="underline"><?echo $arItem["NAME"]?></h3>
    <div class="text_before_items">
      <?echo $arItem["PREVIEW_TEXT"];?>						
		</div>
  
    <?if($arItem['PROPERTIES']['IMG_SERT']['VALUE'] != ''){?>
      <div class="row sid-32 items">
        <?
        foreach($arItem['PROPERTIES']['IMG_SERT']['VALUE'] as $pid=>$arProperty):
          $arFile = CFile::GetFileArray($arProperty);
          $img_min = CFile::ResizeImageGet($arFile['ID'], array('width'=>135, 'height'=>190), BX_RESIZE_IMAGE_EXACT, true);
          $img_max = CFile::ResizeImageGet($arFile['ID'], array('width'=>800, 'height'=>1200), BX_RESIZE_IMAGE_EXACT, true);
          ?>
          <div class="col-md-12">
            <div class="item">
              <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">																	
                  <div class="image">
										<a href="<?=$img_max['src']?>" class="img-inside" data-fancybox>
											<img src="<?=$img_min['src']?>" class="img-responsive">
										</a>
									</div>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="text"><?=$arFile['DESCRIPTION']?></div>
								</div>
              </div>
						</div>
					</div>
				</div>



        <?endforeach?>
        </div>

<?}?>
	
<?endforeach;?>


</div>