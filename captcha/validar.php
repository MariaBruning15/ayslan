<?php
session_start();

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$captcha = $_POST["captcha"];

$imagem = $_SESSION["palavra"];

echo"<p>Nome: $nome<p>";
echo "<p>Idade: $idade<p>";
echo "<p>Captcha informado: $captcha<p>";

  if ($_POST["captcha"] == $_SESSION["palavra"]){
     echo "<h1>Voce Acertou</h1>";
  }else{
     echo "<h1>Burro</h1>";
     echo "<a href='index.php'>Retornar</a>";
  }
