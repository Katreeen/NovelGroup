<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>




<div class="news_wrap_row">
	
	<div class="news_list news_list_full">
		<span class="cursor">Подробнее</span>
		
		

    <?foreach($arResult["ITEMS"] as $arSectItem): //Цикл для вывода категорий?>

      <? if(!empty($arSectItem['ELEMENTS'])):?>
        
        <div class="section_title"><?echo $arSectItem["NAME"]?></div>
        <?/*
        <div class="col-sm-6 col-md-6 news-col">
					<a href="<?=$arSectItem['SECTION_PAGE_URL']?>" class="news_list_item wow animate__fadeInUp">
						<span class="news_list_item_img"><img src="<?=$arSectItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""></span>
						<span class="news_list_item_data -got-300 -fs-20"><?echo $arSectItem["DISPLAY_ACTIVE_FROM"]?></span>
						<span class="news_list_item_title -fs-25"><?echo $arSectItem["NAME"]?></span>
					</a>
				</div>
        */?>
 
        <div class="news_list_row row">
            <? foreach($arSectItem['ELEMENTS'] as $arItem): //цикли для элементов?>
              <?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>392, 'height'=>222), BX_RESIZE_IMAGE_EXACT, true);?>
              <div class="col-sm-6 col-md-6 news-col" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news_list_item wow animate__fadeInUp">
                  <span class="news_list_item_img"><img src="<?=$img['src']?>" alt=""></span>
                  <span class="news_list_item_data -got-300 -fs-20"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
                  <span class="news_list_item_title -fs-25"><?echo $arItem["NAME"]?></span>
                </a>
              </div>


            <? endforeach ?>
      </div>
		
      
	<? endif ?>
<?endforeach;?>




			<?/*foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-sm-6 col-md-6 news-col" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news_list_item wow animate__fadeInUp">
						<span class="news_list_item_img"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""></span>
						<span class="news_list_item_data -got-300 -fs-20"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
						<span class="news_list_item_title -fs-25"><?echo $arItem["NAME"]?></span>
					</a>
				</div>
			<?endforeach;*/?>

		<?=$arResult["NAV_STRING"]?>
	</div>
</div>
