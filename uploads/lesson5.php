
                                <p>Урок 5</p>
																<?php
																echo 'Написать 2 функции сортировки массивов, используя алгоритмы «Сортировка обменами», «Сортировка вставками»','<br>';
																echo 'Первая сортировка обменами:','<br>';
																$arr=array();
																for ($i=0;$i<100;$i++){
																	$arr[]=rand(1,100);
																	;
																}
																echo 'Исходный массив: ';
																for ($i=0;$i<100;$i++){
																	echo ($arr[$i]),'   ';
																	;
																}
																$temp=0;
																$kol=0;
																do {$kol++;
																	$sort=false;
																		for ($i=0;$i<100;$i++){
																			if ($arr[$i]>$arr[$i+1]){
																				$sort=true;
																				$temp=$arr[$i];
																				$arr[$i]=$arr[$i+1];
																				$arr[$i+1]=$temp;
																			}
																		}
																		
																} while ($sort);
																echo '<br> Отсортированный массив: ','<br>';
																	for ($i=0;$i<100;$i++){
																		echo ($arr[$i]),'   ';
																	}
																	echo '<hr>';
																echo '<br>','Вторая сортировка вставками:','<br>';
																	$arr2=array();
																	for ($i=0;$i<100;$i++){
																		$arr2[]=rand(1,100);
																		;
																	}
																	echo 'Исходный массив: ';
																	for ($i=0;$i<100;$i++){
																		echo ($arr2[$i]),'   ';
																		;
																	}
																	echo '<br>';
																	$first=0;
																	$second=0;
																	$kol=0;
																	for($i=1;$i<100;$i++){
																		
																		for($j=$i; (($j>0) && ($arr2[$j-1]>$arr2[$j]));$j--){
																			$kol++;
																			$first=$arr2[$j-1]; 
																			$second=$arr2[$j];
																			$arr2[$j-1]=$second;
																			$arr2[$j]=$first;
																		}	
																			//echo '<br>';
																		/*	for ($k=0;$k<10;$k++){
																				echo ($arr2[$k]),'  ';
																			}*/
																	}     
																echo '<br> Отсортированный массив: ','<br>';
																	for ($i=0;$i<100;$i++){
																		echo ($arr2[$i]),'   ';
																	}
																?>
                           