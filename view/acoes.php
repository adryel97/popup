<?php 
    require_once '../Classes/PopUp.class.php';
    $getPopup = new PopUp();
    $popup = $getPopup->getSituacao();

    if($_GET['acao']=='status'){
        if(isset($_POST['situacao'])){
            $situacao = $_POST['situacao'];
            $getPopup->situacaoPoUp($situacao);
        }
    }
    elseif($_GET['acao']=='situacao') {
        foreach ($popup as $k) {
        $teste = $k['situacao'];
        echo $teste;
    }
  }