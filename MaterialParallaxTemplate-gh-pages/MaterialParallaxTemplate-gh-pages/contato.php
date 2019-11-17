<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Contato</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />

    <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="shortcut icon" href="images/favicon (8).ico" type="image/x-icon">
    <link rel="icon" href="images/favicon (8).ico" type="image/x-icon">

<body>

    <!--   Cabeçalho   -->
    <?php include("inc_header.php"); ?>

    <div class=" container section scrollspy" id="contactus">
        <div class="section">
            <br>
            <br>
            <h2 class="purple-text">Contato</h2>
            <div class="row">
                <form class="col s8">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="name" type="text" class="validate">
                            <label for="name">Nome</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <!--row-->


                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="text_area" class="materialize-textarea"></textarea>
                            <label for="text_area">Mensagem</label>
                        </div>
                    </div>


                    <div>
                        <a class="waves-effect waves-light btn purple lighten-1">Enviar<i class="mdi-content-send right"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--  Rodape-->
    <?php include("inc_rodape.php"); ?>

</body>

</html>