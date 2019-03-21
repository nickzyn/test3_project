<?php 

/**
* 
*/
class Number
{
	function m ($maopao) 
	{
		
		for ($i=0; $i < count($maopao); $i++) { 
			if ($maopao[$i] == max($maopao)) {
				$maxkey = $i;
			}elseif ($maopao[$i] == min($maopao)) {
				$minkey = $i;
			}
		}
		$temp = $maopao[$maxkey];
		$maopao[$maxkey] = $maopao[$minkey];
		$maopao[$minkey] = $temp;
		min($maopao);
		var_dump($maopao);
	}
}
echo "<pre>";
$arr = [1, 5, 7, 18, 7, 3, 2];
$obj = new Number;
$obj->m($arr);
echo "</pre>";


echo "string";

 ?>