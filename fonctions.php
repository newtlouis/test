
<?php

date_default_timezone_set("Europe/Paris");

ini_set("max_execution_time", 2);

function getDBLink(){
	$link = mysqli_connect("localhost", "recrut", "y5BNQrHBnampWDTA","recrutement_2013") or die("Connection unavailable :" . mysqli_connect_error() );
	// mysql_select_db("recrutement_2013");
	// mysql_set_charset('utf8',$link);
	return $link;
}

function closelink($link){
	mysqli_close($link);
}

function lancer_requete( $requete, $link ){
	static $nReq;
	if($nReq){
		if($nReq >= 12){
			die("Trop de requ&ecirc;tes!");
		}
		$nReq++;
	}else{
		$nReq = 1;
	}

	return mysqli_query( $requete, $link );
}
