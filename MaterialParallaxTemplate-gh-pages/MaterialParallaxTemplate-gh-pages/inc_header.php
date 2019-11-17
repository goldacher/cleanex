<header>
  <div id="navbar" class="navbar-fixed scrollspy">
    <nav class="white">
      <div class="nav-wrapper container">
        <div class="container"> <a href="index.php" class="brand-logo"><img src="./Cleanex_Logo.png" /></a></div>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        <ul class="right hide-on-med-and-down">

          <li><a class="head-link" href="products.php" id="products" onclick="functionProducts()">Produtos</a></li>
          <li><a class="head-link" href="sobre.php" id="sobre" onclick="functionSobre()">Sobre</a></li>
          <li><a class="head-link" href="contato.php" id="contato" onclick="functionContato()">Contato</a></li>
          <li><a class="head-link" href="login.php" id="login" onclick="functionLogin()">Login</a></li>

        </ul>
        <ul class="right side-nav" id="mobile-demo">
          <li><a class="head-link" href="products.php" id="products" onclick="functionProducts()">Produtos</a></li>
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