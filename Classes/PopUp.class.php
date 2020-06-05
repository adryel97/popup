<?php 
require '../config/Conexao.php';

class PopUp extends Conexao 
{
   public function indexPopUp() 
   {
        $sql = "SELECT * FROM tbl_popup";
        $con = self::conecta()->query($sql);
        $response = $con->fetchAll(PDO::FETCH_ASSOC);

        return $response;
   }

   public function editPopUpImagem($imagem)
   {
        $sql = "UPDATE tbl_popup SET imagem = ? WHERE id_popup = 1";
        $con = self::conecta()->prepare($sql);
        $con->bindParam(1, $imagem);
        $con->execute();
   }

   public function situacaoPoUp($situacao)
   {
        $sql = "UPDATE tbl_popup SET situacao = ? WHERE id_popup = 1";
        $con = self::conecta()->prepare($sql);
        $con->bindParam(1, $situacao);
        $con->execute();
   }
   public function getSituacao()
   {
       $sql = "SELECT situacao FROM tbl_popup";
       $con = self::conecta()->query($sql);
       $response = $con->fetchAll(PDO::FETCH_ASSOC);
       return $response;
   }
}