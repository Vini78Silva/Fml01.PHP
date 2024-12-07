<?php


$nm_funcionario= $_POST['nomeFuncionario'];
$sobrenome = $_POST['sobrenomeFuncionario'];
$dt_nascimento = $_POST['dtNascimento'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$dt_admissao = $_POST['dtAdmissao'];
$senha = $_POST['senha'];


//trazendo o script da conexão que está no arquivo conexao.php include 'conexao.php';
include 'conexao.php';

$insertFuncionario = "INSERT INTO tb_funcionario
VALUES (NULL, '$nm_funcionario', '$sobrenome', '$dt_nascimento', '$cargo', '$salario', '$dt_admissao', '$senha')";


$resultado = $conexao->query($insertFuncionario);


if ($resultado) {
echo "<script>alert('Inserido com sucesso'); history.back() </script>";
}
?>