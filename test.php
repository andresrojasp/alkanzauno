<html>
    <head>
        <meta charset="ISO-8859-1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
        <?php
        include 'menu/menu.php';
        ?>
        <div id="cuadro" class="container">
            <h3>Elija la imagen de su elección</h3>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <img id="imgUno">
                    
                </div>
                <div class="col-md-6">
                    <img id="imgDos">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button id="btnVotaUno" class="btn btn-lg" >Vota</button>   
                </div>
                <div class="col-md-6">
                    <button id="btnVotaDos" class="btn btn-lg" >Vota</button>
                </div>
            </div>

        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $.ajax({
                    type: "POST",
                    url: "/alkuno/control/controlImagenes.php",
                    success: function (data)
                    {
                        $('#imgUno').html(data);
                    }
                });
            });
            $(':button').click(function(){
                $.ajax({
                    type: "POST",
                    url: "/alkuno/control/controlImagenes.php",
                    success: function (data)
                    {
                        $('#imgUno').html(data);
                    }
                });
            });
        </script>
        <script src="js/database.js"></script>
    </body>
</html>
