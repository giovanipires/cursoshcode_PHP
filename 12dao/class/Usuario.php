<?php

   class Usuario {

      private $idusuario;
      private $deslogin;
      private $dessenha
      private $dtcadastro;

      public function getIdusuario() {
         return $this->idusuario;
      }
      public function getDeslogin() {
         return $this->deslogin;
      }
      public function getDessenha() {
         return $this->dessenha;
      }
      public function getDtcadastro() {
         return $this->dtcadastro;
      }

      public function setIdusuario($value) {
         $this->idusuario = $value;
      }
      public function setDeslogin($value) {
         $this->deslogin = $value;
      }
      public function setDessenha($value) {
         $this->dessenha = $value;
      }
      public function setDtcadastro($value) {
         $this->dtcadastro = $value;
      }

      public function loadById($id) {
         
         $sql = new Sql();

         $results = $sql->select("SELECT * FROM tb_usuario WHERE idusuario = :ID", array(
            ":ID"=>$id
         ));

         if (count($results) > 0) {
            $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
         }
      }

   }

?>