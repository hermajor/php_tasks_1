<?php
//в качестве входного параметра принимает ID инфоблока
function translitManao($iblockID){
	$arSelect = Array("IBLOCK_ID", "ID", "NAME", "CODE");
	$arFilter = Array("IBLOCK_ID" => $iblockID);
	
	$IBElement = new CIBlockElement;
	$getList = $IBElement->GetList(Array(), $arFilter, false, Array(), $arSelect);

	foreach($getList->arResult as $element){
		$newCode = Cutil::translit($element['NAME'],"ru",array("replace_space"=>"-","replace_other"=>"-"));

		if ($element['CODE'] != $newCode) {
			$update = $IBElement->Update($element['ID'], Array("CODE" => $newCode));
			
			if ($update == false) {
				echo 'В ходе обновления свойств элемента с ID: ' . $element['ID'] . '<br>';
				echo 'произошла ошибка: ' . $update->LAST_ERROR . '<br>';
			} 
		}
	}
}