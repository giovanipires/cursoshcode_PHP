<!DOCTYPE html>
<html lang="pt_br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Curso Hcode</title>
  </head>
  <body>
      <div class="container">
        <h2>Encapsulamento II</h2>
        <hr>
        <?php

          class Pessoa {
            public $nome = "Rasmus Lerdorf";
            protected $idade = 48;
            private $senha = "123456";

            public function verDados() {
              echo $this->nome ."<br/>";
              echo $this->idade ."<br/>";
              echo $this->senha ."<br/>";
            }
          }

          class Programador extends Pessoa {

            public function verDados() {

              echo get_class($this). "<br/>";

              echo $this->nome ."<br/>";
              echo $this->idade ."<br/>";
              echo $this->senha ."<br/>";
            }

          }

          $objeto = new Programador();
          // echo $objeto->nome ."<br/>";
          // echo $objeto->idade ."<br/>";
          // echo $objeto->senha ."<br/>";
          $objeto->verDados();

        ?>
      </div>
  </body>
</html>
