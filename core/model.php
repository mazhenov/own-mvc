<?php
class Model
{
	
	public function __construct() {
        
    }

	public function get_data(){
		
	}
	public function query($a){
		$data = [];
		$mysqli = getConnect();
    	$query = $mysqli->query($a);
    	if($query){
	    	while($row = $query->fetch_assoc()){
	    		$data[] = $row;
	    	}
	    }
    	$query->close();
    	return $data;
	}

}