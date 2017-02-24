<?php
//namespace model\classes;
//$str = array("A", "B", "C", "D");
$str = 'O1234';
$len = 3;

$arrStr = str_split($str);
$arrRange = (range(0, $len-1));

$lastStr = (count($arrStr) - 1); // последний индекс входного массива - 0123[4]
$lastRange = (count($arrRange) - 1); // последний индекс/он же сейчас и Значение массива Длины - 01[2]
$index = $lastRange;

$arrResult = array();//
$flag = 0;

if ($arrRange[3] === null) {
	echo 'Работает NULL!';
}

	for ($i = 0; $i <= 30; $i++) {
		/*//проверка на повторы значений в массиве
		//if (array_unique($arrRange) == $arrRange) {
			echo '<pre>'.print_r($arrRange, true).'</pre>';
		//}
		
		$arrRange[$index]++;
		echo var_dump($arrRange[$index]);*/
		
		if ($arrRange[$index] > $lastStr) {
			$arrRange[$index] = 0;
			$index--;
			//$arrRange[$index]++;
				if ($arrRange[$index + 1] !== null && $arrRange[$index] < $lastStr) {
					$arrRange[$index]++;
					//$flag--;
					$index++;
				} else {
					echo 'Нужно перейти на следующий индекс [0] -- и увеличить его на 1, 
						а потом обратно перейти к последнему и начать всё сначала';
					//break;
					//$index--;
				}
			//$flag++;
			//break;
		}
		if ($index < 0){
			echo '$index меньше нуля! <br>';
			break;
		}
		
		//проверка на повторы значений в массиве
		//if (array_unique($arrRange) == $arrRange) {
			echo '<pre>'.print_r($arrRange, true).'</pre>';
		//}
		
		$arrRange[$index]++;
		echo var_dump($arrRange[$index]);
		
	}
	
	
	
//var_dump(foo());
/*function foo(){
    $i = $arrRange[$lastRange] + 1;
    $end = $lastStr + 1;
      
    while($i != $end){
        if(in_array($i, $arrRange, true)){
            if($i == $lastStr){
				$arrRange[$lastRange] = null;
				break;
            }
            $i++;
            continue;
        }
        $arrRange[$lastRange] = $i;
        break;
    }
      
    if($arrRange[$lastRange] === null){
        $lastRange--;
        //if($this->setIndex()){
			return foo();
        //}
        //return false;
    }  
    return true;
}*/
	
//echo $lastRange;
/*
	for ($i = 0; $i <= 30; $i++) {
		echo '<pre>'.print_r($arrRange, true).'</pre>';
		
		$arrRange[$index]++;
		echo var_dump($arrRange[$index]);
		if ($arrRange[$index] > $lastStr){
			$arrRange[$index] = null;
			$index--;
			//break;
		}
		if ($index < 0){
			echo '$index меньше нуля! <br>';
			break;
		}
		if (in_array(null, $arrRange, true)){
			$arrRange[$index]++;
			
			if ($arrRange[$index] > $lastStr){
				$arrRange = array();
				for ($i = 0; $i < $len; $i++) {
					$arrRange[$i] = 0;
				}
				echo 'КОНЕЦ! <br>';
				echo '<pre>'.print_r($arrRange, true).'</pre>';
				break;
			}
			echo 'null в массиве! <br>';
			$index++;
			$arrRange[$index]=0;
			

			//echo '<pre>'.print_r($arrRange, true).'</pre>';
			//$arrRange[$index]++;// = 0;
			//echo '<pre>'.print_r($arrRange, true).'</pre>';
			//break;
		}
	}
*/
/*
echo '<pre>';
print_r($arrLen);
echo '</pre>';
*/