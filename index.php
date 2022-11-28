<?php
  require 'config.php';

  $lista = [];
  $sql = $pdo->query("SELECT * FROM usuarios ORDER BY id desc");

  if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO:: FETCH_ASSOC);
  }

?>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>

<a href="adicionar.php">[ ADICIONAR ]</a> <br><hr>

    <?php foreach($lista as $usuario): ?>
    <tr>
        <th> <?= $usuario['id']; ?> </th>
        <th><?= $usuario['nome'];?></th>
        <th><?= $usuario['email'];?></th>
        <th>

          <a href="editar.php?id=<?= $usuario['id']; ?>"> [ EDITAR ] </a> |
          <a href="delete.php?id=<?=$usuario['id'];?>">[ EXCLUIR ]</a>
        </th>
    </tr>

  <?php endforeach;?>

</table>
