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
$this->setFrameMode(true);?>
<div class="header_drop_search">
<form action="<?=$arResult["FORM_ACTION"]?>" class="form form-inline header_drop_form_search">

<?if($arParams["USE_SUGGEST"] === "Y"):?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:search.suggest.input",
		"",
		array(
			"NAME" => "q",
			"VALUE" => "",
			"INPUT_SIZE" => 15,
			"DROPDOWN_SIZE" => 10,
		),
		$component, array("HIDE_ICONS" => "Y")
	);?>
<?else:?>
	<input class="form-control -got-400" type="search" name="q" value="" placeholder="<?=GetMessage("SEARCH_TEXT");?>" aria-label="Search"/>
<?endif;?>
		
	<input name="s" type="submit" value="<?//=GetMessage("BSF_T_SEARCH_BUTTON");?>" class="btn search_btn" />
		
</form>
</div>