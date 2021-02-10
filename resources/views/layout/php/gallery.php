<?php

$dir='../album';

$list=scandir($dir,1);

$isFolder=array();

foreach ($list as $value) {

	if (is_dir($dir.'/'.$value) && $value!='.' && $value!='..') {

		$isFolder[]=$value;

	}

}

$gallery="";

foreach ($isFolder as $id => $folderName) {

	$imageList=glob($dir.'/'.$folderName.'/*.jpg');

	$imageList=$imageList[0];

	$gallery.=<<<GAL

<div class="gallery-boxes">

	<div class="gallery-content">

	<a href="../php/gallery-mode.php?img=$id" class="open-right-window">

		<div class="gallery-image">

			<img src="$imageList" class="center img-responsive"/>

		</div>

		<div class="gallery-caption">

			$folderName

		</div>

	</a>

	</div>

</div>

GAL

;

}

echo $gallery;

?>