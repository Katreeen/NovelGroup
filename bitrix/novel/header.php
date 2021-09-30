<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<?$page = $APPLICATION->GetCurPage(false);?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
	<head>

		<title><?$APPLICATION->ShowTitle()?></title>
		<?$APPLICATION->ShowHead();?>
		<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/i/favicon/favicon.ico" />
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/libs/bootstrap5/bootstrap.min.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/libs/fancybox/jquery.fancybox.min.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/libs/slick/slick.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/libs/slick/slick-theme.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/libs/jquery/jquery-ui/jquery-ui.min.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/libs/jquery/jquery-ui/jquery-ui.theme.min.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/libs/animate/splitting.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/libs/animate/splitting-cells.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/libs/animate/animate.min.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/common.css');




			$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/libs/jquery/jquery-3.4.1.min.js');
			$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/libs/bootstrap5/bootstrap.min.js');
			$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/libs/fancybox/jquery.fancybox.min.js');
			$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/libs/slick/slick.min.js');
			$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/libs/jquery/jquery.maskedinput.min.js');
			$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/libs/jquery/jquery-ui/jquery-ui.min.js');
      $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/libs/animate/SmoothScroll.min.js');
			$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/libs/animate/wow.min.js');
      $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/libs/animate/gsap.min.js');
      $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/libs/animate/ScrollTrigger.min.js');
      
			$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/libs/animate/SplitText.min.js');
			
			$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/libs/animate/splitting.min.js');
			
			$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/common.js');
      $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/animation.js');
		?>

</head>

