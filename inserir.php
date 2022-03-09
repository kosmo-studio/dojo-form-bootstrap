<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>tchau</title>

</head>
<?php
//FAZER UMA LISTAGEM DE USARIOS - TRYCATCH - MENSAGENS DE SUCESS OU FALHA
try{
session_start();
  $tamanho = false;
if(empty($_POST['cpf'])){
  $_SESSION['cpfVazio'] = "CPF inválido!";
  $url='http://localhost/Dojo-bootstrap/index.php';
  echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
}else{
  
  $_SESSION['valueCpf'] = $_POST['cpf'];
  $cpf = preg_replace('/[^0-9]/', "", $_SESSION['valueCpf']); 


  if (strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)) {
    $_SESSION['cpfPequeno'] = "CPF pequeno";
    $url='http://localhost/Dojo-bootstrap/index.php';
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
  }else{

    $number_quantity_to_loop = [9, 10];

    foreach ($number_quantity_to_loop as $item) {

      $sum = 0;
      $number_to_multiplicate = $item + 1;
    
      for ($index = 0; $index < $item; $index++) {

          $sum += $cpf[$index] * ($number_to_multiplicate--);
    
      }

      $result = (($sum * 10) % 11);
      if ($cpf[$item] != $result) {
      $tamanho = false;
      $_SESSION['cpfinValido'] = "CPF nao";
      $url='http://localhost/Dojo-bootstrap/index.php';
      echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
      }else{
        $tamanho = true;
      };
  }
  
}
}

if ($tamanho == true){

$pdo = new PDO('mysql:host=localhost;dbname=doking', 'root', '');
$acad = array();
$periodoCurso = array();



$acad[] =$_POST["nome"];  
$acad[] =$_POST["dataNascimento"];
$acad[] =$_POST["sexo"];
$acad[] =$_POST["estadoCivil"];
$acad[] =$_POST["cpf"];
$acad[] =$_POST["rg"];
$acad[] =$_POST["email"];
$acad[] =$_POST["celular"];
$acad[] =$_POST["cep"];
$acad[] =$_POST["endereco"];
$acad[] =$_POST["numero"];
$acad[] =$_POST["bairro"];
$acad[] =$_POST["cidade"];
$acad[] =$_POST["estado"];
$acad[] =$_POST["curso"];
$acad[] =$_POST["disciplina"];
$acad[] =$_POST["semestre"];
$acad[] =$_POST["periodoEstagio"];
$acad[] =$_POST["instituicao"];
$acad[] =$_POST["periodoCurso"];

$place_holders = implode(',', array_fill(0, count($acad), '?'));
$pda = $pdo -> prepare("INSERT INTO `academico` VALUES (NULL, $place_holders)") -> execute($acad);

echo '<div class="alert alert-success" role="alert">
  This is a success alert—check it out!
</div>';

header("Location: listar.php?submit=sucesso");

die();
}
}catch(PDOException $e){
  echo '$e';
  sleep(3);
}
?>
<body>
</body>
</html>