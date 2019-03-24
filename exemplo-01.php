<?php
$name = "images";

//Verificando se o diretorio que consta na variável '$name' existe.
// a exclamação '!' é de negação, 'if-not'
if(!is_dir($name)){
	//Função nativa que cria diretorios ou pastas.
	mkdir($name);
	echo "Diretório $name criado com sucesso.";
	
} else {
	//Função nativa que remove diretórios/pastes.
	rmdir($name);
	echo "Já existia o diretório: $name. Agora ele foi removido";

}






?>