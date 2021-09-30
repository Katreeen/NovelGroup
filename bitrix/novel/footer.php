<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?> 
<?if ($page == "/catalog/" || $page == "/en/catalog/"){?>
<?}else if ($page !== '/' || $page == "/en/"){?>
</div></div></div>
<?}?>



</main>
<footer class="footer">
	<div class="container">
		<div class="footer_row row">
			<div class="col-md-5 col-lg-5 col-xl-3 footer_col_copy">
			
				<div class="footer_copy -got-300 -fs-16">© 2021 <?echo GetMessage("FOOTER_COPY_TEXT")?></div>
			</div>
			<div class="col-md-7 col-lg-7 col-xl-5 footer_col_menu">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"bottom-menu",
					Array(
						"ROOT_MENU_TYPE" => "bottom", 
						"MAX_LEVEL" => "1", 
						"USE_EXT" => "Y", 
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => Array()
					)
				);?>
			
			</div>
			<div class="col-xl-4 d-xl-block d-none">
				<div class="footer_contact_row">
					<div class="footer_contact_phone">
						<a href="tel:88469798884" class="f-phone -got-600 -fs-18">8 (846) 979-88-84</a>
						<span class="f-phone_text -got-400 -fs-13"><?echo GetMessage("FOOTER_PHONE_INFO")?></span>
					</div>
					<div class="footer_callback_btn">
          
						<a data-fancybox data-src="#callback" href="javascript:;" class="callback btn btn-primary"><?echo GetMessage("FOOTER_CALLBACK")?></a>
					</div>
				</div>
			</div>
		</div>
		</div>
</footer>
<div id="callback" class="popup">
  <?if(SITE_ID == 'en'){
$APPLICATION->IncludeComponent("bitrix:form.result.new", "popup", Array( 
  "COMPONENT_TEMPLATE" => ".default", 
  "WEB_FORM_ID" => "4", 
  "IGNORE_CUSTOM_TEMPLATE" => "N", 
  "USE_EXTENDED_ERRORS" => "Y", 
  "SEF_MODE" => "N", 
  "CACHE_TYPE" => "A", 
  "CACHE_TIME" => "3600", 
  "LIST_URL" => "", 
  "EDIT_URL" => "", 
  "SUCCESS_URL" => "", 
  "CHAIN_ITEM_TEXT" => "", 
  "CHAIN_ITEM_LINK" => "", 
  "VARIABLE_ALIASES" => array( 
    "WEB_FORM_ID" => "WEB_FORM_ID", 
    "RESULT_ID" => "RESULT_ID", 
  ), 
  "AJAX_MODE" => "Y", // режим AJAX 
  "AJAX_OPTION_SHADOW" => "N", // затемнять область 
  "AJAX_OPTION_JUMP" => "Y", // скроллить страницу до компонента 
  "AJAX_OPTION_STYLE" => "N", // подключать стили 
  "AJAX_OPTION_HISTORY" => "N", 
  ), 
  false 
  );
  }else{
    $APPLICATION->IncludeComponent("bitrix:form.result.new", "popup", Array( 
      "COMPONENT_TEMPLATE" => ".default", 
      "WEB_FORM_ID" => "3", 
      "IGNORE_CUSTOM_TEMPLATE" => "N", 
      "USE_EXTENDED_ERRORS" => "Y", 
      "SEF_MODE" => "N", 
      "CACHE_TYPE" => "A", 
      "CACHE_TIME" => "3600", 
      "LIST_URL" => "", 
      "EDIT_URL" => "", 
      "SUCCESS_URL" => "", 
      "CHAIN_ITEM_TEXT" => "", 
      "CHAIN_ITEM_LINK" => "", 
      "VARIABLE_ALIASES" => array( 
        "WEB_FORM_ID" => "WEB_FORM_ID", 
        "RESULT_ID" => "RESULT_ID", 
      ), 
      "AJAX_MODE" => "Y", // режим AJAX 
      "AJAX_OPTION_SHADOW" => "N", // затемнять область 
      "AJAX_OPTION_JUMP" => "Y", // скроллить страницу до компонента 
      "AJAX_OPTION_STYLE" => "N", // подключать стили 
      "AJAX_OPTION_HISTORY" => "N", 
      ), 
      false 
      );
  }
  ?>
</div>






</div>

<div class="preloader">
  <svg class="preloader__image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path fill="currentColor"
      d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z">
    </path>
  </svg>
</div>
<style>
.preloader { position: fixed; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; background: #e0e0e0; z-index: 1001; }
.preloader__image { position: relative; top: 50%; left: 50%; width: 70px; height: 70px; margin-top: -35px; margin-left: -35px; text-align: center; animation: preloader-rotate 2s infinite linear; }
@keyframes preloader-rotate {
  100% {
    transform: rotate(360deg);
  }
}
.loaded_hiding .preloader { transition: 0.3s opacity; opacity: 0; }
.loaded .preloader { display: none; }
</style>
<script>
  window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 500);
  }
</script>



</body>
</html>



