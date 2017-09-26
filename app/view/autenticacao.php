<?php include_once 'app/view/partlals/header.php'; ?>
  <body>
    <div class="columns is-gapless is-mobile" id="content">
      <div class="column is-hidden-mobile is-hidden-tablet-only is-two-thirds" id="columnLeft"></div>
      <div class="column" id="columnRight">
        <div id="alignItens">
            <img src="app/assets/imgs//logo.png" class="logo" title="Custom83.com" alt="Custom83.com">
            <!--Inicio do Fomulário-->
            <?php if(isset($_SESSION['erro-email'])) {?>
                </br><br><div class="notification" id="alertLogin"><h1>Usuario ou senha inválido</h1></div>
            <?php } ?>

            <form action="autenticar" method="post" id="formLog">
                </br>
                <div class="field">
                <p class="control has-icon">
                      <input id="email" name="email" class="input" autofocus maxlength="100" type="text" placeholder="teste@custom83.com" required="" value="<?php  if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" width="48" height="48">
                      <span class="icon is-small">
                          <i class="fa fa-envelope"></i>
                      </span>
                </p>
                <p class="control has-icon">
                    <input id="senha"  name="senha" class="input" type="password" maxlength="60" placeholder="Senha" required="" value="<?php  if(isset($_POST['senha'])) echo htmlspecialchars($_POST['senha']); ?>">
                    <span class="icon is-small">
                        <i class="fa fa-lock"></i>
                    </span>
                </p>
                </div>
                </br>
                <div class="field">
                  <p class="control">
                    <button class="button is-primary" type="submit">
                      Login
                    </button>
                  </p>
                </div>
            </form>
            <!--Fim do Fomulário-->
            <span class="senha"><a href="redefinir-senha">Esqueceu a senha?</a></span>
        </div>
        <a href="http://www.google.com" class="site">www.custom83.com</a>
      </div>
    </div>
  </body>
</html>
