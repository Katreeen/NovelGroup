<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>


<div class="item-views table  image_left staff">
<div class="group-content">



	
    <?foreach($arResult["ITEMS"] as $arSectItem): //Цикл для вывода категорий?>
      <div class="tab-pane active">
      <? if(!empty($arSectItem['ELEMENTS'])):?>
        
        <h3 class="underline"><?echo $arSectItem["NAME"]?></h3>
        <div class="text_before_items">
          <?echo $arSectItem['~DESCRIPTION']?>
        </div>
 
        <div class="row sid-38 items">
            <? foreach($arSectItem['ELEMENTS'] as $arItem): //цикли для элементов?>
              <?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>180, 'height'=>170), BX_RESIZE_IMAGE_EXACT , true);?>
              <div class="col-lg-3 col-md-4 col-sm-6">
								<div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
									<div class="row">
										<div class="col-md-12">
                      <div class="image" style="height: 190px; line-height: 167px;">
												<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="blink">
													<img src="<?=$img["src"]?>" alt="<?echo $arItem["NAME"]?>" title="<?echo $arItem["NAME"]?>" class="img-responsive">
												</a>
											</div>
											<div class="text">																															
                        <div class="title">
												  <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
                        </div>
										    <div class="post"><?=$arItem['PROPERTIES']['POST']['~VALUE']?></div>
                        <hr>
											  <div class="properties">
													<div class="property">
														<i class="fa fa-envelope-o"></i>&nbsp;
														<a href="mailto:<?=$arItem['PROPERTIES']['EMAIL']['~VALUE']?>"><?=$arItem['PROPERTIES']['EMAIL']['~VALUE']?></a>
													</div>
													<div class="property">
														<i class="fa fa-phone"></i>&nbsp;
														<?=$arItem['PROPERTIES']['PHONE']['~VALUE']?>
                          </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
            <? endforeach ?>
        </div>
		
      
	    <? endif ?>
      </div>
<?endforeach;?>

</div>
</div>