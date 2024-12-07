<?php


$nm_fornecedor = $_POST['nomeFornecedor'];
$contato = $_POST['contatoFornecedor'];
$email = $_POST['emailFonecedor'];
$nr_telefone = $_POST['nrTelefone'];
$nm_endereco = $_POST['nmEndereco'];




//trazendo o script da conexão que está no arquivo conexao.php include 'conexao.php';
include 'conexao.php';

$insertFornecedor = "INSERT INTO tb_fornecedor
VALUES (NULL, '$nm_fornecedor', '$contato', '$email', '$nr_telefone', '$nm_endereco')";


$resultado = $conexao->query($insertFornecedor);


if ($resultado) {
echo "<script>alert('Inserido com sucesso'); history.back() </script>";
}
?>