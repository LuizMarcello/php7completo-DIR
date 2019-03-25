<?php
$imagens = scandir("imagesEufiz");

//var_dump($imagens);

$data = array();

foreach($imagens as $img){
	
	if(!in_array($img, array(".",".."))){
		
		$filename = "imageseufiz" .DIRECTORY_SEPARATOR. $img; 
		$info = pathinfo($filename);
		$info["size"]=filesize($filename);
		$info["modified"]=date("d/m/Y H:m:s", filemtime($filename));
		$info["url"]="http://localhost/php7completo/DIR".str_replace("\\","/",$filename);
		
		array_push($data,$info);
		
	}
}
echo json_encode($data);



?>