<?php

function classactive($URL, $URL_COURRANT){
    if($URL == $URL_COURRANT ){
        echo 'active';
    }
}

function internauteEstConnecte(){
	if (isset($_SESSION['membre'])){ 
		return true;
	} else {
		return false;
	}
	return (isset($_SESSION['membre']));
}

function internauteEstConnecteEtAdmin(){
	if (internauteEstConnecte() && $_SESSION['membre']['value'] == 1) {
		return true;
	}else {
		return false;
	}
	return (internauteESTConnecte() && $_SESSION['membre']['value'] == 1);
}

function executeRequete($req,$param = array()){
	if(!empty($param)){ 
		foreach($param as $indice => $valeur){
			$param[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
		}
	}
	global $pdo;
	$result = $pdo->prepare($req);
	$result->execute($param);
	return $result;
}

function executeRequete2($req,$param = array()){
	if(!empty($param)){ 
		foreach($param as $indice => $valeur){
			$param[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
		}
	}
	global $pdo2;
	$result = $pdo2->prepare($req);
	$result->execute($param);
	return $result;
}

function executeRequete3($req,$param = array()){
	if(!empty($param)){ 
		foreach($param as $indice => $valeur){
			$param[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
		}
	}
	global $pdo3;
	$result = $pdo3->prepare($req);
	$result->execute($param);
	return $result;
}

?>