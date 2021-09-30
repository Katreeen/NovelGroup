<div class="section section_form">
	<div class="container">
	<div class="section_content offset-xxl-2">
		<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "question-form", Array(
			"SEF_MODE" => "N",	// Включить поддержку ЧПУ
			"WEB_FORM_ID" => "2",	// ID веб-формы
			"LIST_URL" => "",	// Страница со списком результатов
			"EDIT_URL" => "r",	// Страница редактирования результата
			"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
			"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
			"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
			"IGNORE_CUSTOM_TEMPLATE" => "Y",	// Игнорировать свой шаблон
			"USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CACHE_TIME" => "3600",	// Время кеширования (сек.)
			"SEF_FOLDER" => "/",	// Каталог ЧПУ (относительно корня сайта)
			"VARIABLE_ALIASES" => "",
			"AJAX_MODE" => "Y",
			"AJAX_OPTION_SHADOW" => "N",
			"AJAX_OPTION_JUMP" => "Y",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N"
			),
			false
		);?>
		
		</div>
	</div>
</div>