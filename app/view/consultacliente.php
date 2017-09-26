<?php include_once 'app/view/partlals/header.php'; ?>
<body>
  <!--cabecalho-->
  <header id="navHeader">
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="">
          <img src="app/assets/imgs//logoLow.png" alt="cutom 83">
        </a>
        <!-- <button class="button navbar-burger">
          <span></span>
          <span></span>
          <span></span>
        </button> -->
      </div>
    </nav>
  </header>
    <!--FimCabecalho-->
    <div class="columns is-gapless" id="containerContent">
      <div class="column is-one-quarter" id="columnLeftMenu">
        <!--PerfiL-->
        <div id="containerPerfil">
          <div id="imgperfil">
          <img src="app/assets/imgs/imagemPerfil.jpg" class="imgUser">
          </div>
            <div id="infoPerfil">
              <h1 class="title is-6" id="nameUser">Ítalo Nascimento</h1>
              <h2 class="subtitle is-6" id="typeUser">Administrador</h2>
            </div>
        </div>
        <!--FimPerfiL-->
        <!--Menu-->
        <div id="containerMenu">
          <nav class="navigation" id="menu">
            <ul class="mainmenu">
              <li><a href="">Dashboard</a></li>
              <li><a href="">Sliders</a></li>
              <li><a href="">Clientes</a>
                <ul class="submenu">
                  <li><a href="">Pessoa Fisica</a></li>
                  <li><a href="">Pessoa Juridica</a></li>
                  <li><a href="">Desabilitados</a></li>
                </ul>
              </li>
              <li><a href="">Lojas</a></li>
              <li><a href="">Categorias</a></li>
              <li><a href="">Produtos</a></li>
              <li><a href="">Alertas</a></li>
              <li><a href="">Newsletter</a></li>
              <li><a href="">Depoimentos</a></li>
              <li><a href="">Comntarios</a></li>
              <li><a href="">Ofertas</a></li>
              <li><a href="">Usuarios do sistema</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="column" id="contentRight">
        <div id="sectionTitle">
          <h1 class="title" id="titleRecourse">Cadastro</h1>
          <h2 class="subtitle" id="subtitleRecourse">Pessoa Juridica</h2>
        </div>
        <form action="" method="post">
        <div id="containerSerctionForms1">
          <div class="columns is-gapless">
              <div class="column is-narrow" id="sectionForms1">
                  <label class="label" for="categoria">Categoria</label>
                    <div class="select">
                      <select>
                        <option>Loja</option>
                        <option>Prestador de serviço</option>
                      </select>
                    </div>
                </div>
                <div class="column" id="sectionForms2">
                  <label for="cnpj" class="label">CNPJ</label>
                  <input class="input" type="text" placeholder="Informe o CNPJ">
                </div>
                <div class="column" id="sectionForms3">
                  <label for="razaoSocial" class="label">Razão Social</label>
                  <input class="input" type="text" placeholder="informe a Razão Social">
                </div>
          </div>
        </div>
        <div id="containerSerctionForms2">
          <div class="columns is-gapless">
                <div class="column" id="sectionForms4">
                  <label for="email" class="label">Email</label>
                  <input class="input" type="text" placeholder="Informe o Email">
                </div>
                <div class="column" id="sectionForms5">
                  <label for="site" class="label">Site</label>
                  <input class="input" type="text" placeholder="informe a Site">
                </div>
          </div>
        </div>
        <div id="containerSerctionForms3">
          <div class="columns is-gapless">
                <div class="column is-narrow" id="sectionForms6">
                  <label for="cep" class="label">Cep</label>
                  <input class="input" type="text" placeholder="Informe o Cep">
                </div>
                <div class="column" id="sectionForms7">
                  <label for="endereco" class="label">Endereço</label>
                  <input class="input" type="text" placeholder="informe o Endereço">
                </div>
                <div class="column" id="sectionForms8">
                  <label for="complemento" class="label">Complemento</label>
                  <input class="input" type="text" placeholder="informe o complemento, caso haja">
                </div>
          </div>
        </div>
        <div id="containerSerctionForms4">
          <div class="columns is-gapless">
                <div class="column is-narrow" id="sectionForms9">
                  <label for="numero" class="label">Número</label>
                  <input class="input" type="text" placeholder="Informe o número">
                </div>
                <div class="column is-narrow" id="sectionForms10">
                    <label class="label" for="estado">Estado</label>
                      <div class="select">
                        <select>
                          <option>Paraíba</option>
                          <option>Rio Grande do Norte</option>
                        </select>
                      </div>
                  </div>
                <div class="column is-narrow" id="sectionForms11">
                  <label class="label" for="cidade">Cidade</label>
                    <div class="select">
                      <select id="selectCidade">
                        <option>João Pessoa</option>
                        <option>Campina Grande</option>
                      </select>
                    </div>
                </div>
                <div class="column is-narrow" id="sectionForms12">
                  <label class="label" for="bairro">Bairro</label>
                    <div class="select">
                      <select id="selectBairro">
                        <option>Torre</option>
                        <option>Valentina de figueiredo</option>
                      </select>
                    </div>
                </div>
          </div>
        </div>
          <div id="containerSerctionForms5">
            <div class="columns is-gapless">
                  <div class="column is-narrow" id="sectionForms13">
                    <label for="telFixo" class="label">Telefone Fixo</label>
                    <input class="input" type="text" placeholder="Informe o telefone fixo">
                  </div>
                  <div class="column is-narrow" id="sectionForms14">
                    <label for="telCel" class="label">Telefone Celular</label>
                    <input class="input" type="text" placeholder="informe o telefone celular">
                  </div>
            </div>
          </div>
          <div id="containerSerctionForms6">
            <div class="columns is-gapless">
                  <div class="column is-narrow" id="sectionForms15">
                    <label for="login" class="label">Login</label>
                    <input class="input" type="text" placeholder="Informe o Login">
                  </div>
                  <div class="column is-narrow" id="sectionForms16">
                    <label for="senha" class="label">Senha</label>
                    <input class="input" type="text" placeholder="informe a Senha">
                  </div>
                  <div class="column is-narrow" id="sectionForms17">
                    <label class="label" for="grupo">Grupos</label>
                      <div class="select">
                        <select id="selectBairro">
                          <option>Ativos</option>
                          <option>Inativos</option>
                        </select>
                      </div>
                  </div>
                  <div class="column is-narrow" id="sectionForms18">
                    <label class="label" for="dataVencimento">Data de vencimento</label>
                      <div class="select">
                        <select id="selectBairro">
                          <option>05</option>
                          <option>20</option>
                        </select>
                      </div>
                  </div>
            </div>
          </div>
          <div id="containerSerctionForms7">
            <div class="columns is-gapless">
            <div class="column" id="sectionForms19">
              <label for="infoSigilo" class="label">Informações Sigilosas</label>
              <textarea class="textarea" placeholder=""></textarea>
            </div>
            <div class="column" id="sectionForms20">
              <div class="field">
              <label class="label">Logomarca</label>
              <div class="file is-small is-boxed">
                <label class="file-label">
                  <input class="file-input" type="file" name="resume">
                  <span class="file-cta">
                    <span class="file-icon">
                      <i class="fa fa-upload"></i>
                    </span>
                    <span class="file-label">
                      Small file…
                    </span>
                  </span>
                </label>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div id="containerSerctionForms8">
          <div class="columns is-gapless">
                <div class="column" id="sectionForms21">
                  <label for="cadastrar" class="label">Cadastrar</label>
                  <input class="button is-info" type="submit" value="Cadastrar" id="buttonCadastro">
                </div>
          </div>
        </div>

        </form>
      </div>
    </div>
  </body>
</html>
