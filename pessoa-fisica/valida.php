<?php
session_start();
require 'includes/conexao.php';
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$email - $senha";
	if((!empty($email)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT id, nome, email, senha FROM usuariosPF WHERE email='$email' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				header("Location: administrativo.php");
			}else{
				$_SESSION['msg'] = "<p class='text-danger'>Login e senha incorreto!</p>";
				header("Location: login-pf.php");
			}
		}
	}else{
		$_SESSION['msg'] = "<p class='text-danger'>Login e senha incorreto!</p>";
		header("Location: login-pf.php");
	}
}else{
	$_SESSION['msg'] = "<p class='text-danger'>Página não encontrada</p>";
	header("Location: login-pf.php");
}
