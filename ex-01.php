<?php 
//manda os parâmetros
function error_handler($code,$message,$file,$line){

	echo json_encode(array(
		"code"=>$code,
		"message"=>$message,
		"line"=>$line,
		"file"=>$file
	));
	
}
//função do php ("nome da função")
set_error_handler("error_handler");

echo 100 / 0;

 ?>