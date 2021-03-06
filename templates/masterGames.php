<?php session_start(); ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/Never_Forget/librerias/ti.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/Never_Forget/assets/img/iconnf.ico" type="image/x-icon">
  
    <link rel="stylesheet" href="/Never_Forget/css/bootstrap.css">
    <link rel="stylesheet" href="/Never_Forget/Styles/Games.css">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
    <script src="/Never_Forget/js/jquery-3.3.1.min.js"></script>
    <script src="/Never_Forget/js/popper.min.js"></script>
    <script src="/Never_Forget/js/bootstrap.min.js"></script>
    
    <?php startblock('head') ?>
    <?php endblock() ?>
</head>
<body>
    
    <?php startblock('principal') ?>
    <?php endblock() ?>

    <!--modal de cierre de sesion-->
    <div class="modal" tabindex="-1" role="dialog" id="modalAlertLogout" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-modal-header">
                    <h5 class="modal-title">Alert</h5>
                    <form action="../../views/mainController.php" method="post">
                        <button type="submit" class="close" name="logout">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </form>
                </div>
                <div class="modal-body bg-modal-body">
                    <p>Your session has been closed.</p>
                </div>
            </div>
        </div>
    </div>

    <!--Script que controla la inactividad del usuario logueado-->
    <?php if(isset($_SESSION['userLoged'])){ ?>
        <script src="/Never_Forget/scripts/timeController.js"></script>
    <?php } ?>
</body>
</html>
