<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->createFrame()->begin("Загрузка навигации");
?>

<?if($arResult["NavPageCount"] > 1):?>

    <?if ($arResult["NavPageNomer"]+1 <= $arResult["nEndPage"]):?>
        <?
            $plus = $arResult["NavPageNomer"]+1;
            $url = $arResult["sUrlPathParams"] . "PAGEN_".$arResult["NavNum"]."=".$plus;

        ?>

        <div class="load_more news_more_btn" data-url="<?=$url?>">
		  	<span class="btn btn-primary">Показать еще</span>
        </div>

    <?else:?>

        <div class="load_more news_more_btn">
		  <span class="btn btn-primary">Загружено все</span>
        </div>

    <?endif?>

<?endif?>
