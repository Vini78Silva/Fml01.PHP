<?php


$nm_cliente= $_POST['nomeCliente'];
$nm_sobrenome = $_POST['sobrenomeCliente'];
$email = $_POST['emailCliente'];
$nr_telefone = $_POST['telefoneCliente'];
$nm_endereco = $_POST['enderecoCliente'];




//trazendo o script da conexão que está no arquivo conexao.php include 'conexao.php';
include 'conexao.php';

$insertCliente = "INSERT INTO tb_cliente
VALUES (NULL, '$nm_cliente', '$nm_sobrenome', '$email', '$nr_telefone', '$nm_endereco')";


$resultado = $conexao->query($insertCliente);


if ($resultado) {
echo "<script>alert('Inserido com sucesso'); history.back() </script>";
}
?>