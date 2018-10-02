<!doctype html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
 <meta http-eqiv="X-UA-Compatible" content="IE=edge" />
 <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
 <link rel="stylesheet" type="text/css" href="sint.css">
 <title>SISTEMA</title>
</head>
<body>
  <header>
    <a href="pag2.php" style="text-decoration: none"><p class="logo">LOGO</p></a>
    <a href="sair.php"><img src="img/out.png" class="out img-fluid"></a>
  </header>
  <h1 class="text-center titulo">Selecione os Sintomas</h1>
  <div class="container col-lg-6 col-xl-11 col-lg-offset-3">
   <div class="row">
     <div class="col-sm-12 col-md-12" id="cad">
       <form id="msform" method="post" action="cad.php">


        <!-- INICIAR O WHILE DO PHP AQUI -->
        <fieldset>
         <h2 class="fs-title">PAGINA 1 - 7</h2>
         <div class="row">
           <div class="col-md-6">
            <label class="radio">
              <div class="categoria">
                <img src="img/ft.jpg" class="img-fluid" >
                <input type="radio" name="page1" value="sintoma1" class="radio">
                <p>Sintoma 1</p><!-- buscar nome do banco -->
              </div>
            </label>
          </div>
          <!-- FECHAR PHP -->

          <div class="col-md-6">
            <label class="radio">
              <div class="categoria">
                <img src="img/ft.jpg" class="img-fluid" >
                <input type="radio" name="page1" value="sintoma2" class="radio">
                <p>Sintoma 2</p><!-- buscar nome do banco -->
              </div>
            </label>
          </div>

          <div class="col-md-6">
            <label class="radio">
              <div class="categoria">
                <img src="img/ft.jpg" class="img-fluid" >
                <input type="radio" name="page1" value="sintoma3" class="radio">
                <p>Sintoma 3</p><!-- buscar nome do banco -->
              </div>
            </label>
          </div>

          <div class="col-md-6">
            <label class="radio">
              <div class="categoria">
                <img src="img/ft.jpg" class="img-fluid" >
                <input type="radio" name="page1" value="sintoma4" class="radio">
                <p>Sintoma 4</p><!-- buscar nome do banco -->
              </div>
            </label>
          </div>
        </div>
        <input type="button" name="next" class="next action-button" value="Próximo" />
      </fieldset>


      <fieldset>
       <h2 class="fs-title">PAGINA 2 - 7</h2>
       <div class="row">
         <div class="col-md-6">
          <label class="radio">
            <div class="categoria">
              <img src="img/ft.jpg" class="img-fluid" >
              <input type="radio" name="page2" value="sintoma5" class="radio">
              <p>Sintoma 5</p><!-- buscar nome do banco -->
            </div>
          </label>
        </div>
        <!-- FECHAR PHP -->

        <div class="col-md-6">
          <label class="radio">
            <div class="categoria">
              <img src="img/ft.jpg" class="img-fluid" >
              <input type="radio" name="page2" value="sintoma6" class="radio">
              <p>Sintoma 6</p><!-- buscar nome do banco -->
            </div>
          </label>
        </div>

        <div class="col-md-6">
          <label class="radio">
            <div class="categoria">
              <img src="img/ft.jpg" class="img-fluid" >
              <input type="radio" name="page2" value="sintoma7" class="radio">
              <p>Sintoma 7</p><!-- buscar nome do banco -->
            </div>
          </label>
        </div>

        <div class="col-md-6">
          <label class="radio">
            <div class="categoria">
              <img src="img/ft.jpg" class="img-fluid" >
              <input type="radio" name="page2" value="sintoma8" class="radio">
              <p>Sintoma 8</p><!-- buscar nome do banco -->
            </div>
          </label>
        </div>
      </div>
      <input type="button" name="previous" class="previous action-button-previous" value="Voltar"/>
      <input type="button" name="next" class="next action-button" value="Próximo"/>

    </fieldset>

    <fieldset>
     <h2 class="fs-title">PAGINA 3 - 7</h2>
     <div class="col-md-6">
      <label class="radio">
        <div class="categoria">
          <img src="img/ft.jpg" class="img-fluid" >
          <input type="radio" name="page3" value="sintoma9" class="radio">
          <p>Sintoma 9</p><!-- buscar nome do banco -->
        </div>
      </label>
    </div>
    <!-- FECHAR PHP -->

    <div class="col-md-6">
      <label class="radio">
        <div class="categoria">
          <img src="img/ft.jpg" class="img-fluid" >
          <input type="radio" name="page3" value="sintoma10" class="radio">
          <p>Sintoma 10</p><!-- buscar nome do banco -->
        </div>
      </label>
    </div>

    <div class="col-md-6">
      <label class="radio">
        <div class="categoria">
          <img src="img/ft.jpg" class="img-fluid" >
          <input type="radio" name="page3" value="sintoma11" class="radio">
          <p>Sintoma 11</p><!-- buscar nome do banco -->
        </div>
      </label>
    </div>

    <div class="col-md-6">
      <label class="radio">
        <div class="categoria">
          <img src="img/ft.jpg" class="img-fluid" >
          <input type="radio" name="page3" value="sintoma12" class="radio">
          <p>Sintoma 12</p><!-- buscar nome do banco -->
        </div>
      </label>
    </div>
    <input type="button" name="previous" class="previous action-button-previous" value="Voltar"/>
    <input type="button" name="next" class="next action-button" value="Próximo"/>
  </fieldset>

  <fieldset>
   <h2 class="fs-title">PAGINA 4 - 7</h2>
   <div class="col-md-6">
    <label class="radio">
      <div class="categoria">
        <img src="img/ft.jpg" class="img-fluid" >
        <input type="radio" name="page4" value="sintoma13" class="radio">
        <p>Sintoma 13</p><!-- buscar nome do banco -->
      </div>
    </label>
  </div>
  <!-- FECHAR PHP -->

  <div class="col-md-6">
    <label class="radio">
      <div class="categoria">
        <img src="img/ft.jpg" class="img-fluid" >
        <input type="radio" name="page4" value="sintoma14" class="radio">
        <p>Sintoma 14</p><!-- buscar nome do banco -->
      </div>
    </label>
  </div>

  <div class="col-md-6">
    <label class="radio">
      <div class="categoria">
        <img src="img/ft.jpg" class="img-fluid" >
        <input type="radio" name="page4" value="sintoma15" class="radio">
        <p>Sintoma 15</p><!-- buscar nome do banco -->
      </div>
    </label>
  </div>

  <div class="col-md-6">
    <label class="radio">
      <div class="categoria">
        <img src="img/ft.jpg" class="img-fluid" >
        <input type="radio" name="page4" value="sintoma16" class="radio">
        <p>Sintoma 16</p><!-- buscar nome do banco -->
      </div>
    </label>
  </div>
  <input type="button" name="previous" class="previous action-button-previous" value="Voltar"/>
  <input type="button" name="next" class="next action-button" value="Próximo"/>
