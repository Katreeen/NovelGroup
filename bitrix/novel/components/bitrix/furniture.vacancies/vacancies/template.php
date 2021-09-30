<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<select name="vacancies_list_name" id="vacancies_list_name">
  <option value="all" selected="selected">Список вакансий</option>
<?
foreach ($arResult['ITEMS'] as $key=>$val):
?>
  <option value="<?=$val["ID"]?>"><?=$val['NAME']?></option>
	
<?
endforeach;
?>
</select>
<div class="vacancies_list_value">
<?
foreach ($arResult['ITEMS'] as $key=>$val):
?>
<?
	$this->AddEditAction($val['ID'],$val['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($val['ID'],$val['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('FAQ_DELETE_CONFIRM', array("#ELEMENT#" => CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_NAME")))));
?>
<?
	if ($key > 0):
?>

<?
	endif;
?>


<div id="<?=$this->GetEditAreaId($val['ID']);?>" data-name="<?=$val["ID"]?>" class="vacancies_item wow fadeInUp">

<div class="vacancies_item_title -got-600 -fs-25"><?=$val['NAME']?></div>
<div class="vacancies_item_text -fs-20">
	<?=$val['PREVIEW_TEXT']?>
	<?=$val['DETAIL_TEXT']?>
</div>


</div>
<?endforeach;?>
</div>