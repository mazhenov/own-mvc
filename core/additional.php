<?php
	
	include(__DIR__.'/../config/all.php');

	function authTest($check){
		if(isset($_SESSION['auth'])){
			if($check == true){return true;}
			else {redirect('home');}
		}
		else {
			if($check == false){return true;}
			else {redirect('');}
		}
	}
	function authUser(){
		
	}
	function startAuth($user){

	}
	function redirect($a=''){
		exit('<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=/'.$a.'">');
	}
	function getConnect() {
	    if (!isset($GLOBALS['mysqli'])){
	        $GLOBALS['mysqli'] = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	        if (mysqli_connect_errno()) {
	            printf("Подключение невозможно: %s\n", mysqli_connect_error());
	            exit();
	        }
	        $GLOBALS['mysqli']->set_charset("utf8");
	    }
	    $mysqli = $GLOBALS['mysqli'];
	    return $mysqli;
	}
	
?>