</fieldset>

<fieldset>
 <h2 class="fs-title">PAGINA 5 - 7</h2>
 <div class="col-md-6">
  <label class="radio">
    <div class="categoria">
      <img src="img/ft.jpg" class="img-fluid" >
      <input type="radio" name="page5" value="sintoma17" class="radio">
      <p>Sintoma 17</p><!-- buscar nome do banco -->
    </div>
  </label>
</div>
<!-- FECHAR PHP -->

<div class="col-md-6">
  <label class="radio">
    <div class="categoria">
      <img src="img/ft.jpg" class="img-fluid" >
      <input type="radio" name="page5" value="sintoma18" class="radio">
      <p>Sintoma 18</p><!-- buscar nome do banco -->
    </div>
  </label>
</div>

<div class="col-md-6">
  <label class="radio">
      <div class="categoria">
        <img src="img/ft.jpg" class="img-fluid" >
        <input type="radio" name="page5" value="sintoma19" class="radio">
        <p>Sintoma 19</p><!-- buscar nome do banco -->
      </div>
    </label>
</div>

<div class="col-md-6">
  <label class="radio">
      <div class="categoria">
        <img src="img/ft.jpg" class="img-fluid" >
        <input type="radio" name="page5" value="sintoma20" class="radio">
        <p>Sintoma 20</p><!-- buscar nome do banco -->
      </div>
    </label>
