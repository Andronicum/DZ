
<?php /* Домашнее заданик №2 - Выбираем приветствие в зависимости от
времени суток (день, утро , вечер, ночь)*/
	echo "Сейчас " . date("G") . " ч. " . date("i") . " мин." ; 
?>
	<br>
	<br> 
<?php
	$friend = " Друг"; /**/
	$time=date("G");
	
	switch($time){
		
		
		case $time>=6 && $time<12:
			echo "Доброе утро!" . $friend . " !!!";
		break;
		
		
		case $time>=12 && $time<18:
			echo "Добрый день!"  . $friend . " !!!";
		break;
		
		
		case $time>=18 && $time<24:
			echo "Добрый вечер!" . $friend . " !!!";
		break;
		
		
		case $time>=0 && $time<6:
			echo "Доброй ночи!" . $friend . " !!!";
		break;
		
	}
?>

