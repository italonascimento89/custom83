  <?php include_once 'app/view/partlals/header.php'; ?>
  <!--cabecalho-->
  <header id="navHeader">
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="http://www.o-corretor.com">
          <img src="app/assets/imgs/logoLow.png" alt="Bulma: a modern CSS framework based on Flexbox">
        </a>
        <button class="button navbar-burger">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </nav>
  </header>
    <!--FimCabecalho-->
    <div class="columns is-gapless">
      <div class="column is-one-quarter" id="columnLeftMenu">
          <!--
          <div class="imgPerfil">
            <figure class="image is-128x128">
              <img src="imgs/imagemPerfil.jpg" class="imagemPerfil">
            </figure>
          </div>
          <div class="infoPerfil">
            <h1 class="title is-4">Ítalo Nascimento</h1>
            <h2 class="subtitle is-6">Administrador</h2>
          </div>
          imgPerfil-->
          <nav class="navigation">
          <ul class="mainmenu">
            <li><a href="">Dashboard</a></li>
            <li><a href="">Sliders</a></li>
            <li><a href="">Clientes</a>
              <ul class="submenu">
                <li><a href="">Pessoa Juridica</a></li>
                <li><a href="">Pessoa Fisica</a></li>
                <li><a href="">Desabilitados</a></li>
              </ul>
            </li>
            <li><a href="">Loja</a></li>
          </ul>
          </nav>
      </div>
      <div class="column" id="columnRightContent">
        <div class="contentRight">
            <div class="titleRecourse">
              <span class="titleContent">Clientes </span>
              <span class="subtitleContent">&nbsp;/ Pessoa Juridica</span>
            </div>
            <!--FORMS-->
            <!--Section01-->
            <div id="formsSection01">
              <div class="field">
                <label class="label">Nome</label>
                <div class="control">
                  <input class="input" type="text" placeholder="Informe um nome para pesquisar">
                </div>
              </div>
              <div class="field">
                <label class="label">Cnpj</label>
                <div class="control">
                  <input class="input" type="text" placeholder="Informe o cnpj">
                </div>
              </div>
              <div class="field">
                <label class="label">Categoria</label>
                <div class="control">
                  <div class="select">
                    <select>
                      <option>Loja</option>
                      <option>Prestador de serviço</option>
                    </select>
                  </div>
                </div>
              </div>
          </div>
          <!--Section01-->
          <!--Section02-->
          <div id="formsSection02">
            <div class="field">
            <label class="label">Estado</label>
            <div class="control">
              <div class="select">
                <select>
                  <option>PB</option>
                  <option>RN</option>
                </select>
              </div>
            </div>
            </div>
            <div class="field">
            <label class="label">Cidade</label>
            <div class="control">
              <div class="select">
                <select>
                  <option>João Pessoa</option>
                  <option>Campina Grande</option>
                </select>
              </div>
            </div>
            </div>
            <div class="field">
            <label class="label">Bairro</label>
            <div class="control">
              <div class="select">
                <select>
                  <option>Torre</option>
                  <option>Mandacaru</option>
                </select>
              </div>
            </div>
            </div>
            <div class="field">
            <label class="label">Situação</label>
            <div class="control">
              <div class="select">
                <select>
                  <option>Ativo</option>
                  <option>Inativo</option>
                </select>
              </div>
            </div>
            </div>
            <div class="field">
            <label class="label">Plano</label>
            <div class="control">
              <div class="select">
                <select>
                  <option>Básico</option>
                  <option>Completo</option>
                </select>
              </div>
            </div>
            </div>
            <div class="field">
            <label class="label">Vencimento</label>
            <div class="control">
              <div class="select">
                <select>
                  <option>05</option>
                  <option>20</option>
                </select>
              </div>
            </div>
            </div>
          </div>
          <!--Section02-->
          <!--Section03-->
          <div id="formsSection03">
            <div class="control">
              <button class="button is-primary">Pesquisar</button>
            </div>
            <div class="control">
              <button class="button button is-info" id="buttonCadastrar">Cadastrar</button>
            </div>


          </div>




          </div>
        </div>
    </div>




  </body>
</html>
