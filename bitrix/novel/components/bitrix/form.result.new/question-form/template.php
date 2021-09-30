<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
<?=$arResult["FORM_NOTE"]?>
<?if ($arResult["isFormNote"] != "Y")
{
?>
<?=$arResult["FORM_HEADER"]?>

<?
if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y")
{
?>
<?
if ($arResult["isFormTitle"])
{
?>
<div class="section_title"><?=$arResult["FORM_TITLE"]?></div>
<?
} //endif ;

	if ($arResult["isFormImage"] == "Y")
	{
	?>
	<a href="<?=$arResult["FORM_IMAGE"]["URL"]?>" target="_blank" alt="<?=GetMessage("FORM_ENLARGE")?>"><img src="<?=$arResult["FORM_IMAGE"]["URL"]?>" <?if($arResult["FORM_IMAGE"]["WIDTH"] > 300):?>width="300"<?elseif($arResult["FORM_IMAGE"]["HEIGHT"] > 200):?>height="200"<?else:?><?=$arResult["FORM_IMAGE"]["ATTR"]?><?endif;?> hspace="3" vscape="3" border="0" /></a>
	<?//=$arResult["FORM_IMAGE"]["HTML_CODE"]?>
	<?
	} //endif
	?>

			<p><?=$arResult["FORM_DESCRIPTION"]?></p>
		
	<?
} // endif
	?>

<div class="form form_wrap">
	<div class="form_row row">

	<?foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion){
		if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden'){

		}else{?>
		<div class="col-sm-6">
					<?
					
						$tmp = $arQuestion["HTML_CODE"];
						if ($arQuestion["REQUIRED"] == "Y"){
							$required = '*';
						}else{
							$required = '';
						}
            $isphone = '';
            if ($FIELD_SID == 'SIMPLE_QUESTION_766'){
              $isphone = 'form-tel';
            }

						$mainclass = 'class="form-control '.$isphone.'" placeholder="'.$arQuestion["CAPTION"].$required.'"';
						
						if($FIELD_SID == "SIMPLE_QUESTION_138"){
							$mainclass = 'class="form-control phone" placeholder="'.$arQuestion["CAPTION"].$required.'"';
							$tmp = str_replace('type="text"', 'type="tel"', $tmp);

						}
						$tmp = str_replace('class="inputtext"', $mainclass, $tmp);
						$arQuestion["HTML_CODE"] = $tmp;
						echo $tmp;
					?>
					<?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
						<span class="error"><?=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?></span>
					<?endif;?>
					</div>
	<?}
	} //endforeach?>


	</div>
<?
if($arResult["isUseCaptcha"] == "Y")
{
?>
		<tr>
			<th colspan="2"><b><?=GetMessage("FORM_CAPTCHA_TABLE_TITLE")?></b></th>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" /><img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" width="180" height="40" /></td>
		</tr>
		<tr>
			<td><?=GetMessage("FORM_CAPTCHA_FIELD_TITLE")?><?=$arResult["REQUIRED_SIGN"];?></td>
			<td><input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext" /></td>
		</tr>
<?
} // isUseCaptcha
?>
<div class="form_row row">
	<div class="col-sm-6">
		<div class="policy">
			<input type="checkbox" class="custom-checkbox" id="policy" name="policy" value="yes">
			<label for="policy" class="policy_text -fs-15"><?=GetMessage("FORM_POLICY")?></label>
		</div>
	</div>
	<div class="col-sm-6">
		<input <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> disabled type="submit" name="web_form_submit" value="<?=htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" class="btn btn-primary"/>
		<?/*if ($arResult["F_RIGHT"] >= 15):?>
		<input type="hidden" name="web_form_apply" value="Y" /><input type="submit" name="web_form_apply" value="<?=GetMessage("FORM_APPLY")?>" />
		<?endif;*/?>
		<!-- <input type="reset" value="<?//=GetMessage("FORM_RESET");?>" /> -->
</div>	
<?/*		
<p>
<?=$arResult["REQUIRED_SIGN"];?> - <?=GetMessage("FORM_REQUIRED_FIELDS")?>
</p>
*/?>
<?=$arResult["FORM_FOOTER"]?>
<?
} //endif (isFormNote)?>
<script>
	$('#policy').on('change', function() {
		if($(this).prop('checked')) {
			$('.btn[type="submit"]').prop( "disabled", false );
		}else{
			$('.btn[type="submit"]').prop( "disabled", true );
		}
	});
</script>
<script>
  var inp = '<input type="hidden" name="ncapt" value="<?echo md5(date('Y-m-d').'www.novelgroup.ru');?>">';
  $(".section_form form").append(inp);
  
</script>

