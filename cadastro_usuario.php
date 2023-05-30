<?php 
include("conexao.php");
// Upload foto
$nome_foto = "";
if(file_exists($_FILES['foto']['tmp_name'])){ //Checa se a pessoa escolheu foto ou não
    $pasta_destino = 'fotos';
$extensao = strtolower(substr($_FILES['foto']['name'],-4)); // Vai pegar apenas os ultimos 4 digitos do nome
$nome_foto = date("Ymd-His") . $extensao; // não deixa duas fotos no mesmo nome
move_uploaded_file($_FILES['foto']['tmp_name'],$nome_foto); //tmp_name é o nome temporario que é dado à foto
// isso esta removendo esse nomeo ".jpg"
}
// fim do upload

$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$senha = $_POST['senha'];
$sql = "SELECT email_usuario FROM usuario where email_usuario='$email'";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0) {
    echo "<h3>E-mail já cadastrado</h3>";
} else{
echo "<h1>Dados do usuário</h1>";
echo "Nome: $nome <br>";
echo "E-mail: $email <br>";
echo "Telefone: $fone <br>";
echo "Senha: $senha <br>";

$sql = "INSERT INTO usuario (nome_usuario,email_usuario,fone_usuario,senha_usuario,foto)";
$sql .= "VALUES ('".$nome."','".$email."','".$fone."','".$senha."','".$nome_foto."')";
$result = mysqli_query($con, $sql);

if($result){
    echo "Dados cadastrados com sucesso";}
else{
    echo "Erro ao tentar cadastrar!";}
}

/*Inserir dados
INSERT INTO usuario (nome_usuario,fone_usuario,email_usuario,senha_usuario) 
VALUES ('Cássio','(18)3622-9046','cassio@gmail','1234');

select * from usuario;
*/
?>
<a href="index.php">Voltar</a>