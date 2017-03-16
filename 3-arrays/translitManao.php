<?php
//в качестве входного параметра принимает ID инфоблока
function translitManao($iblockID){
	$arSelect = Array("IBLOCK_ID", "ID", "NAME", "CODE");
	$arFilter = Array("IBLOCK_ID" => $iblockID, "ACTIVE" => "Y");
	
	$el = new CIBlockElement;
	$res = $el->GetList(Array(), $arFilter, false, Array(), $arSelect);
	$arParams = array("replace_space"=>"-","replace_other"=>"-");

	while($ob = $res->GetNextElement()){
		$arFields = $ob->GetFields();
		
		$arLoadProductArray = Array(
			"CODE" => Cutil::translit($arFields['NAME'],"ru",$arParams)
		);

		$PRODUCT_ID = $arFields['ID'];
		$update = $el->Update($PRODUCT_ID, $arLoadProductArray);
	}
}