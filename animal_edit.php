<?php
include('conexao.php');

$id = $_GET['id'];
//echo $id;
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro de Animais</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style type="text/css">
      #tamanhoContainer {
        width: 500px;
      }

      #botao {
        background-color: #FEC68D;
        color: #ffffff
      }

    </style>


    <?php //echo '<p>Hello World</p>'; ?> 



    <div class="container" id="tamanhoContainer" style="margin-top: 40px">

    <h4>Formulário de Cadastro </h4>

    <?php
    $sql = "select * from animal where id=$id";
    $busca = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_array($busca)){
    	$id = $array['id'];
    	$nome = $array['nome'];
    	$dono = $array['dono'];
    	$especie = $array['especie'];
    }
    ?>


    


      <form action="animal_update.php" method="post" style="margin-top: 20px">
      	<input type="text" class="form-control" id="modelo" autocomplete="off" name="id" value="<?php echo $id ?>" style="display: none;">

        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" id="nome" autocomplete="off" name="nome" value="<?php echo $nome ?>">
        </div>
        <div class="form-group">
          <label>Dono</label>
          <input type="text" class="form-control" id="dono" autocomplete="off" name="dono" value="<?php echo $dono ?>">
        </div>
        <div class="form-group">
          <label>Especie</label>
          <input type="text" class="form-control" id="especie" name="especie" value="<?php echo $especie ?>" autocomplete="off">
        </div>

      <div style="text-align: right">
        <button type="submit" id="botao" class="btn btn-primary botao">Atualizar</button>
      </div>
    </form>
    </div>


  </body>
</html>