<body class="<?$APPLICATION->AddBufferContent('body_class');?>" data-bs-spy="scroll" data-bs-target="#fix-menu">
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
  <div class="wrapper">
		<header class="header">
			<div class="container">
				<div class="header_row row">
					<div class="col-7 col-sm-4 col-md-4 col-lg-3 col-xl-2 header_col_logo">
						<a	href="/" class="header_logo"><img src="<?=SITE_TEMPLATE_PATH?>/i/logo.png" alt=""></a>
					</div>
					<div class="col-lg-3 col-xl-3 col-xxl-4 header_col_search">
						<div class="header_search">
							<?
							$APPLICATION->IncludeComponent("bitrix:search.form", "search-form", 
							Array("PAGE" => "/search/",),false);
							?>
						</div>
					</div>
					<div class="col-2 col-sm-6 col-md-7 col-lg-6 col-xl-5 header_col_contact">
						<div class="header_contact_phone_row">
							<div class="header_contact_phone">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_TEMPLATE_PATH . "/inc/header_phone.php",
									"EDIT_TEMPLATE" => "include_areas_template.php"
									), false
								);?>
								<span class="h-phone_text"><?echo GetMessage("HEADER_PHONE_INFO")?></span>
							</div>
							<div class="header_callback_btn">
								<a data-fancybox data-src="#callback" href="javascript:;" class="callback btn btn-primary"><?echo GetMessage("HEADER_CALLBACK")?></a>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-lg-2 col-xl-1 header_col_lang">
						<div class="header_lang -fs-20 ">
            <?if (SITE_ID == "en"){
              $le = substr($_SERVER['REQUEST_URI'], 3);
              echo '<a href="//' . $_SERVER['SERVER_NAME'] . $le . '" class="lang">Ru</a><a href="//' . $_SERVER['SERVER_NAME'] . '/en' . $_SERVER['REQUEST_URI'] . '" class="lang active">En</a>';
              } else {
              echo '<a href="//' . $_SERVER['SERVER_NAME'] . $le . '" class="lang active">Ru</a><a href="//' . $_SERVER['SERVER_NAME'] . '/en' . $_SERVER['REQUEST_URI'] . '" class="lang">En</a>';
              }
            ?>


							
						</div>
					</div>
					<div class="col-3 col-sm-2 col-md-1 header_col_burger">
						<button class="navbar-toggler"></button>
					</div>
				</div>
			</div>
		</header>
		<div class="grid"></div>
		<main class="main">
    <?if (!defined("ERROR_404")){?>
			<div class="main_nav">
				<div class="container">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"fix-menu",
						Array(
							"ROOT_MENU_TYPE" => "fix", 
							"MAX_LEVEL" => "2", 
							"CHILD_MENU_TYPE" => "left", 
							"USE_EXT" => "Y", 
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => Array()
						)
					);?>
				</div>
			</div>
    <?}?>
			<div class="header_drop">
				<div class="header_drop_top">
					<div class="container">
						<div class="header_drop_row row">
							<div class="col-7 col-sm-4 col-md-3 col-lg-2 col-xl-2 header_drop_col_logo">
								<a	href="/" class="header_drop_logo"><img src="<?=SITE_TEMPLATE_PATH?>/i/logo.png" alt=""></a>
							</div>
							<div class="col-sm-5 col-md-6 col-lg-4 col-xl-5 header_drop_col_search">
								<?
								$APPLICATION->IncludeComponent("bitrix:search.form", "search-drop", 
								Array("PAGE" => "/search/",),false);
								?>
								
							</div>
							<div class="col-sm-5 col-lg-3 col-xl-3 header_drop_col_contact">
								<div class="header_drop_contact_phone_row">
									<div class="header_drop_contact_phone">
										<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
											"AREA_FILE_SHOW" => "file",
											"PATH" => SITE_TEMPLATE_PATH . "/inc/header_phone.php",
											"EDIT_TEMPLATE" => "include_areas_template.php"
											), false
										);?>
										<span class="h-phone_text"><?echo GetMessage("HEADER_PHONE_INFO")?></span>
									</div>
								</div>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-1 header_drop_col_lang">
								<div class="header_drop_lang -fs-20 ">
									<a href="/" class="lang active">Ru</a>
									<a href="/en/" class="lang">En</a>
								</div>
							</div>
							<div class="col-5 col-sm-1 col-md-1 header_drop_col_burger">
								<button class="navbar-toggler-close"></button>
							</div>
						</div>
					</div>
				</div>
				<div class="header_drop_menu">
					<div class="container">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"drop-menu",
						Array(
							"ROOT_MENU_TYPE" => "drop", 
							"MAX_LEVEL" => "2", 
							"CHILD_MENU_TYPE" => "left", 
							"USE_EXT" => "Y", 
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => Array()
						)
					);?>
					</div>
				</div>
				<div class="header_drop_bottom">
					<div class="container">
						<div class="header_drop_bottom_callback">
							<a href="#" class="callback"><?echo GetMessage("HEADER_CALLBACK_LINK")?></a>
						</div>
						<div class="header_drop_bottom_contact_phone">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/inc/header_phone.php",
							"EDIT_TEMPLATE" => "include_areas_template.php"
							), false
						);?>
							<span class="h-phone_text"><?echo GetMessage("HEADER_PHONE_INFO")?></span>
						</div>
						<div class="header_drop_bottom_lang -fs-20 ">
							<span><?echo GetMessage("HEADER_LANG_TO")?> 
							<a href="/" class="lang active"><?echo GetMessage("HEADER_LANG_RU")?></a>
							<a href="/en/" class="lang"><?echo GetMessage("HEADER_LANG_ENG")?></a>
							</span>
						</div>
					</div>
				</div>
			</div>
     
			<?if ($page !== '/' && !defined("ERROR_404") && $page !== '/en/'){?>
				<nav aria-label="breadcrumb" class="breadcrumbs">
					<div class="container">
						<?$APPLICATION->IncludeComponent(
						"bitrix:breadcrumb", "breadcrumb" , array( "COMPONENT_TEMPLATE"=> "breadcrumb",
						"START_FROM" => "0",
						"PATH" => "",
						"SITE_ID" => "s1"
						),
						false
						);?>
					</div>
				</nav>
				<div class="main_content">
					<?if ($page == "/catalog/" || $page == "/en/catalog/"){?>
						
					<?}else{?>
						<div class="container">
							<div class="content offset-xxl-2">
                
								<h1><?!$APPLICATION->AddBufferContent('h1');?></h1>
					<?}?>
					
			<?}?>