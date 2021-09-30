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
<div class="news_detail">
  <div class="news_detail_data -got-300"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></div>
  <div class="news_detail_row row">
    <?if($arResult["DETAIL_PICTURE"] != ''){?>
    <div class="col-md-4">
      <div class="news_detail_preview"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt=""></div>
    </div>
    <div class="col-md-7">
      <div class="news_detail_text -fs-20">
      <?echo $arResult["DETAIL_TEXT"];?>
      </div>
    <?}else{?>
      <div class="col-12">

      <div class="news_detail_text -fs-20">
      <?echo $arResult["DETAIL_TEXT"];?>
      </div>
    <?}?>
    
      
      
     
    </div>
    <?if ( $arResult["PROPERTIES"]['GALLERY']['VALUE']!=''){?>
      <div class="col-12">
        
        <div class="news_detail_gallery">
        <div class="section_title"><?=GetMessage('GALLERY')?> </div>
          <div class="news_detail_gallery_row">
            <?foreach ($arResult["PROPERTIES"]['GALLERY']['VALUE'] as $item){
              $min_img = CFile::ResizeImageGet($item, array('width'=>200, 'height'=>200), BX_RESIZE_IMAGE_EXACT, true);
              $max_img= CFile::ResizeImageGet($item, array('width'=>900, 'height'=>600), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
   
              <a class="gallery_item" data-fancybox="gallery" href="<?=$max_img['src']?>"><img src="<?=$min_img['src']?>"></a>
            <?}?>
          </div>
        </div>
        </div>
      <?}?>

  </div>
<?/*
<div class="news_nav_arrow">
	<?
  if(SITE_ID == 'en'){
    $arFilter = Array("IBLOCK_ID" => 12, "ACTIVE" => "Y");
  }else{
    $arFilter = Array("IBLOCK_ID" => 1, "ACTIVE" => "Y");
  }
	
	$arSelect = Array("ID", "DETAIL_PAGE_URL");
	$ElementID = $arResult['ID'];

	$resPrev = CIBlockElement::GetList(
		Array("CREATED"=>"ASC"),
		$arFilter,
		false,
		Array('nPageSize' => 1, 'nElementID' => $ElementID),
		$arSelect
	);

	if ($ar_fields = $resPrev->GetNext()) {
		if($ElementID == $ar_fields['ID']) {
			echo "";
		} else {?>
			<a class="news_nav_arrow_prew" href="<?=$ar_fields['DETAIL_PAGE_URL']?>"></a>
		<?}
	}

	$resNext = CIBlockElement::GetList(
		Array("CREATED"=>"DESC"),
		$arFilter,
		false,
		Array('nPageSize' => 1, 'nElementID' => $ElementID),
		$arSelect
	);

	if ($ar_fields = $resNext->GetNext()) {
		if($ElementID == $ar_fields['ID']) {
			echo "";
		} else {?>
			<a class="news_nav_arrow_next" href="<?=$ar_fields['DETAIL_PAGE_URL']?>"></a>
		<?}
	}?>
</div>
*/?>