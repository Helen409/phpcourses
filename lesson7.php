
<p>Урок 7</p>
<p>Написать функцию которая генерирует случайный пароль , в качестве аргумента принимает число определяющее длину пароля<br></p>
<form action='index.php?lesson=7' method='POST'>
	<label>Символов в пароле:&nbsp&nbsp </label><input name='numbers' type='text' value="" /><br />
	<input type='submit' value='Создать пароль' />
</form>
<?php

	function make_password($len){
		$i=0;
		$chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
		$pass='';
		
		
		for ($i=0;$i<$len;$i++){
			//echo rand(0,strlen($chars)),'<br>';
			$c=$chars{rand(0,strlen($chars))};
			$pass=$pass.$c;
		} 
		//echo $pass,'<br>';
		return $pass;
	}
	
	$result=make_password((int)$_POST['numbers']);
	//print_r($result);
	echo 'Пароль - ',$result;
		
?>
<hr>
<p>Написать функцию которая принимает переданное 6-значное число из формы, и определяет совпадают ли первые 3 цифры с последними. Если условие выполняется, то выводится сообщение об успехе, иначе о неудаче</p>
<form action='index.php?lesson=7' method='POST'>
	<label>Шестизначное число:&nbsp&nbsp </label><input name='chislo' type='text' value="" /><br />
	<input type='submit' value='Проверка' />
</form>
<?php
$chislo=(string)$_POST['chislo'];
if (strlen($chislo)!=6) {
	echo 'Число не шестизначное!';
}
else {
	$bool=true;
	for ($i=0;$i<3;$i++){
		echo $chislo{$i},' - ',$chislo{$i+3},'<br>';
		if ($chislo{i}!=$chislo{i+3}) $bool=false;
	}
	echo 'Число - ',$chislo,'<br>';
	if ($bool) echo 'Первые 3 цифры совпадают с последними';
	else echo 'Первые 3 цифры НЕ совпадают с последними';
	
}
?>
<hr>
<p><strong>Задача разменный автомат</strong></p>
<p>В функцию передается некое целое число являющееся  суммой (N), которую нужно выплатить, в функции определен массив номиналов array(‘1’=>1,’2’=>2,’5’=>5,’10’=>10,’20’=>20,’50’=>50,’100’=>100,’200’=>200,’500’=>500) функция 
должна определить какое количество каждой купюры необходимо выплатить исходя из числа N и вернуть результат в виде массива. </p>
<form action='index.php?lesson=7' method='POST'>
	<label>Какую сумму над выдать? &nbsp&nbsp</label><input name='summa' type='text' value="" /><br />
	<input type='submit' value='Выдать' />
</form>
<?php
$arr=array('500'=>500,'200'=>200,'100'=>100,'50'=>50,'20'=>20,'10'=>10,'5'=>5,'2'=>2,'1'=>1);
$summa=(int)$_POST['summa'];
echo '<br>Выдать сумму: ',$summa,'<br>';
$result=array();
foreach ($arr as $value){
	while ($summa>=$value){
		echo $value,'   ';
		$result=$value;
		$summa=$summa-$value;
	}
//foreach ($result as $value){ echo $value,',  ';}
//var_dump($result);	
	
}

?>