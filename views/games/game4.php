<?php include "../../templates/masterGames.php" ?>

<?php startblock('head') ?>
    <link rel="stylesheet" href="../../Styles/games/game4.css">
    <title>Refugi 307</title>
    <script src="../../scripts/games/game4/puzzle.js"></script>
    <meta name="viewport" content="width=500, initial-scale=1">
<?php endblock() ?> 



<?php startblock('principal') ?>
  
            <div id="puzzle"> 
                <h1 class="text-white" id="win"></h1>
                <button id="winContinue" type="button">
                    <a class="text-white"  href="../capituloFin.php">
                        <h1>Continue the adventure</h1>
                    </a>
                </button>
                <button id="continue" class="bttn" style="cursor: pointer;"  type="button" onclick="volver()">
                    
                    <h1 class="text-white">Keep trying</h1>
                    
                </button>
                <div class="row">
                    <div id="cell11" class="cell1" onclick="changeTile(1,1)"></div>
                    <div id="cell12" class="cell2" onclick="changeTile(1,2)"></div>
                    <div id="cell13" class="cell3" onclick="changeTile(1,3)"></div>
                </div>
                
                <div class="row">
                    <div id="cell21" class="cell4" onclick="changeTile(2,1)"></div>
                    <div id="cell22" class="cell5" onclick="changeTile(2,2)"></div>
                    <div id="cell23" class="cell6" onclick="changeTile(2,3)"></div>
                </div>
                <div class="row">
                    <div id="cell31" class="cell7" onclick="changeTile(3,1)"></div>
                    <div id="cell32" class="cell8" onclick="changeTile(3,2)"></div>
                    <div id="cell33" class="cell9" onclick="changeTile(3,3)"></div>
                </div>
            </div> 

            <div class="helps">
                <img class="help" id="help" src="../../assets/img/REFUGI.jpg" alt="">
                <div class="option">
                    <p class="text-white ml-1">MOVES</p>
                    <div id="contador" class=" text-white float-left mt-1 info"></div>
                </div>
                <div class="option">
                    <p class="text-white ml-1">TIME</p>
                    <div id="tiempo" class="float-left text-white  mt-1 info"></div>
                </div>
                <button class="btn btn-danger" id="abandonar" type="button" onClick="finish(notSolved)">Give up</button>
            </div>
     
            

    
    
    
    


<?php endblock() ?>


