<?php

function da_or_de($word) {
	if(strlen($word) < 2) {
		return "";
	}
	$kalins = "aıouAIOU";
	$inces = "eiöüEİÖÜ";
	for($i = mb_strlen($word, "utf-8") - 1; $i != 0; $i--) {
		$char = mb_substr($word, $i, 1, "utf-8");
		if(mb_strpos($kalins, $char, 0, "utf-8") !== false) {
			return "da";
		} else if(mb_strpos($inces, $char, 0, "utf-8") !== false) {
			return "de";
		}
	}
	return "";
}

?>