</div>
</ul>
<input type="button" name="previous" class="previous action-button-previous" value="Voltar"/>
<input type="button" name="next" class="next action-button" value="Próximo"/>
</fieldset>

<fieldset>
 <h2 class="fs-title">PAGINA 6 - 7</h2>
 <div class="col-md-6">
  <label class="radio">
    <div class="categoria">
      <img src="img/ft.jpg" class="img-fluid" >
      <input type="radio" name="page6" value="sintoma21" class="radio">
      <p>Sintoma 21</p><!-- buscar nome do banco -->
    </div>
  </label>
</div>
<!-- FECHAR PHP -->

<div class="col-md-6">
  <label class="radio">
    <div class="categoria">
      <img src="img/ft.jpg" class="img-fluid" >
      <input type="radio" name="page6" value="sintoma22" class="radio">
      <p>Sintoma 22</p><!-- buscar nome do banco -->
    </div>
  </label>
</div>

<div class="col-md-6">
  <label class="radio">
      <div class="categoria">
        <img src="img/ft.jpg" class="img-fluid" >
        <input type="radio" name="page6" value="sintoma23" class="radio">
        <p>Sintoma 23</p><!-- buscar nome do banco -->
      </div>
    </label>
</div>

<div class="col-md-6">
  <label class="radio">
      <div class="categoria">
        <img src="img/ft.jpg" class="img-fluid" >
        <input type="radio" name="page6" value="sintoma24" class="radio">
        <p>Sintoma 24</p><!-- buscar nome do banco -->
      </div>
    </label>
</div>
<input type="button" name="previous" class="previous action-button-previous" value="Voltar"/>
<input type="button" name="next" class="next action-button" value="Próximo"/>
</fieldset>

<fieldset>
 <h2 class="fs-title">PAGINA 7 - 7</h2>
 <div class="col-md-6">
  <label class="radio">
    <div class="categoria">
      <img src="img/ft.jpg" class="img-fluid" >
      <input type="radio" name="page7" value="sintoma25" class="radio">
      <p>Sintoma 25</p><!-- buscar nome do banco -->
    </div>
  </label>
</div>
<!-- FECHAR PHP -->

<div class="col-md-6">
  <label class="radio">
    <div class="categoria">
      <img src="img/ft.jpg" class="img-fluid" >
      <input type="radio" name="page7" value="sintoma26" class="radio">
      <p>Sintoma 26</p><!-- buscar nome do banco -->
    </div>
  </label>
</div>

<div class="col-md-6">
  <label class="radio">
      <div class="categoria">
        <img src="img/ft.jpg" class="img-fluid" >
        <input type="radio" name="page7" value="sintoma27" class="radio">
        <p>Sintoma 27</p><!-- buscar nome do banco -->
      </div>
    </label>
</div>

<div class="col-md-6">
  <label class="radio">
      <div class="categoria">
        <img src="img/ft.jpg" class="img-fluid" >
        <input type="radio" name="page7" value="sintoma28" class="radio">
        <p>Sintoma 28</p><!-- buscar nome do banco -->
      </div>
    </label>
</div>
<input type="button" name="previous" class="previous action-button-previous" value="Voltar"/>
<input type="submit" name="submit" class="cad" value="Cadastrar"/>
</fieldset>
</form>
</div>
</div>
</div>
<footer>
  <p>Desenvolvido por ©ACCIO - 2018</p>
</footer>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src="js/script.js"></script>
</body>
</html>