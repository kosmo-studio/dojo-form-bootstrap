<?php
$pdo = new PDO('mysql:host=localhost;dbname=doking', 'root', '');

$list = $pdo->prepare("SELECT nome,email,celular FROM `academico` ");
$list->execute();
$resultado = $list->fetchAll();

?>
<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Hello, Kosta!</title>

</head>

<body>
  <div class="container">
    <div class="row" style="align-items:baseline;">
      <div class="col-7">
        <h1 style="margin-top:5px;font-size: 24px;border-bottom: 1px solid black">Acadêmicos</h1>
        <!-- <hr style="border: 1px solid black; margin:-5px;"> -->
      </div>
      <div class="col-5" style="display: grid; margin:24px 0; justify-content: end">
        <a href="index.php">
          <button type="submit" class="btn btn-primary" style="padding: 4px 1.4em;background-color: #2F3783; ">+ NOVO</button>
        </a>
      </div>
    </div>
    <?php
      foreach ($resultado as $key => $value) {
      ?>
    <div class="row" style="border-top: 1px solid black;">
        <div class="col-sm-5">
          <?php
          echo $value['nome'];
          ?>
        </div>
        <div class="col-sm-5">
          <?php
          echo $value['email'];
          ?>
        </div>
        <div class="col-sm-2">
          <?php
          echo $value['celular'];
          ?>
        </div>
    </div>
    <?php
    }
    ?>
    <div class="row" style="border-top: 1px solid black;">
      <?php
      echo '';
      ?>
    </div>
    <?php 
    if(isset($_GET['submit'])):
      echo 
      '<br>
      <div class="alert alert-success" id="successAlert" style="width: 22em;margin: 0.5em auto;">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>SUCESSO!</strong> ACADEMICO CADASTRADO.
      </div>';
    endif;
    ?>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>