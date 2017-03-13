<?php
require 'Conexao.php';

$request = $_POST;
#echo '<pre>';
#print_r($request);
#exit;

if(isset($request['token']) && $request['token'] == 'aulaJorgePHP') {
	buscarProduto($request);
}


function buscarProduto($request) {
	//$id   = $request['id'];

	$nome = $request['nome'];

	$response = ['data' => array()];

	$conn = Conexao::getInstance();//Singleton

	$stmt = $conn->prepare("SELECT count(*) as total FROM produtos ");

	$stmt->execute();

	$total = $stmt->fetch(PDO::FETCH_ASSOC);

	$response['total'] = $total['total'];


	$stmt = $conn->prepare("SELECT * FROM produtos WHERE nome like :nome  LIMIT {$request['limit']} , 10");
	#$stmt = $conn->prepare("SELECT * FROM produtos WHERE nome like :nome");

 	$stmt->bindValue(":nome", "%{$nome}%");

	$stmt->execute();


	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	    array_push($response['data'], $row);
	}

	if(count($response) > 0) {
		echo json_encode($response);
	} else {
		header('HTTP/1.0 404 Not Found');
		echo json_encode(array('erro' => 'Nenhum registro encontrado'));
	}

}