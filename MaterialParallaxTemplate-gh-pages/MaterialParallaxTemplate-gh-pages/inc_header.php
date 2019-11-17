<style>
  .compras img {
    height: 30px;
    width: 30px;
    line-height: 10px;
  }

  .compras {
    font-size: 12px;
    padding-right: 5px;
    text-align: right;
    width: 220px;
    height: 60px;
    position: relative;
    float: right;
    bottom: 14px;
    clear: right;
  }

  .compras ol li {
    display: inline;
    text-align: center;
    list-style-type: none;
  }

  .carrinho {
    position: absolute;
    /*right: Npx; depende da imagem ela pode estar tocando no seu texto*/
    bottom: 5px;
  }

  .compras a {
    text-decoration: none;
  }

  .carroloja {
    left: 150px;
  }
</style>


<header>
  <div id="navbar" class="navbar-fixed scrollspy">
    <nav class="white">
      <div class="nav-wrapper container">
        <div class="container"> <a href="index.php" class="brand-logo"><img src="./Cleanex_Logo.png" /></a></div>
        <a href="index.php" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        <div class="carroloja">
          <ul class="right hide-on-med-and-down">

            <li><a class="head-link" href="sobre.php" id="sobre" onclick="functionSobre()">Sobre</a></li>
            <li><a class="head-link" href="contato.php" id="contato" onclick="functionContato()">Contato</a></li>
            <li><a class="head-link" href="login.php" id="login" onclick="functionLogin()">Login</a></li>

            <div class="compras">
              <a href="carrinho.html">
                <ol>
                  <li>Minhas compras
                  <li>
                  <li><img class="carrinho" src="images/carrinho.png">
                  <li>
                </ol>
              </a>
            </div>
        </div>
        </ul>
        <ul class="right side-nav" id="mobile-demo">
          <li><a class="head-link" href="sobre.php" id="products" onclick="functionSobre()">Sobre</a></li>
          <li><a class="head-link" href="contato.php" id="contato" onclick="functionContato()">Contato</a></li>
          <li><a class="head-link" href="login.php" id="login" onclick="functionLogin()">Login</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<!-- JavaScript no final do body para otimizar o carregamento -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js">
</script>
<script type="text/javascript" src="js/materialize.min.js"></script>