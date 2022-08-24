<?php 
	
	function exibir(){ 
		STATIC $ano; //definição da  variável estática
		$ano++;
		echo "<br/>". $ano;
	}

	echo exibir();
	echo exibir();
	echo exibir();
	

 ?>