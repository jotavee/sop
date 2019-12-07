<?php  
//receber os dados preenchidos no form contato
//variavel = campo no form

//atribuição do campo nome vindo do form para a variavel $nome
$nome=$_GET["nome"];
//atribuição do campo email vindo do form para a variavel $email
$email=$_GET["email"];
//atribuição do campo telefone vindo do form para a variavel $telefone
$telefone=$_GET["telefone"];
//atribuição do campo mensagem vindo do form para a variavel $mensagem
$mensagem=$_GET["mensagem"];
//vamos criar a variavel de conexão com o banco de dados
$conexao=mysqli_connect("fdb16.awardspace.net", "3234192_teste", "abcd1234@@", "3234192_teste");
if (!$conexao) {
	die("Ocorreu um erro -> ".mysqli_error());
}
//criar variavel $query com a instrução SQL para inserir na tabela
$query="INSERT INTO `3234192_teste`.`contato` (`nome`,`email`,`telefone`,`mensagem`,`id`) VALUES ('$nome', '$email', '$telefone','$mensagem', default)";

//Vamos executar a query ($conexao, $query)
mysqli_query($conexao, $query);

//se o cadastro deu certo
echo "Sua mensagem foi enviada com sucesso!"
?>