<?php
$name = "imagesEufiz";

if(!is_dir($name)){
	mkdir($name);
	echo "Diretório $name criado com sucesso!!";
}else{
	rmdir($name);
	echo "Diretório $name existia, mas foi removido";
}




?>