
                                <p>Урок 6</p>
																		<?php
																		echo 'Рекурсивная функция <br>';
																$a=1;
																example($a);
																function example($a){
																			if ($a<20){
																		echo $a,'<br>';
																		example($a+1);
																	}
																}
																?>