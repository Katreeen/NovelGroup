<div class="section section_catalog">
	<div class="container-fluid p-0">
		<div class="section_catalog_wrap pl-js">
			<div class="cursor">Leaf</div>
			<div class="catalog_carousel_wrap">
				<div class="catalog_btn vertical-link"><a href="/en/catalog/" class="btn-link">Catalog</a></div>
				<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"category-carousel", 
	array(
		"COMPONENT_TEMPLATE" => "category-carousel",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "15",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "sectionsFilter",
		"VIEW_MODE" => "LINE",
		"SHOW_PARENT_NAME" => "Y",
		"SECTION_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"CACHE_FILTER" => "N",
		"ADD_SECTIONS_CHAIN" => "N"
	),
	false
);?>

		</div>
	</div>
</div>