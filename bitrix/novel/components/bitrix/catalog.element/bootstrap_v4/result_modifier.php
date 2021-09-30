<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();
$res = CIBlockElement::GetByID($arResult['ID']);
if($ar_res = $res->GetNext())

if(SITE_ID == "en"){
  $fSections = CIBlockSection::GetList(false, Array("IBLOCK_ID" => 15, "ID" => $ar_res['IBLOCK_SECTION_ID'], "ACTIVE"=>"Y",  "GLOBAL_ACTIVE"=>"Y", "SECTION_ACTIVE" => "Y"), false, Array("UF_PRODUCT_TITLE"), false);
  $flSections = $fSections->Fetch();
  
}else{

  $fSections = CIBlockSection::GetList(false, Array("IBLOCK_ID" => 2, "ID" => $ar_res['IBLOCK_SECTION_ID'], "ACTIVE"=>"Y",  "GLOBAL_ACTIVE"=>"Y", "SECTION_ACTIVE" => "Y"), false, Array("UF_PRODUCT_TITLE"), false);
  $flSections = $fSections->Fetch();
}

if($arResult['PROPERTIES']['MAIN_TITLE']['~VALUE'] != ""){
  
  $APPLICATION->SetPageProperty("preTitle", $arResult['PROPERTIES']['MAIN_TITLE']['~VALUE']);
}else {
  if ($flSections['UF_PRODUCT_TITLE']){
    $APPLICATION->SetPageProperty("preTitle", $flSections['UF_PRODUCT_TITLE']);
  }
 
}