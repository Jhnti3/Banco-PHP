<?php

  if(isset($_POST['submit']))
  {
      //print_r('Nome: ' . $_POST['nome']);
      //print_r('<br>');
      //print_r('Email: ' . $_POST['email']);
      //print_r('<br>');
      //print_r('Senha: ' . $_POST['nome']);

      include_once('config.php');

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      $_result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome','$email','$senha')");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Formulário de Registro</title>
</head>
<body>

  <form action="formulario.php" method="POST">
  <h2>Formulário de Registro</h2>
  
  <!-- Campo de Nome -->
  <label for="nome">Nome:</label>
  <input type="text" id="nome" name="nome" required><br><br>

  <!-- Campo de Email -->
  <label for="email">E-mail:</label>
  <input type="email" id="email" name="email" required><br><br>

  <!-- Campo de Senha -->
  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha" required><br><br>

  <!-- Botão de Registro -->
  <button type="submit" name="submit">Registrar</button>
  </form>
</body>
</html>
