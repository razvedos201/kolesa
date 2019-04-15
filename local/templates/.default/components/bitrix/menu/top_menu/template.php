<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!empty($arResult)){?>
    <ul class="top-bar-menu">
        <?foreach($arResult as $arItem){
           if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1){ continue; }

        	if($arItem["SELECTED"]){
        	   echo '<li><a class="selected" href="'.$arItem["LINK"].'">'.$arItem["TEXT"].'</a></li>';
        	}else{
        	   echo '<li><a href="'.$arItem["LINK"].'">'.$arItem["TEXT"].'</a></li>';
        	}
        }?>
    </ul>  
<?}?>