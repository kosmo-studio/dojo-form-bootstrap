<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="iphone.css">
  <title>Hello, Kosta!</title>

</head>

<body>


  <div class="container">
    <form method="post" action="inserir.php">
      <div class="row">
        <div class="col-sm">
          <h1 style="margin-top:5px;">Acadêmico</h1>
          <hr style="border: 1px solid black; margin:-5px;">
        </div>
        <div class="col-sm text-end" style="display: grid; margin:32px 0; justify-content: end">
          <button type="submit" class="btn btn-primary" style="padding: 4px 50px;">ENVIAR</button>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <input name="nome" type="text" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" placeholder="NOME" required>
          </div>
          <div class="form-group form-check  form-check-inline">
            <span style="margin: 5px   5px">SEXO: </span>
            <input class="form-check-input" type="radio" name="sexo" value="F" checked>
            <label class="form-check-label" for="sexo">
              Fem
            </label>
          </div>
          <div class="form-group form-check  form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" value="M">
            <label class="form-check-label" for="sexo">
              Masc
            </label>
          </div>
          <div class="form-group">
            <select class="form-group custom-select my-1 mr-sm-2" style="border: none;border-bottom: 1px solid black;border-radius: 0" name="estadoCivil">
              <option value="" selected>ESTADO CIVIL</option>
              <option value="casado">Casado</option>
              <option value="solteiro">Solteiro</option>
            </select>
          </div>
          <div class="form-group">
            <input name="rg" type="text" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" placeholder="RG">
          </div>
          <div class="form-group">
            <input name="cep" type="text" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" placeholder="CEP">
          </div>
          <div class="form-group">
            <input name="numero" type="text" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" placeholder="NUMERO">
          </div>
          <div class="form-group">
            <input name="cidade" type="text" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" placeholder="CIDADE">
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <input name="dataNascimento" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" type="date">
          </div>
          <div class="form-group">
            <input name="email" type="text" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" placeholder="EMAIL" required>
          </div>
          <div class="form-group">
            <input name="cpf" type="text" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" placeholder="CPF">
          </div>
          <div class="form-group">
            <input name="celular" type="text" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" placeholder="FONE CELULAR" required>
          </div>
          <div class="form-group">
            <input name="endereco" type="text" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" placeholder="ENDEREÇO">
          </div>
          <div class="form-group">
            <input name="bairro" type="text" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" placeholder="BAIRRO">
          </div>
          <div class="form-group">
            <select class="custom-select my-1 mr-sm-2" style="border: none;border-bottom: 1px solid black;border-radius: 0" name="estado">
              <option value="" selected>ESTADO</option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
              <option value="EX">Estrangeiro</option>
            </select>
          </div>
        </div>
        <!--Fim do formulario academico-->
      </div>
      <h1 style="margin-top:5px">Dados Acadêmico</h1>
      <hr style="border:1px solid black; margin-top:-5px; margin-bottom:40px">
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <input name="curso" type="text" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" placeholder="CURSO">
          </div>
          <div class="form-group">
            <select class="form-group custom-select my-1 mr-sm-2" style="border: none;border-bottom: 1px solid black;border-radius: 0" name="periodoEstagio">
              <option value="" selected>PERÍODO DO ESTÁGIO</option>
              <option value="matutino">Matutino</option>
              <option value="vespertino">Vespertino</option>
              <option value="noturno">Noturno</option>
            </select>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <input name="disciplina" type="text" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" placeholder="DISCIPLINA">
          </div>
          <div class="form-group">
            <input name="instituicao" type="text" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" placeholder="INSTITUIÇÃO">
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <input name="semestre" type="text" class="form-control" style="border: none;border-bottom: 1px solid black;border-radius: 0" placeholder="SEMESTRE">
          </div>
          <div class="form-group form-check  form-check-inline">
            <span style="margin: 5px   5px">PERÍODO: </span>
            <input class="form-check-input" type="checkbox" name="periodoCurso" value="Matutino" checked>
            <label class="form-check-label" for="periodoCurso">
              Mat.
            </label>
          </div>
          <div class="form-group form-check  form-check-inline">
            <input class="form-check-input" type="checkbox" name="periodoCurso" value="Vespertino">
            <label class="form-check-label" for="periodoCurso">
              Vesp.
            </label>
          </div>
          <div class="form-group form-check  form-check-inline">
            <input class="form-check-input" type="checkbox" name="periodoCurso" value="Noturno">
            <label class="form-check-label" for="periodoCurso">
              Not.
            </label>
          </div>
        </div>
      </div>
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>