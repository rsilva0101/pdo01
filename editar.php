<h1>Editar Usuário</h1>

<?php
require 'config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }

}else{
  header('Location: index.php');
}
?>

<form method="POST" action="editar_action.php">
  <input type="hidden" name="id" value="<?=$info["id"];?>">

  <label> Nome: <br/>
  <input type="text" name="name" value="<?=$info["nome"];?>">
  </label>

  <label><br><br>Email: <br />
  <input type="text" name="email" value="<?=$info["email"];?>">
  </label><br><br>

  <input type="submit" value="Salvar">

</form>
<a href="index.php">voltar</a>
