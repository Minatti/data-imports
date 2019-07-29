<?php
//Como executar?
//Para executar rotinas de scripts pesquisar sobre Contrab;
function moverArquivo(){
	//Caminho até a pasta raiz do processo
	$dir = "C:/Users/Carminatti/Desktop/servidor_teste";
	$repositorio = "repositorio/brd_comerc";
	//Retorno o tipo de extensão do arquivo
	$arq = "teste.ret";

	//Retorno a data atual por partes
	$ano = date("Y");
	$mes = date("m");
	$dia = date("d");

	//Função para nomear todo arquivo que foi copiado com a data atual;
	$data = date("d_m_Y");
	$origem = "$dir/$ano/$mes/$dia/$arq";
	$destino = "$repositorio/$data.ret";


if (copy($origem, $destino)){
	 	die ("Arquivo '$origem' copiado para '$destino' com sucesso!");
	}else{
		die ("Erro ao copiar arquivo");
	}//fecha if
}//fecha função

//echo copiarArquivos();
//echo $origem;

echo moverArquivo();

	
?>