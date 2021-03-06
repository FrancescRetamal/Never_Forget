<?php include "../../templates/masterGames.php" ?>

<?php startblock('head') ?>  
  
<title>Memory Game</title>



    <link rel="stylesheet" href="/Never_Forget/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../Styles/games/game2.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">

<!--JQUERY-->
  <script type="text/javascript" src="../../jquery/jquery-1.11.1.min.js"></script>

	<script type="text/javascript" src="../../jquery/jquery-ui.min.js"></script>
  <script type="text/javascript" src="../../jquery/jquery.ui.touch-punch.min.js"></script>
    
<!--GAME-->




<!--BOOTSTRAP-->
    <script src="/Never_Forget/js/popper.min.js"></script>
    <script src="/Never_Forget/js/bootstrap.min.js"></script>
    
    

<?php endblock() ?>

<?php startblock('principal') ?>

<!-- <body onload="inicialize()"> -->
<body>
  
  <div class="container" >


      <div id ="titulo" class="text-center">
        <h1>Memory Game</h1>
        <p>Click the button to start the game<p>
        <div class="counter">
    
            <button type="button" onclick="game()" class="btn btn-secondary" id="buttonStart">START</button>
            <h2 id="number"></h2>
          </div>

      </div>
    
    
    <section class="memory-game">

        <div class="memory-card" data-images="bomb">
          <img class="front-face" src="../../assets/img/game2/bomb.jpg" alt="Bomb" />
          <img class="back-face" src="../../assets/img/game2/backcard.jpg" alt="backcard" />
        </div>
        <div class="memory-card" data-images="bomb">
          <img class="front-face" src="../../assets/img/game2/bomb.jpg" alt="Bomb" />
          <img class="back-face" src="../../assets/img/game2/backcard.jpg" alt="backcard" />
        </div>

        <div class="memory-card" data-images="flag">
          <img class="front-face" src="../../assets/img/game2/flag.jpg" alt="Flag" />
          <img class="back-face" src="../../assets/img/game2/backcard.jpg" alt="backcard" />
        </div>
        <div class="memory-card" data-images="flag">
          <img class="front-face" src="../../assets/img/game2/flag.jpg" alt="Flag" />
          <img class="back-face" src="../../assets/img/game2/backcard.jpg" alt="backcard" />
        </div>

        <div class="memory-card" data-images="helmet">
          <img class="front-face" src="../../assets/img/game2/helmet.jpg" alt="Helmet" />
          <img class="back-face" src="../../assets/img/game2/backcard.jpg" alt="backcard" />
        </div>
        <div class="memory-card" data-images="helmet">
          <img class="front-face" src="../../assets/img/game2/helmet.jpg" alt="Helmet" />
          <img class="back-face" src="../../assets/img/game2/backcard.jpg" alt="backcard" />
        </div>

        <div class="memory-card" data-images="warship">
          <img class="front-face" src="../../assets/img/game2/warship.jpg" alt="Warship" />
          <img class="back-face" src="../../assets/img/game2/backcard.jpg" alt="backcard" />
        </div>
        <div class="memory-card" data-images="warship">
          <img class="front-face" src="../../assets/img/game2/warship.jpg" alt="Warship" />
          <img class="back-face" src="../../assets/img/game2/backcard.jpg" alt="backcard" />
        </div>

        <div class="memory-card" data-images="plane">
          <img class="front-face" src="../../assets/img/game2/plane.jpg" alt="Plane" />
          <img class="back-face" src="../../assets/img/game2/backcard.jpg" alt="backcard" />
        </div>
        <div class="memory-card" data-images="plane">
          <img class="front-face" src="../../assets/img/game2/plane.jpg" alt="Plane" />
          <img class="back-face" src="../../assets/img/game2/backcard.jpg" alt="backcard" />
        </div>

        <div class="memory-card" data-images="tank">
          <img class="front-face" src="../../assets/img/game2/tank.png" alt="Tank" />
          <img class="back-face" src="../../assets/img/game2/backcard.jpg" alt="backcard" />
        </div>
        <div class="memory-card" data-images="tank">
          <img class="front-face" src="../../assets/img/game2/tank.png" alt="Tank" />
          <img class="back-face" src="../../assets/img/game2/backcard.jpg" alt="backcard" />
        </div>
        
    </section>

      <div class="text-center">
      <button type="button" class="btn btn-danger button " id="tryAgain">TRY AGAIN</button>
    </div>

    </div>

    <div class="modal" tabindex="-1" role="dialog" id="done">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">You Win!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="button" class="btn btn-dark" >
           <a style="text-decoration:none;color:white;" href="../capituloFin.php">Continue the Adventure</a>
          </button>
        </div>
       </div>
     </div>
  </div>

  <div class="modal" tabindex="-1" role="dialog" id="clock">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Time Over</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer bg-secondary">
        <button type="button" class="btn btn-danger button" id="tryAgain2" >TRY AGAIN</button>      
      </div>
      </div>
    </div>
  </div>


</body>

<script type="text/javascript" src="../../scripts/games/game2/game2.js"></script>
<?php endblock() ?>