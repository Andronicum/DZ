﻿<?php
	
$i = 0;
$menu = array();

$menu[$i]['url']='#1';
$menu[$i++]['name']='Название раздела 1';

$menu[$i]['url']='#2';
$menu[$i++]['name']='Название раздела 2';

$menu[$i]['url']='#3';
$menu[$i++]['name']='Название раздела 3';

$menu[$i]['url']='#4';
$menu[$i++]['name']='Название раздела 4';

$menu[$i]['url']='#5';
$menu[$i++]['name']='Название раздела 5';

$menu[$i]['url']='#6';
$menu[$i++]['name']='Название раздела 6';
?>
<h4>Меню</h4>
<?php 
echo "<ul>\n";
for ($i = 0; $i < count($menu);$i++){
	echo ($_SERVER["REQUEST_URI"] == $menu[$i]['url']) ? '<li class="active">': '<li>';
       echo "<a href=\"".$menu[$i]['url']."\">".$menu[$i]['name']."</a></li>\n";
}
echo "</ul>";
?>
<div id="1">
Это текст для <br><b>Первого раздела</b><br> Это текст для <b><br>Первого раздела</b><br> Это текст для <b><br>Первого раздела</b><br>Это текст для <b><br>Первого раздела</b><br> Это текст для <b><br>Первого раздела</b>
</div>
<br>
<div id="2">
Это текст для <br><b>Второго раздела</b><br>Это текст для <br><b>Второго раздела</b><br>Это текст для <br><b>Второго раздела</b><br>Это текст для <br><b>Второго раздела</b><br>Это текст для <br><b>Второго раздела</b><br>
</div>
<br>
<div id="3">
Это текст для <br><b>Третьего раздела</b><br>Это текст для <br><b>Третьего раздела</b><br>Это текст для <br><b>Третьего раздела</b><br>Это текст для <br><b>Третьего раздела</b><br>Это текст для <br><b>Третьего раздела</b><br>
</div>
<br>
<div id="4">
Это текст для<br><b>Четвертого раздела</b><br>Это текст для<br><b>Четвертого раздела</b><br>Это текст для<br><b>Четвертого раздела</b><br>Это текст для<br><b>Четвертого раздела</b><br>Это текст для<br><b>Четвертого раздела</b><br>
</div>
<br>
<div id="5">
Это текст для <br><b>Пятого раздела</b><br>Это текст для <br><b>Пятого раздела</b><br>Это текст для <br><b>Пятого раздела</b><br>Это текст для <br><b>Пятого раздела</b><br>Это текст для <br><b>Пятого раздела</b><br>
</div>
<br>
<div id="6">
Это текст для <br><b>Шестого раздела</b><br>Это текст для <br><b>Шестого раздела</b><br>Это текст для <br><b>Шестого раздела</b><br>Это текст для <br><b>Шестого раздела</b><br>Это текст для <br><b>Шестого раздела</b><br>
</div>
<br>