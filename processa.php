<?php
session_start();

			date_default_timezone_set("America/Sao_Paulo");

			$dsn = "mysql:host=localhost;dbname=import_master";
			$dbuser = "root";
			$dbpass = "";

		try {
			  $pdo = new PDO($dsn, $dbuser, $dbpass);
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    //echo "Conexão obtida com sucesso!";

				    $arquivo = $_FILES['arquivo']['tmp_name'];

				    //testando a saída de dados
				    //var_dump($arquivo);
				    $array = file($arquivo);

				    $qtd = count($array);

				    $tot_qtd = ($qtd -1);

				    $ponteiro = 1;
		

				foreach ($array as $chave => $linha) {
					// PULO A PRIMEIRA LINHA DO ARQUIVO
					if ($chave > $ponteiro) {

					//trim retira os espaços vazios das extremidades
			   		$linha 		= trim($linha);
			   		
			   		// SEPARO CADA STRING PELO TAMANHO DE CARACTERES
			   		$col0 	= substr($linha, 0, 1);
			 		$col1 	= substr($linha, 1, 2);
			 		$col2	= substr($linha, 3, 14);
			 		$col3 	= substr($linha, 17, 3);
			 		$col4 	= substr($linha, 20, 6);
			 		$col5	= substr($linha, 26, 4);

			 		
			 		$a = $col0;
			 		$b = $col1;
			 		$c = $col2;
			 		$d = $col3;
			 		$e = $col4;
			 		$f = $col5;
			 		
			 		$resultado = "	INSERT INTO primeiro (a, b, c, d, e, f) 
			 						VALUES('$a', '$b', '$c', '$d', '$e', '$f')
			 					 ";

			 		$exec_insert = $pdo->query($resultado);
			 		
			 		//Imprimindo os resultados para testar a saída;
					//echo "<pre>";
			   		//echo $a;
			 		//echo $b;
			 		//echo $c;
			 		//echo $d;
			 		//echo $e;
			 		//echo $f;
			   		//echo "</pre>"; 				  

			 		$_SESSION['mensagem'] = "Importado com excíto!"." - "."Nº L: ".$tot_qtd;

			 		header("Location: index.php");

				} 
			}	
			 	    //arquivo de log da exec

					//variaveis
 				   	$credor = "Bradesco Comercial";
			    	$data = date("d/m/Y H:i:s");
			    	$n_acao = 1;
			    	//info
			    	$conteudo = "Credor".";".$credor.";"."Ação".";".$n_acao.";"."Data".$data;
			    	//arquivo de log
			 		$arq = 'log.txt';
			 		//Abre arq
			 		$file = fopen($arq, 'w');
			 		//Escreve	
					fwrite($file, $conteudo);
					//Fecha
					fclose($file);	
				} catch(PDOException $e) {
				    echo "Falhou: " .$e->getMessage();
				}

?>