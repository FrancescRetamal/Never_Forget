<?php include "../templates/master.php" ?>
<?php startblock('head')?>
  <link rel="stylesheet" href="../Styles/userProgress.css">
  <link rel="stylesheet" href="/Never_Forget/Styles/Games.css">
<?php endblock() ?>
<?php startblock('principal') ?>

<div class="container">
<h1 class="colorSecundario titulo text-center mt-4">Progreso del jugador</h1>

</div>

  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-sm-4">
        <img src="../assets/img/ordenadorDiamant.png" class="img-fluid mb-2" alt="Responsive image" id=imgPC>
        <h2 class="text-white text-center">Capítulo 1</h2>
        <p class="text-white text-center" id="pProgress1">El bombardeo ha comenzado, hay que buscar un lugar donde esconderse</p>
          <div class="col-sm-12 text-center">
            <button type="button" id= "boton1" class="btn-lg btn-success mb-5" href="index.php">JUGAR</button>
          </div>
      </div>

      <div class="col-sm-4">
        <img src="../assets/img/ordenadorApagado.png" class="img-fluid mb-2" alt="Responsive image" id=imgPC>
        <h2 class="text-white text-center">Capítulo 2</h2>
        <p class="text-white text-center" id="pProgress2">Avanza en la historia para saber qué pasó</p>
          <div class="col-sm-12 text-center">
            <button type="button" id= "boton2" class="btn-lg btn-danger mb-5" href="index.php">BLOQUEADO</button>
          </div>
    </div>


      <div class="col-sm-4">
        <img src="../assets/img/ordenadorApagado.png" class="img-fluid mb-2" alt="Responsive image" id=imgPC>
        <h2 class="text-white text-center">Capítulo 3</h2>
        <p class="text-white text-center"  id="pProgress3">Avanza en la historia para saber qué pasó</p>
          <div class="col-sm-12 text-center">
            <button type="button" id= "boton3" class="btn-lg btn-danger mb-5" href="index.php">BLOQUEADO</button>
          </div>
      </div>
  </div>
</div>


<div class="container mt-5 mb-5">
  <div class="row">

<div class="col-sm-2">
  <!--parche para centrar el container-->
</div>

    <div class="col-sm-4">
        <img src="../assets/img/ordenadorApagado.png" class="img-fluid mb-2" alt="Responsive image" id=imgPC>
        <h2 class="text-white text-center">Capítulo 4</h2>
        <p class="text-white text-center" id="pProgress4">Avanza en la historia para saber qué pasó</p>
          <div class="col-sm-12 text-center">
            <button type="button" id= "boton4" class="btn-lg btn-danger" href="index.php">BLOQUEADO</button>
          </div>
      </div>

    <div class="col-sm-4">
      <img src="../assets/img/ordenadorApagado.png" class="img-fluid mb-2" alt="Responsive image" id=imgPC>
      <h2 class="text-white text-center">Final</h2>
      <p class="text-white text-center" id="pProgress5">Avanza en la historia para saber qué pasó</p>
        <div class="col-sm-12 text-center">
          <button type="button" id= "boton5" class="btn-lg btn-danger" href="index.php">BLOQUEADO</button>
        </div>
    </div>

    <div class="col-sm-2">
        <!--parche para centrar el container-->
    </div>
  </div>
</div>
    
    
    
<?php endblock() ?>
