
<p>Урок 9</p>
<p>Написать программу которая ищет слово в файле произвольной длины<br></p>
<form action='index.php?lesson=9' method='POST'>
	<label>Файл:&nbsp&nbsp </label><input name='filename' type='text' value="index.php" /><br />
	<label>Слово:&nbsp&nbsp </label><input name='word' type='text' value="Курсы" /><br />
	<input type='submit' value='Искать слово в файле' />
</form>

<?php
			if($_SERVER['REQUEST_METHOD'] == "POST") {
				$filename=trim(strip_tags($_POST['filename']));
				$word=trim(strip_tags($_POST['word']));
				echo 'Ищем слово '.$word.' в файле '.$filename,'<br>';
				$wordlength=(int)strlen($word);
		
				if (file_exists($filename)){
					$flink=fopen($filename,r) ;
					$fstr=file_get_contents ($filename);
					if (strripos ($fstr,$word)){
							echo "<p style='color:red;'>".'Нашел! -'.$word.'</p>';
					} else echo 'Не нашел(';
					fclose($flink);
				}
				else echo 'Такого файла не существует';
			}
		
?>
<p>Написать программу ищет слово во всех файлах которые находятся в заданной директории и выводит список файлов где это слово содержится<br></p>
<form action='index.php?lesson=9' method='POST'>
	<label>Слово:&nbsp&nbsp </label><input name='wordall' type='text' value="Курсы" /><br />
	<input type='submit' value='Искать слово во всех файлах' />
</form>
<?php
			if($_SERVER['REQUEST_METHOD'] == "POST") {
				$wordall=trim(strip_tags($_POST['wordall']));
				$dir='.';
				if(  ( $dh = opendir($dir) ) !== null  ) {
					echo 'Все файлы в данном каталоге:<br>';
					while ( ( $file = readdir($dh) ) !== false) {
						
             if (($file!='.') and ($file!='..')) 
							 echo $file ."<br/>";
						 $flinkall=fopen($file,r) ;
						 $fstrall=file_get_contents ($file);
						 if (strripos ($fstrall,$wordall)){
								echo "<p style='color:red;'>".'Нашел! -'.$word.' в файле '.$file.'</p>';
						} 
						fclose($flink);
          }
				}
			}
?>
<p>Написать программу(скрипт) которая передает текстовый файл из html-формы, загруженный файл помещается в каталог «uploads», если файл с таким именем уже существует, то его необходимо сохранить под другим именем. 
После того как файл был загружен все его содержимое нужно записать в файл «log.txt», сохранив при этом информацию которая в нем содержится.</p>
<form action='index.php?lesson=9' method='POST' enctype='multipart/form-data'>
	<label>Файл:&nbsp&nbsp </label><input name='uploadfile' type='file' value="" /><br />
	<input type='submit' value='Загрузить' />
</form>
<?php
function newName($path, $filename) {
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	$fnameNoExt = pathinfo($filename,PATHINFO_FILENAME);
	$i=1;
    while(file_exists("$path/$fnameNoExt($i).$ext")) {		$i++;		}
    return "$path/$fnameNoExt($i).$ext";
}

$uploaddir ='c:/OSPanel/domains/phpcourses/uploads/';
$filename=$_FILES['uploadfile']['name'];
$destfile=$uploaddir.$filename;
if (file_exists($destfile)){
	$destfile=newName($uploaddir,$filename);	
	echo 'Такой файл уже существует, запишем его в '.$destfile.'<br>';
} ; 
if (!move_uploaded_file($_FILES['uploadfile']['tmp_name'], $destfile)) echo 'Файл не был загружен';	
 else {
		echo 'Файл удачно загружен!';
	 	$flink=fopen($destfile,r);
		copy($destfile,$uploaddir.'log.txt');
	 
 }

if (!is_uploaded_file($_FILES['uploadfile']['tmp_name'])	) {

	
}
?>






























