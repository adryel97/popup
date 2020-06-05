<!doctype html>
<?php
    require_once '../Classes/PopUp.class.php';
    $getPopup = new PopUp();
    $popup = $getPopup->indexPopUp();
    $id =  filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    if(isset($_FILES['imagem']))
    {  
             $foto = $_FILES['imagem']; 
             $path = "../upload/";
             $imagem = md5(basename( $foto['name'])).'.jpg';
             $path = $path.$imagem;
             
             if(move_uploaded_file($foto['tmp_name'], $path)) {
               $foto = $imagem;
             } else{
                 echo "Por favor adicine uma imagem!";
             }
        if(isset($_POST['salvar'])){
            $getPopup->editPopUpImagem($imagem);
        }
    }
?>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
          <input type="file" name="imagem" id="imagem" required>
      </div>
      <div class="form-group">
          <button class="btn btn-primary" type="submit" name="salvar" id="salvar">Salvar</button>
          <a href="listar.php" class="btn btn-light">Voltar</a>
      </div>
      </form>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>