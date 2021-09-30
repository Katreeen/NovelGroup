<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="popup_wrap">
  <?
  if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
  <?=$arResult["FORM_NOTE"]?>
  <?if ($arResult["isFormNote"] != "Y")
  {
  ?>
  <div class="popup_header">
    <?=$arResult["FORM_HEADER"]?>

    <?
    if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y")
    {
    ?>

    <?
    if ($arResult["isFormTitle"])
    {
    ?>
    <div class="popup_title"><?=$arResult["FORM_TITLE"]?></div>
    <?
    } //endif ;

    if ($arResult["isFormImage"] == "Y")
    {?>
    <a href="<?=$arResult["FORM_IMAGE"]["URL"]?>" target="_blank" alt="<?=GetMessage("FORM_ENLARGE")?>"><img src="<?=$arResult["FORM_IMAGE"]["URL"]?>" <?if($arResult["FORM_IMAGE"]["WIDTH"] > 300):?>width="300"<?elseif($arResult["FORM_IMAGE"]["HEIGHT"] > 200):?>height="200"<?else:?><?=$arResult["FORM_IMAGE"]["ATTR"]?><?endif;?> hspace="3" vscape="3" border="0" /></a>
    <?//=$arResult["FORM_IMAGE"]["HTML_CODE"]?>
    <?} //endif?>

    <div class="popup_text -center"><?=$arResult["FORM_DESCRIPTION"]?></div>
      
    <?
    } // endif
    ?>
  </div>


  <div class="popup_body">

    <?
    foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
    {
      if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
      {
        echo $arQuestion["HTML_CODE"];
      }
      else
      {
    ?>
    <div class="popup_group">
    <?
      $tmp = $arQuestion["HTML_CODE"];
      if ($arQuestion["REQUIRED"] == "Y"){
        $required = '*';
      }else{
        $required = '';
      }
      $isphone = '';
      if ($FIELD_SID == 'SIMPLE_QUESTION_899' || $FIELD_SID == 'SIMPLE_QUESTION_422'){
        $isphone = 'form-tel';
      }

      $mainclass = 'id="Q'.$FIELD_SID.'" class="form-control '.$isphone.'" placeholder="'.$arQuestion["CAPTION"].$required.'"';
      ?>
      
      <div class="popup_item">
        <?
        $tmp = str_replace('class="inputtext"', $mainclass, $tmp);
        $arQuestion["HTML_CODE"] = $tmp;
        echo $tmp;
        ?>
      </div>
      <?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
        <span class="error"><?=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?></span>
      <?endif;?>
    </div>


    
    
    
      
        

    <?
      }
    } //endwhile
    ?>
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
  <div class="popup_bottom -center">
          <input <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" class="btn-third"/>
          <?if ($arResult["F_RIGHT"] >= 15):?>
          <input type="hidden" name="web_form_apply" value="Y" />
          <input type="submit" name="web_form_apply" value="<?=GetMessage("FORM_APPLY")?>" class="d-none"/>
          <?endif;?>
          <input type="reset" value="<?=GetMessage("FORM_RESET");?>" class="d-none" />
          <div class="policy_text -fs-15"><?=GetMessage("FORM_POLICY")?></div>

  
  <p>
  <?=$arResult["REQUIRED_SIGN"];?> - <?=GetMessage("FORM_REQUIRED_FIELDS")?>
  </p>
  <?=$arResult["FORM_FOOTER"]?>
  <?
  } //endif (isFormNote)
  ?>
  </div>
</div>
<?if(SITE_ID == 'en'){?>
  <script>
   
    console.log(name);
    document.getElementById("QSIMPLE_QUESTION_138").value = name;
    $('#QSIMPLE_QUESTION_138').attr('readonly','readonly');

  </script>
<?}else{?>
  <script>
   
    console.log(name);
    document.getElementById("QSIMPLE_QUESTION_153").value = name;
    $('#QSIMPLE_QUESTION_153').attr('readonly','readonly');

  </script>
<?}?>
<script>
  var inp = '<input type="hidden" name="ncapt" value="<?echo md5(date('Y-m-d').'www.novelgroup.ru');?>">';
  $("#question form").append(inp);
  
</script>
        