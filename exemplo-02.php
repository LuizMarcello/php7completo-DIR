<?php

//Função nativa que 'varre' o diretório que consta no
// parâmetro e retorna um array:
$images = scandir("images");

$data = array();

//Função nativa que lê um array (na variável do parâmetro):
//var_dump($images);

foreach($images as $img){
//'in_array()': Função nativa que varre um array.
//No parâmetro: 1º)'onde' você tá procurando e
//              2º)'O quê tá procurando'. Um array, pois é possível vários itens a procurar.
	if(!in_array($img, array(".",".."))){
		$filename = "images" . DIRECTORY_SEPARATOR . $img;
		
		//Função nativa para obter algumas informações
		//de um arquivo, e retorna um array.
		$info = pathinfo($filename);
		
		//'$filesize()' função nativa que retorna o tamanho do arquivo, em bytes.
		//'"sizee"' mais uma chave acrescentada no array '$info' acima:
		$info["sizee"] = filesize($filename);
		
		//Função nativa 'filemtime()': horário/data da última modificação do arquivo
		//'"modified"' mais uma chave acrescentada no array '$info' acima:
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		
		//'"url"' mais uma chave acrescentada no array '$info' acima:
		//Função nativa 'str.replace()' inverte a posição da barra invertida pela barra normal.
		$info["url"] = "http://localhost/php7completo/DIR/".str_replace("\\", "/", $filename);
		
		//Função nativa que insere um array em outro array:
		array_push($data,$info);
	}
}

//echo json_encode($info);//Assim, lê sómente a última posição do array.
echo json_encode($data);//Assim, todo o array '$data' é lido.





?>