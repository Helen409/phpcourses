<?php
	$menu=array(
				array('link'=>'1 урок','href'=>'index.php?lesson=1'),
				array('link'=>'2 урок','href'=>'index.php?lesson=2'),
				array('link'=>'3 урок','href'=>'index.php?lesson=3'),
				array('link'=>'4 урок','href'=>'index.php?lesson=4'),
				array('link'=>'5 урок','href'=>'index.php?lesson=5'),
				array('link'=>'6 урок','href'=>'index.php?lesson=6'),
				array('link'=>'7 урок','href'=>'index.php?lesson=7'),
				array('link'=>'9 урок','href'=>'index.php?lesson=9'),
			);
function drawMenu($menu, $vertical=true){
			echo "<ul class='tm-main-nav-ul'>\n";
			foreach ($menu as $value){
				echo "<li  class='tm-nav-item'><a class='tm-nav-item-link' href='".
				      $value['href'].
					 "' >".$value['link']."</a></li>\n";
			}
			echo "</ul>\n";
		}		
?>
	<div id="nav">
	<h2>Навигация по сайту</h2>
<?php
		drawMenu($menu, true);
?>
</div>			

